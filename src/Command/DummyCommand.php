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
 * @since         2.8.0
 */
namespace CipherguardTestData\Command;

use App\Command\CipherguardCommand;
use Cake\Console\ConsoleOptionParser;

/**
 * Dummy shell command.
 */
class DummyCommand extends CipherguardCommand
{
    /**
     * @inheritDoc
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser->setDescription(__('The Cipherguard CLI offers an access to the cipherguard API directly from the console.'));

        $parser->addArgument('Insert', [
            'help' => __d('cake_console', 'Insert dummies'),
        ]);

        return $parser;
    }
}
