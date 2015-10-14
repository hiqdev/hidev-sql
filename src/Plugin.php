<?php

/*
 * Hidev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-config-sql
 * @package   hidev-config-sql
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\hidev\config\sql;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hiqdev/hidev/config/sql/config.yml',
        ],
        'views' => [
            '@hiqdev/hidev/config/sql/views',
        ],
    ];
}
