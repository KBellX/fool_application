<?php

// $CONFIG = [
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
        'path' => './runtime/log',  // 如何区分根目录与当前目录
    ],
];
