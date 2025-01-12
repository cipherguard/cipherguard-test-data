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
use CipherguardTestData\Command\Base\ResourcesDataCommand;

class XssResourcesDataCommand extends ResourcesDataCommand
{
    protected $_truncate = false;

    /**
     * Get the resource data
     *
     * @return array
     */
    public function getData()
    {
        $exploits = Xss::getExploits();
        $resources = [];

        foreach ($exploits as $rule => $exploit) {
            $resources[] = [
                'id' => UuidFactory::uuid('resource.id.xss' . count($resources)),
                'name' => substr($exploit, 0, 64),
                'username' => substr($exploit, 0, 64),
                'uri' => substr($exploit, 0, 255),
                'description' => substr($exploit, 0, 10000),
                'deleted' => 0,
                'created_by' => UuidFactory::uuid('user.id.xss' . count($resources)),
                'modified_by' => UuidFactory::uuid('user.id.xss' . count($resources)),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
                'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
            ];
        }

        return $resources;
    }
}
