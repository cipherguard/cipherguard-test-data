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
namespace CipherguardTestData\Command\Large;

use App\Utility\UuidFactory;
use Cake\Core\Configure;
use CipherguardTestData\Lib\DataCommand;

class ProfilesDataCommand extends DataCommand
{
    public $entityName = 'Profiles';

    /**
     * Get the profile data
     *
     * @return array
     */
    public function getData()
    {
        $profiles[] = [
            'id' => UuidFactory::uuid('profile.id.admin'),
            'user_id' => UuidFactory::uuid('user.id.admin'),
            'gender' => 'm',
            'date_of_birth' => '1970-01-01',
            'title' => 'Mr',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ];
        $profiles[] = [
            'id' => UuidFactory::uuid('profile.id.anonymous'),
            'user_id' => UuidFactory::uuid('user.id.anonymous'),
            'gender' => 'm',
            'date_of_birth' => '1980-12-10',
            'title' => 'Mr',
            'first_name' => 'Anonymous',
            'last_name' => 'User',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ];
        $max = Configure::read('CipherguardTestData.scenarios.large.install.count.users');
        for ($i = 0; $i < $max; $i++) {
            $profiles[] = [
                'id' => UuidFactory::uuid('profile.id.user_' . $i),
                'user_id' => UuidFactory::uuid('user.id.user_' . $i),
                'gender' => '',
                'date_of_birth' => '1970-01-01',
                'title' => '',
                'first_name' => 'First name ' . $i,
                'last_name' => 'Last name ' . $i,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ];
        }

        return $profiles;
    }
}
