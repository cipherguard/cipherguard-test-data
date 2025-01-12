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

class CommentsDataCommand extends DataCommand
{
    public $entityName = 'Comments';

    /**
     * Get the comments data
     *
     * @return array
     */
    public function getData()
    {
        $comments[] = [
            'id' => UuidFactory::uuid('comment.id.apache-1'),
            'parent_id' => null,
            'user_id' => UuidFactory::uuid('user.id.irene'),
            'foreign_key' => UuidFactory::uuid('resource.id.apache'),
            'foreign_model' => 'Resource',
            'content' => 'this is a short comment',
            'created' => '2012-11-25 13:39:25',
            'modified' => '2012-11-25 13:39:25',
            'created_by' => UuidFactory::uuid('user.id.irene'),
            'modified_by' => UuidFactory::uuid('user.id.irene'),
        ];
        $comments[] = [
            'id' => UuidFactory::uuid('comment.id.apache-2'),
            'parent_id' => UuidFactory::uuid('comment.id.apache-1'),
            'user_id' => UuidFactory::uuid('user.id.irene'),
            'foreign_key' => UuidFactory::uuid('resource.id.apache'),
            'foreign_model' => 'Resource',
            'content' => 'this is a reply to the short comment',
            'created' => '2012-11-25 13:39:26',
            'modified' => '2012-11-25 13:39:26',
            'created_by' => UuidFactory::uuid('user.id.irene'),
            'modified_by' => UuidFactory::uuid('user.id.irene'),
        ];

        return $comments;
    }
}
