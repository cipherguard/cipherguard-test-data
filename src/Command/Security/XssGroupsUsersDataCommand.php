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

use CipherguardTestData\Lib\Security\Xss;
use CipherguardTestData\Command\Base\GroupsUsersDataCommand;

class XssGroupsUsersDataCommand extends GroupsUsersDataCommand
{
    protected $_truncate = false;

    /**
     * Get groups users settings
     *
     * @return array
     */
    protected function getGroupsUsersSettings()
    {
        $exploits = Xss::getExploits();
        $settings = [];

        foreach ($exploits as $groupRule => $GroupExploit) {
            $groupAlias = 'xss' . count($settings);
            $i = 0;
            foreach ($exploits as $userRule => $userExploit) {
                $userAlias = "xss$i";
                $settings[$groupAlias]['managers'][] = $userAlias;
                $settings[$groupAlias]['users'][] = $userAlias;
                $i++;
            }
        }

        return $settings;
    }
}
