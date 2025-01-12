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

use App\Model\Entity\Role;
use App\Utility\UuidFactory;
use CipherguardTestData\Lib\DataCommand;

class FavoritesDataCommand extends DataCommand
{
    public $entityName = 'Favorites';

    /**
     * Get the favorites data
     *
     * @return array
     */
    public function getData()
    {
        $favorites = [];

        $usersTable = $this->fetchTable('Users');
        $resourcesTable = $this->fetchTable('Resources');

        $users = $usersTable->findIndex(Role::USER);
        foreach ($users as $user) {
            $start = time();
            $options['order']['Resources.modified'] = true;
            $resources = $resourcesTable->findIndex($user->id, $options);
            foreach ($resources as $resource) {
                $favorites[] = [
                    'id' => UuidFactory::uuid('favorite.id.' . $resource->id . '-' . $user->id),
                    'user_id' => $user->id,
                    'foreign_key' => $resource->id,
                    'foreign_model' => 'Resource',
                    'created' => date('Y-m-d H:i:s')
                ];
            }
            $end = time();
            unset($resources);
        }

        return $favorites;
    }
}
