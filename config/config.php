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

return [
    'CipherguardTestData' => [
        /*
         * Save strategy can improve significantly the performance of the import.
         * - default: Save the entity one by one using the cake table model
         * - saveMany: Save the entities by batch
         * - sqlInfile: Save the entities using the sql LOAD DATA INFILE primitive.
         *   This strategy can significantly improve the performance.
         *   This strategy requires the mysql user to have some privilegies to access the LOAD DATA INFILE primitive.
         */
        'saveStrategy' => 'default',
        'scenarios' => [
            'default' => [
                'install' => [
                    'shellTasks' => [
                        \CipherguardTestData\Command\Base\RolesDataCommand::class,
                        \CipherguardTestData\Command\Base\ResourceTypesDataCommand::class,
                        \CipherguardTestData\Command\Base\UsersDataCommand::class,
                        \CipherguardTestData\Command\Security\XssUsersDataCommand::class,
                        \CipherguardTestData\Command\Base\ProfilesDataCommand::class,
                        \CipherguardTestData\Command\Security\XssProfilesDataCommand::class,
                        \CipherguardTestData\Command\Base\AvatarsDataCommand::class,
                        \CipherguardTestData\Command\Base\GpgkeysDataCommand::class,
                        \CipherguardTestData\Command\Base\GroupsDataCommand::class,
                        \CipherguardTestData\Command\Security\XssGroupsDataCommand::class,
                        \CipherguardTestData\Command\Base\GroupsUsersDataCommand::class,
                        \CipherguardTestData\Command\Security\XssGroupsUsersDataCommand::class,
                        \CipherguardTestData\Command\Base\ResourcesDataCommand::class,
                        \CipherguardTestData\Command\Security\XssResourcesDataCommand::class,
                        \CipherguardTestData\Command\Base\PermissionsDataCommand::class,
                        \CipherguardTestData\Command\Security\XssPermissionsDataCommand::class,
                        \CipherguardTestData\Command\Base\FavoritesDataCommand::class,
                        \CipherguardTestData\Command\Base\CommentsDataCommand::class,
                        \CipherguardTestData\Command\Security\XssCommentsDataCommand::class,
                        \CipherguardTestData\Command\Base\SecretsDataCommand::class,
                        \CipherguardTestData\Command\Base\EmailQueueDataCommand::class,
                        \CipherguardTestData\Command\Pro\AccountSettingsDataCommand::class,
                        \CipherguardTestData\Command\Pro\TagsDataCommand::class,
                        \CipherguardTestData\Command\Pro\ResourcesTagsDataCommand::class,
                        \CipherguardTestData\Command\Base\FoldersPermissionsDataCommand::class,
                        \CipherguardTestData\Command\Base\FoldersDataCommand::class,
                        \CipherguardTestData\Command\Base\FoldersRelationsDataCommand::class,
                    ]
                ],
                'fixturize' => [
                    'shellTasks' => [
                        \CipherguardTestData\Command\Base\RolesDataCommand::class,
                        \CipherguardTestData\Command\Base\UsersDataCommand::class,
                        \CipherguardTestData\Command\Base\ProfilesDataCommand::class,
                        \CipherguardTestData\Command\Base\AvatarsDataCommand::class,
                        \CipherguardTestData\Command\Base\GpgkeysDataCommand::class,
                        \CipherguardTestData\Command\Base\GroupsDataCommand::class,
                        \CipherguardTestData\Command\Base\GroupsUsersDataCommand::class,
                        \CipherguardTestData\Command\Base\ResourcesDataCommand::class,
                        \CipherguardTestData\Command\Base\PermissionsDataCommand::class,
                        \CipherguardTestData\Command\Base\FavoritesDataCommand::class,
                        \CipherguardTestData\Command\Base\CommentsDataCommand::class,
                        \CipherguardTestData\Command\Base\SecretsDataCommand::class,
                        \CipherguardTestData\Command\Base\EmailQueueDataCommand::class,
                    ]
                ]
            ],
            'alt0' => [
                'install' => [
                    'shellTasks' => [
                        \CipherguardTestData\Command\Base\ResourceTypesDataCommand::class,
                        \CipherguardTestData\Command\Base\GroupsDataCommand::class,
                        \CipherguardTestData\Command\Base\UsersDataCommand::class,
                        \CipherguardTestData\Command\Base\ProfilesDataCommand::class,
                        \CipherguardTestData\Command\Base\GpgkeysDataCommand::class,
                        \CipherguardTestData\Command\Base\RolesDataCommand::class,
                        \CipherguardTestData\Command\Alt0\GroupsUsersDataCommand::class,
                        \CipherguardTestData\Command\Alt0\PermissionsDataCommand::class,
                        \CipherguardTestData\Command\Base\ResourcesDataCommand::class,
                        \CipherguardTestData\Command\Alt0\SecretsDataCommand::class,
                    ]
                ],
                'fixturize' => [
                    'shellTasks' => [
                        \CipherguardTestData\Command\Base\GroupsDataCommand::class,
                        \CipherguardTestData\Command\Base\UsersDataCommand::class,
                        \CipherguardTestData\Command\Base\ProfilesDataCommand::class,
                        \CipherguardTestData\Command\Base\GpgkeysDataCommand::class,
                        \CipherguardTestData\Command\Base\RolesDataCommand::class,
                        \CipherguardTestData\Command\Alt0\GroupsUsersDataCommand::class,
                        \CipherguardTestData\Command\Alt0\PermissionsDataCommand::class,
                        \CipherguardTestData\Command\Base\ResourcesDataCommand::class,
                        \CipherguardTestData\Command\Alt0\SecretsDataCommand::class,
                    ]
                ]
            ],
            'large' => [
                'install' => [
                    'count' => [
                        'chunk_size' => 1000,
                        'users' => 50,
                        'groups' => 100,
                        'resources_for_group_all_users' => 500,
                        'resources_foreach_user' => 50,
                        'tags_personal' => 1,
                        'tags_shared' => 2
                    ],
                    'shellTasks' => [
                        \CipherguardTestData\Command\Base\ResourceTypesDataCommand::class,
                        \CipherguardTestData\Command\Base\RolesDataCommand::class,
                        \CipherguardTestData\Command\Large\UsersDataCommand::class,
                        \CipherguardTestData\Command\Large\ProfilesDataCommand::class,
                        \CipherguardTestData\Command\Base\AvatarsDataCommand::class,
                        \CipherguardTestData\Command\Base\GpgkeysDataCommand::class,
                        \CipherguardTestData\Command\Large\GroupsDataCommand::class,
                        \CipherguardTestData\Command\Large\GroupsUsersDataCommand::class,
                        \CipherguardTestData\Command\Large\ResourcesDataCommand::class,
                        \CipherguardTestData\Command\Large\PermissionsDataCommand::class,
                        \CipherguardTestData\Command\Large\FavoritesDataCommand::class,
                        \CipherguardTestData\Command\Large\CommentsDataCommand::class,
                        \CipherguardTestData\Command\Large\SecretsDataCommand::class,
                        \CipherguardTestData\Command\Large\TagsDataCommand::class,
                        \CipherguardTestData\Command\Large\ResourcesTagsDataCommand::class,
                    ]
                ]
            ]
        ]
    ]
];
