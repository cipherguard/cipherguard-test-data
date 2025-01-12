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

class ResourcesDataCommand extends DataCommand
{
    public $entityName = 'Resources';

    /**
     * Get the resource data
     *
     * @return array
     */
    public function getData()
    {
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.apache'),
            'name' => 'apache',
            'username' => 'www-data',
            'uri' => 'http://www.apache.org/',
            'description' => 'Apache is the world\'s most used web server software.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.ada'),
            'modified_by' => UuidFactory::uuid('user.id.ada'),
            'created' => date('Y-m-d H:i:s', strtotime('-2 days')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 days')),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.april'),
            'name' => 'april',
            'username' => 'support',
            'uri' => 'https://www.april.org/',
            'description' => 'L\'association pionnière du logiciel libre en France',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.betty'),
            'modified_by' => UuidFactory::uuid('user.id.betty'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.bower'),
            'name' => 'bower',
            'username' => 'bower',
            'uri' => 'bower.io',
            'description' => 'A package manager for the web!',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.carol'),
            'modified_by' => UuidFactory::uuid('user.id.carol'),
            'created' => date('Y-m-d H:i:s', strtotime('-2 years')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 years')),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.cakephp'),
            'name' => 'cakephp',
            'username' => 'cake',
            'uri' => 'cakephp.org',
            'description' => 'The rapid and tasty php development framework',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.ada'),
            'modified_by' => UuidFactory::uuid('user.id.ada'),
            'created' => date('Y-m-d H:i:s', strtotime('-2 hours')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 hours')),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.canjs'),
            'name' => 'Canjs',
            'username' => 'yeswecan',
            'uri' => 'canjs.com',
            'description' => 'CanJS is a JavaScript library that makes developing complex applications simple and fast.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.edith'),
            'modified_by' => UuidFactory::uuid('user.id.edith'),
            'created' => date('Y-m-d H:i:s', strtotime('-2 weeks')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 weeks')),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.centos'),
            'name' => 'centos',
            'username' => 'root',
            'uri' => 'centos.org',
            'description' => 'The CentOS Linux distribution is a platform derived from Red Hat Enterprise Linux (RHEL).',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.dame'),
            'modified_by' => UuidFactory::uuid('user.id.dame'),
            'created' => date('Y-m-d H:i:s', strtotime('-2 months')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 months')),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.chai'),
            'name' => 'chai',
            'username' => 'masala',
            'uri' => 'http://chaijs.com/',
            'description' => 'Chai is a BDD / TDD assertion library for node and the browser',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.betty'),
            'modified_by' => UuidFactory::uuid('user.id.betty'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.composer'),
            'name' => 'composer',
            'username' => 'getcomposer',
            'uri' => 'getcomposer.org',
            'description' => 'Dependency Manager for PHP',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.carol'),
            'modified_by' => UuidFactory::uuid('user.id.carol'),
            'created' => date('Y-m-d H:i:s', strtotime('-2 minutes')),
            'modified' => date('Y-m-d H:i:s', strtotime('-1 minutes')),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.debian'),
            'name' => 'Debian',
            'username' => 'jessy',
            'uri' => 'cipherguard.dev',
            'description' => 'The universal operating system',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.dame'),
            'modified_by' => UuidFactory::uuid('user.id.dame'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.docker'),
            'name' => 'Docker',
            'username' => 'docker',
            'uri' => 'https://www.docker.com/',
            'description' => 'An open platform for distributed applications for developers and sysadmins',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.edith'),
            'modified_by' => UuidFactory::uuid('user.id.edith'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.enlightenment'),
            'name' => 'Enlightenment',
            'username' => 'efl',
            'uri' => 'https://www.enlightenment.org/',
            'description' => 'Party like it\'s 1996.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.ada'),
            'modified_by' => UuidFactory::uuid('user.id.ada'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.fosdem'),
            'name' => 'FOSDEM',
            'username' => 'fodem',
            'uri' => 'fosdem.org',
            'description' => 'FOSDEM is a free event for software developers to meet, share ideas and collaborate.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.betty'),
            'modified_by' => UuidFactory::uuid('user.id.betty'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.framasoft'),
            'name' => 'framasoft',
            'username' => 'framasoft',
            'uri' => 'https://soutenir.framasoft.org/',
            'description' => 'Parce que libre ne veut pas dire gratuit!',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.carol'),
            'modified_by' => UuidFactory::uuid('user.id.carol'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.fsfe'),
            'name' => 'free software foundation europe',
            'username' => 'fsfe',
            'uri' => 'https://fsfe.org/index.en.html',
            'description' => 'Free Software Foundation Europe is a charity that empowers users to control technology.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.dame'),
            'modified_by' => UuidFactory::uuid('user.id.dame'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.ftp'),
            'name' => 'ftp',
            'username' => 'user',
            'uri' => 'ftp://192.168.1.1',
            'description' => 'ftp test',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.edith'),
            'modified_by' => UuidFactory::uuid('user.id.edith'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.git'),
            'name' => 'Git',
            'username' => 'git',
            'uri' => 'git-scm.com',
            'description' => 'Git is a free and open source distributed version control system.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.dame'),
            'modified_by' => UuidFactory::uuid('user.id.dame'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.gnupg'),
            'name' => 'Gnupg',
            'username' => 'gpg',
            'uri' => 'gnupg.org',
            'description' => 'GnuPG is a complete and free implementation of the OpenPGP standard as defined by RFC4880',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.carol'),
            'modified_by' => UuidFactory::uuid('user.id.carol'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.grogle'),
            'name' => 'Grogle',
            'username' => 'grd',
            'uri' => 'http://fr.groland.wikia.com/wiki/Grogle',
            'description' => '',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.ada'),
            'modified_by' => UuidFactory::uuid('user.id.ada'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.grunt'),
            'name' => 'Grunt',
            'username' => 'grunt',
            'uri' => 'gruntjs.com',
            'description' => 'The javascript taskrunner',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.betty'),
            'modified_by' => UuidFactory::uuid('user.id.betty'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.inkscape'),
            'name' => 'Inkscape',
            'username' => 'vector',
            'uri' => 'https://inkscape.org/',
            'description' => 'Inkscape is a professional vector graphics editor. It is free and open source.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.edith'),
            'modified_by' => UuidFactory::uuid('user.id.edith'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.jquery'),
            'name' => 'Jquery',
            'username' => 'jquery',
            'uri' => 'jquery.com',
            'description' => 'jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML.',
            'deleted' => 1,
            'created_by' => UuidFactory::uuid('user.id.dame'),
            'modified_by' => UuidFactory::uuid('user.id.dame'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.kde'),
            'name' => 'KDE',
            'username' => 'community',
            'uri' => 'kde.org',
            'description' => 'The Plasma Desktop is one of the most recognized projects of KDE',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.betty'),
            'modified_by' => UuidFactory::uuid('user.id.betty'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.linux'),
            'name' => 'Linux',
            'username' => 'linus',
            'uri' => 'kernel.org',
            'description' => 'The Linux kernel is an open-source monolithic Unix-like computer operating system kernel.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.hedy'),
            'modified_by' => UuidFactory::uuid('user.id.hedy'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.mailvelope'),
            'name' => 'Mailvelope',
            'username' => 'thomas',
            'uri' => 'mailvelope.com',
            'description' => 'Mailvelope is a browser extension that enables the exchange of encrypted emails following the OpenPGP encryption standard.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.jean'),
            'modified_by' => UuidFactory::uuid('user.id.jean'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.mocha'),
            'name' => 'Mocha',
            'username' => 'svp',
            'uri' => 'mochajs.org',
            'description' => 'Mocha is a feature-rich JavaScript test framework running on Node.js and in the browser, making asynchronous testing simple and fun.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.kathleen'),
            'modified_by' => UuidFactory::uuid('user.id.kathleen'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.nodejs'),
            'name' => 'Nodejs',
            'username' => 'npm',
            'uri' => 'nodejs.org',
            'description' => 'Node.js® is a JavaScript runtime built on Chrome\'s V8 JavaScript engine.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.marlyn'),
            'modified_by' => UuidFactory::uuid('user.id.marlyn'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.openpgpjs'),
            'name' => 'OpenGPGJS',
            'username' => 'openpgpjs',
            'uri' => 'openpgpjs.org/',
            'description' => 'This project aims to provide an Open Source OpenPGP library in JavaScript so it can be used on virtually every device.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.nancy'),
            'modified_by' => UuidFactory::uuid('user.id.nancy'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.phpunit'),
            'name' => 'PHPunit',
            'username' => 'phpunit',
            'uri' => 'phpunit.de',
            'description' => 'PHPUnit is a programmer-oriented testing framework for PHP.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.ursula'),
            'modified_by' => UuidFactory::uuid('user.id.ursula'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.qgis'),
            'name' => 'QGIS',
            'username' => 'qgis',
            'uri' => 'phpunit.de',
            'description' => 'QGIS is a free and open-source cross-platform desktop geographic information system (GIS) application that supports viewing, editing, and analysis of geospatial data.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.wang'),
            'modified_by' => UuidFactory::uuid('user.id.wang'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.selenium'),
            'name' => 'Selenium',
            'username' => 'selenium',
            'uri' => 'docs.seleniumhq.org',
            'description' => 'Selenium automates browsers.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.yvonne'),
            'modified_by' => UuidFactory::uuid('user.id.yvonne'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.stealjs'),
            'name' => 'StealJs',
            'username' => 'stealjs',
            'uri' => 'stealjs.com',
            'description' => 'Futuristic JavaScript dependency loader and builder.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.adele'),
            'modified_by' => UuidFactory::uuid('user.id.adele'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];
        $resources[] = [
            'id' => UuidFactory::uuid('resource.id.virtualbox'),
            'name' => 'Virtualbox',
            'username' => 'virtualbox',
            'uri' => 'virtualbox.org',
            'description' => 'VirtualBox is a powerful x86 and AMD64/Intel64 virtualization product for enterprise as well as home use.',
            'deleted' => 0,
            'created_by' => UuidFactory::uuid('user.id.adele'),
            'modified_by' => UuidFactory::uuid('user.id.adele'),
            'resource_type_id' => UuidFactory::uuid('resource-types.id.password-string')
        ];

        return $resources;
    }
}
