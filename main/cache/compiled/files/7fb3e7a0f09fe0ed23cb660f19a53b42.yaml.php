<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/themer/blueprints/themer.yaml',
    'modified' => 1693296991,
    'size' => 513,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.theme' => [
                                            'type' => 'themeselect',
                                            'label' => 'PLUGINS.THEMER.THEME',
                                            'help' => 'PLUGINS.THEMER.THEME_HELP',
                                            'config-default@' => 'system.pages.theme',
                                            'toggleable' => true,
                                            'selectize' => [
                                                'create' => true
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
