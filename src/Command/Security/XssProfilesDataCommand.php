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
use CipherguardTestData\Command\Base\ProfilesDataCommand;

class XssProfilesDataCommand extends ProfilesDataCommand
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
        $profiles = [];

        foreach ($exploits as $rule => $exploit) {
            $userAlias = 'xss' . count($profiles);
            $profiles[] = [
                'id' => UuidFactory::uuid("profile.id.$userAlias"),
                'user_id' => UuidFactory::uuid("user.id.$userAlias"),
                'gender' => 'f',
                'date_of_birth' => '1970-01-01',
                'title' => 'Ms',
                'first_name' => substr($exploit, 0, 255),
                'last_name' => substr($exploit, 0, 255),
            ];
        }

        return $profiles;
    }
}
