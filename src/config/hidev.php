<?php
/**
 * HiDev plugin for SQL projects
 *
 * @link      https://github.com/hiqdev/hidev-sql
 * @package   hidev-sql
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */


return [
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/sql/views'],
                ],
            ],
        ],
    ],
];
