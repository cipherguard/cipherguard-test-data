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
use CipherguardTestData\Command\Base\CommentsDataCommand;

class XssCommentsDataCommand extends CommentsDataCommand
{
    protected $_truncate = false;

    /**
     * Get the comments data
     *
     * @return array
     */
    public function getData()
    {
        $comments = [];
        $exploits = array_values(Xss::getExploits());
        $resourcesTask = new XssResourcesDataCommand();
        $resources = $resourcesTask->getData();
        $usersTask = new XssUsersDataCommand();
        $users = $usersTask->getData();

        // Add a comment to each resource for each user.
        foreach ($resources as $i => $resource) {
            foreach ($users as $j => $user) {
                $comments[] = [
                    'id' => UuidFactory::uuid("comment.id.{$resource['id']}-{$j}"),
                    'parent_id' => null,
                    'user_id' => $user['id'],
                    'foreign_key' => $resource['id'],
                    'foreign_model' => 'Resource',
                    'content' => substr($exploits[$j], 0, 255),
                    'created' => '2012-11-25 13:39:25',
                    'modified' => '2012-11-25 13:39:25',
                    'created_by' => $user['id'],
                    'modified_by' => $user['id'],
                ];
            }
        }

        return $comments;
    }
}
