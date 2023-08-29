<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/learn2-git-sync/learn2-git-sync.yaml',
    'modified' => 1693297606,
    'size' => 715,
    'data' => [
        'enabled' => true,
        'root_page' => NULL,
        'top_level_version' => false,
        'google_analytics_code' => NULL,
        'home_url' => NULL,
        'github' => [
            'position' => 'top',
            'icon' => NULL,
            'tree' => NULL
        ],
        'default_taxonomy_category' => 'docs',
        'style' => 'default',
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'themes://learn2-git-sync',
                            1 => 'themes://learn2'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
