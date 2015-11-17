<?php

/*
 * Hidev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-sql
 * @package   hidev-sql
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\sql;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hidev/sql/config.yml',
        ],
        'views' => [
            '@hidev/sql/views',
        ],
    ];
}
