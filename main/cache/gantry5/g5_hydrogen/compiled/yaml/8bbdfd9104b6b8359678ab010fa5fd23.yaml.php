<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/data/gantry5/themes/g5_hydrogen/config/tutorial_documents/layout.yaml',
    'modified' => 1693595011,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/2-col-left.png',
            'name' => '2_column_-_left',
            'timestamp' => 1693297350
        ],
        'layout' => [
            'header' => [
                
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-7106'
                ]
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            0 => [
                                0 => 'custom-9583'
                            ],
                            1 => [
                                0 => 'position-sidebar'
                            ]
                        ]
                    ],
                    1 => [
                        'main 80' => [
                            0 => [
                                0 => 'position-breadcrumbs'
                            ],
                            1 => [
                                0 => 'system-messages-1401'
                            ],
                            2 => [
                                0 => 'system-content-7902'
                            ]
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-8307 40',
                    1 => 'spacer-5639 30',
                    2 => 'branding-3302 30'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-8446'
                ]
            ]
        ],
        'structure' => [
            'header' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'block' => [
                    'fixed' => 1
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'custom-9583' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => 'Menu will go here'
                ]
            ],
            'position-sidebar' => [
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ],
            'position-breadcrumbs' => [
                'attributes' => [
                    'key' => 'breadcrumbs'
                ]
            ],
            'position-footer' => [
                'attributes' => [
                    'key' => 'footer'
                ]
            ]
        ]
    ]
];
