<?php
/**
 * Cipherguard ~ Open source password manager for teams
 * Copyright (c) Cipherguard SA (https://www.cipherguard.com)
 *
 * Licensed under GNU Affero General Public License version 3 of the or any later version.
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cipherguard SA (https://www.cipherguard.com)
 * @license       https://opensource.org/licenses/AGPL-3.0 AGPL License
 * @link          https://www.cipherguard.com Cipherguard(tm)
 * @since         2.0.0
 */
namespace CipherguardTestData\Command\Base;

use App\Model\Entity\Role;
use App\Utility\UuidFactory;
use Cake\Core\Configure;
use CipherguardTestData\Lib\DataCommand;
use CipherguardTestData\Service\GetGpgkeyPathService;

class SecretsDataCommand extends DataCommand
{
    public $entityName = 'Secrets';

    /**
     * Get a set of fixed passwords
     *
     * @return array
     */
    protected function _getFixedPasswords()
    {
        return [
            UuidFactory::uuid('resource.id.apache') => '_upjvh-p@wAHP18D}OmY05M',
            UuidFactory::uuid('resource.id.april') => 'z"(-1s]3&Itdno:vPt',
            UuidFactory::uuid('resource.id.bower') => 'CL]m]x(o{sA#QW',
            UuidFactory::uuid('resource.id.centos') => 'this_23-04',
            UuidFactory::uuid('resource.id.enlightenment') => 'azertyuiop',
        ];
    }

    /**
     * Get dummy weak passwords
     *
     * @return array
     */
    protected function _getDummyPasswords()
    {
        return [
            'testpassword',
            '123456',
            'qwerty',
            '111111',
            'iloveyou',
            'adbobe123',
            'admin',
            'letmein',
            'monkey',
            'adobe',
            'sunshine',
            'princess',
            'azerty',
            'trustno1',
            'iamgod',
            'love',
            'god',
            'business',
            'cipherguard',
            'enova',
            'kevisthebest'];
    }

    /**
     * Get password for a given resource
     *
     * @param string $resourceId uuid
     * @return array
     */
    protected function _getPassword($resourceId)
    {
        static $passwords = [];

        // The resource password has already been determined.
        if (isset($passwords[$resourceId])) {
            return $passwords[$resourceId];
        }

        // If a password has been fixed for a resource.
        $fixedPasswords = $this->_getFixedPasswords();
        if (isset($fixedPasswords[$resourceId])) {
            $password = $fixedPasswords[$resourceId];
        } else {
            // Else randomly pick up one.
            $dummyPasswords = $this->_getDummyPasswords();
            $password = $dummyPasswords[array_rand($dummyPasswords)];
        }

        // Store the resource/password association for the next use.
        $passwords[$resourceId] = $password;

        return $password;
    }

    /**
     * Encrypt passwords
     *
     * @param string $text password
     * @param \Cake\ORM\Entity $user User
     * @return string
     */
    protected function _encrypt($text, $user): string
    {
        // Retrieve the user key file.
        $gpgkeyPath = (new GetGpgkeyPathService())->get($user->id);

        // Retrieve the key info.
        // As a default key can be shared among user, the encryption will require the key fingerprint.
        // As the key meta data are already stored in db, get the meta data from the db and avoid performance issue
        // by avoiding any gpg extra parsing.
        $gpgkeysTable = $this->fetchTable('Gpgkeys');
        $gpgkey = $gpgkeysTable->find('all')
            ->where(['user_id' => $user->id])
            ->first();
        $keyFingerprint = $gpgkey['fingerprint'];

        // Import the user public key.
        exec('gpg --import ' . $gpgkeyPath . ' > /dev/null 2>&1');

        // Encrypt the text.
        $command = "echo -n " . escapeshellarg($text) . " | gpg --encrypt -r " . $keyFingerprint . " -a --trust-model always";
        exec($command, $output);

        // Return the armored message.
        return implode("\n", $output);
    }

    /**
     * Get encrypted secrets
     *
     * @return array
     */
    public function getData()
    {
        if (Configure::read('cipherguard.gpg.putenv')) {
            putenv('GNUPGHOME=' . Configure::read('cipherguard.gpg.keyring'));
        }

        $secrets = [];

        $usersTable = $this->fetchTable('Users');
        $resourcesTable = $this->fetchTable('Resources');

        $users = $usersTable->findIndex(Role::USER);
        foreach ($users as $user) {
            $resources = $resourcesTable->findIndex($user->id);
            foreach ($resources as $resource) {
                $password = $this->_getPassword($resource->id);
                $armoredPassword = $this->_encrypt($password, $user);
                $secrets[] = [
                    'id' => UuidFactory::uuid("secret.id.{$resource->id}-{$user->id}"),
                    'user_id' => $user->id,
                    'resource_id' => $resource->id,
                    'data' => $armoredPassword,
                    'created_by' => $user->id
                ];
            }
        }

        return $secrets;
    }
}
