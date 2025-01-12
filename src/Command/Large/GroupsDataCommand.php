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
use CipherguardTestData\Lib\DataCommand;
use Cake\Core\Configure;

class GroupsDataCommand extends DataCommand
{
    public $entityName = 'Groups';

    /**
     * Get the groups data
     *
     * @return array
     */
    public function getData()
    {
        $groups[] = [
            'id' => UuidFactory::uuid("group.id.all_users"),
            'name' => "All users",
            'deleted' => 0,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'created_by' => UuidFactory::uuid('user.id.admin'),
            'modified_by' => UuidFactory::uuid('user.id.admin')
        ];

        $max = Configure::read('CipherguardTestData.scenarios.large.install.count.groups');
        for ($i = 0; $i < $max; $i++) {
            $groups[] = [
                'id' => UuidFactory::uuid("group.id.group_$i"),
                'name' => "Group $i",
                'deleted' => 0,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
                'created_by' => UuidFactory::uuid('user.id.admin'),
                'modified_by' => UuidFactory::uuid('user.id.admin')
            ];
        }

        return $groups;
    }
}
