<?php

return [
    'class' => 'yii\caching\MemCache',
    'servers' => [
        [
            'host' => 'memcached',
            'port' => 11211,
            'weight' => '100',
        ],
    ],
    'keyPrefix' => 'dispace',
    'useMemcached' => true,
];
