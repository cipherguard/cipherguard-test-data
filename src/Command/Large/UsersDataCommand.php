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

class UsersDataCommand extends DataCommand
{
    public $entityName = 'Users';
    public $fixtureName = 'LargeUsers';

    /**
     * Get user data
     *
     * @return array
     */
    public function getData()
    {
        $users[] = [
            'id' => UuidFactory::uuid('user.id.admin'),
            'username' => 'admin@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.admin'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.anonymous'),
            'username' => 'anonymous@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.anonymous'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $max = Configure::read('CipherguardTestData.scenarios.large.install.count.users');
        for ($i = 0; $i < $max; $i++) {
            $users[] = [
                'id' => UuidFactory::uuid('user.id.user_' . $i),
                'username' => 'user_' . $i . '@cipherguard.com',
                'role_id' => UuidFactory::uuid('role.id.user'),
                'active' => 1,
                'deleted' => 0,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
                'created_by' => UuidFactory::uuid('user.id.admin'),
                'modified_by' => UuidFactory::uuid('user.id.admin')
            ];
        }

        return $users;
    }
}
