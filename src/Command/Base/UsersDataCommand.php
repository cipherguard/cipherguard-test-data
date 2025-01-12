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

use App\Utility\UuidFactory;
use CipherguardTestData\Lib\DataCommand;

class UsersDataCommand extends DataCommand
{
    public $entityName = 'Users';

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
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.anonymous'),
            'username' => 'anonymous@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.anonymous'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.ada'),
            'username' => 'ada@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s', strtotime('-2 months')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 months')),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.adele'),
            'username' => 'adele@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s', strtotime('-2 months')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 months')),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.betty'),
            'username' => 'betty@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s', strtotime('-2 weeks')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 weeks')),
            'created_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.carol'),
            'username' => 'carol@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s', strtotime('-2 days')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 days')),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.dame'),
            'username' => 'dame@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s', strtotime('-2 hours')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 hours')),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.edith'),
            'username' => 'edith@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'password' => 'password',
            'active' => 1,
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s', strtotime('-2 minutes')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 minutes')),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.frances'),
            'username' => 'frances@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.grace'),
            'username' => 'grace@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.hedy'),
            'username' => 'hedy@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.irene'),
            'username' => 'irene@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.jean'),
            'username' => 'jean@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.joan'),
            'username' => 'joan@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.kathleen'),
            'username' => 'kathleen@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.lynne'),
            'username' => 'lynne@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.margaret'),
            'username' => 'margaret@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.marlyn'),
            'username' => 'marlyn@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.nancy'),
            'username' => 'nancy@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.orna'),
            'username' => 'orna@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.ping'),
            'username' => 'ping@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.ruth'),
            'username' => 'ruth@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 0,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.sofia'),
            'username' => 'sofia@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 1,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.thelma'),
            'username' => 'thelma@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.ursula'),
            'username' => 'ursula@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.wang'),
            'username' => 'wang@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];
        $users[] = [
            'id' => UuidFactory::uuid('user.id.yvonne'),
            'username' => 'yvonne@cipherguard.com',
            'role_id' => UuidFactory::uuid('role.id.user'),
            'active' => 1,
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];

        return $users;
    }
}
