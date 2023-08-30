<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/accounts/dlee.yaml',
    'modified' => 1693414029,
    'size' => 560,
    'data' => [
        'state' => 'enabled',
        'email' => 'dylan.lee@noaa.gov',
        'fullname' => 'Dylan Lee',
        'title' => 'Project Lead',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'I5F2HQRT7DZQFRW7YDWG6HLVAN6CIFRX',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$x5UkCNhJL/TZHuIPXp36c.quTFM5eqimGNRWC8OshEr1v7OV5puiS',
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true,
                'gantry' => true
            ]
        ]
    ]
];
