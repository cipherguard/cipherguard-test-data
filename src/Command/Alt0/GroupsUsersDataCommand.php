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
namespace CipherguardTestData\Command\Alt0;

class GroupsUsersDataCommand extends \CipherguardTestData\Command\Base\GroupsUsersDataCommand
{
    public $fixtureName = 'GroupsUsers';

    /**
     * @inheritdoc
     * @return array
     */
    protected function getGroupsUsersSettings()
    {
        return [
            'accounting' => [
                'managers' => ['ada'],
                'users' => ['ada', 'betty']
            ],
            'board' => [
                'managers' => ['ada', 'betty'],
                'users' => ['ada', 'betty']
            ],
            'creative' => [
                'managers' => ['ada'],
                'users' => ['ada']
            ],
            'developer' => [
                'managers' => ['ada', 'betty'],
                'users' => ['ada', 'betty']
            ],
            'ergonom' => [
                'managers' => ['dame'],
                'users' => ['dame']
            ],
            'freelancer' => [
                'managers' => ['edith'],
                'users' => ['edith', 'frances', 'grace']
            ],
            'human_resource' => [
                'managers' => ['yvonne'],
                'users' => ['yvonne', 'joan']
            ],
            'leadership_team' => [
                'managers' => ['nancy'],
                'users' => ['nancy']
            ],
            'management' => [
                'managers' => ['orna'],
                'users' => ['orna', 'ping']
            ],
            'marketing' => [
                'managers' => ['ada'],
                'users' => ['ada']
            ],
            'network' => [
                'managers' => ['ursula'],
                'users' => ['ursula']
            ],
            'operations' => [
                'managers' => ['wang'],
                'users' => ['wang']
            ],
            'procurement' => [
                'managers' => ['wang'],
                'users' => ['wang']
            ],
            'quality_assurance' => [
                'managers' => ['hedy'],
                'users' => ['hedy']
            ],
            'resource_planning' => [
                'managers' => ['adele'],
                'users' => ['adele']
            ],
        ];
    }
}
