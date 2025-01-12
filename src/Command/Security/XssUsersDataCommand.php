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

use App\Utility\UuidFactory;
use CipherguardTestData\Lib\Security\Xss;
use CipherguardTestData\Command\Base\UsersDataCommand;

class XssUsersDataCommand extends UsersDataCommand
{
    protected $_truncate = false;

    /**
     * Get the users data
     *
     * @return array
     */
    public function getData()
    {
        $exploits = Xss::getExploits();
        $users = [];

        foreach ($exploits as $rule => $exploit) {
            $userAlias = 'xss' . count($users);
            $users[] = [
                'id' => UuidFactory::uuid("user.id.$userAlias"),
                'username' => "$userAlias@cipherguard.com",
                'role_id' => UuidFactory::uuid('role.id.admin'),
                'active' => 1,
                'deleted' => 0,
                'created_by' => UuidFactory::uuid('user.id.admin'),
                'modified_by' => UuidFactory::uuid('user.id.admin')
            ];
        }

        return $users;
    }
}
