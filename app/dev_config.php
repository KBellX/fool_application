<?php

return [
    'database' => [
        'read' => [
            'host' => '192.168.211.130',
            'dbname' => 'group_buy_shop',
            'username' => 'root',
            'password' => '123456',
            'port' => 3306,
            'charset' => 'utf8'
        ],
        'write' => [
            'host' => '192.168.211.130',
            'dbname' => 'study',
            'username' => 'root',
            'password' => '123456',
            'port' => 3306,
            'charset' => 'utf8'
        ]
    ],
    'log' => [
        'driver' => 'file',
        // 'path' => '',  
        // 'allow_save_type' => ['INFO', 'DEBUG', 'WARNING', 'ERROR', 'SQL'],
    ],
];
