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
namespace CipherguardTestData\Command\Security;

use App\Utility\OpenPGP\OpenPGPBackendFactory;
use App\Utility\UuidFactory;
use CipherguardTestData\Command\Base\GpgkeysDataCommand;

class XssGpgkeysDataCommand extends GpgkeysDataCommand
{
    protected $_truncate = false;

    /**
     * Return the Gpgkeys data
     *
     * @return array
     */
    public function getData()
    {
        $usersTask = new XssUsersDataCommand();
        $users = $usersTask->getData();
        OpenPGPBackendFactory::get();
        $keys = [];

        foreach ($users as $user) {
            $keyRaw = $this->_getUserKey($user['id']);
            $info = $Gpg->getKeyInfo($keyRaw);
            $keys[] = [
                'id' => UuidFactory::uuid('gpgkey.id.' . $user['id']),
                'user_id' => $user['id'],
                'armored_key' => $keyRaw,
                'bits' => $info['bits'],
                'uid' => $info['uid'],
                'key_id' => $info['key_id'],
                'fingerprint' => $info['fingerprint'],
                'type' => $info['type'],
                'expires' => !empty($info['expires']) ? date('Y-m-d H:i:s', $info['expires']) : null,
                'key_created' => date('Y-m-d H:i:s', $info['key_created']),
                'deleted' => false,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ];
        }

        return $keys;
    }
}
