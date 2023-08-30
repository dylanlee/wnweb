<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1693407400,
    'checksum' => '555e5124a5d7d568b38bb54b296e418b',
    'files' => [
        'user/data/gantry5/themes/g5_hydrogen/config/home' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/home/index.yaml',
                'modified' => 1693407204
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/home/layout.yaml',
                'modified' => 1693407203
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => 'home',
            'timestamp' => 1693407203,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1693297350
            ],
            'positions' => [
                'header' => 'Header',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-1055' => 'NOAA Logo',
                    'logo-8908' => 'CIROH Logo'
                ],
                'custom' => [
                    'custom-1694' => 'Custom HTML'
                ],
                'spacer' => [
                    'spacer-9146' => 'Spacer',
                    'spacer-5913' => 'Spacer'
                ],
                'position' => [
                    'position-position-3575' => 'Header',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-position-4140' => 'Footer'
                ],
                'menu' => [
                    'menu-9202' => 'Menu'
                ],
                'messages' => [
                    'system-messages-2298' => 'System Messages'
                ],
                'content' => [
                    'system-content-6790' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-1716' => 'Copyright'
                ],
                'branding' => [
                    'branding-8433' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-8208' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'logo-1055' => 'logo-8477',
                    'custom-1694' => 'custom-5216',
                    'logo-8908' => 'logo-4012',
                    'spacer-9146' => 'spacer-1234',
                    'position-position-3575' => 'position-header',
                    'navigation' => 'navigation',
                    'menu-9202' => 'menu-8585',
                    'footer' => 'footer',
                    'position-position-4140' => 'position-footer',
                    'copyright-1716' => 'copyright-3134',
                    'spacer-5913' => 'spacer-5945',
                    'branding-8433' => 'branding-1311',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-8208' => 'mobile-menu-3654'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1693297350
            ],
            'layout' => [
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-breadcrumbs'
                    ],
                    1 => [
                        0 => 'system-messages-2298'
                    ],
                    2 => [
                        0 => 'system-content-6790'
                    ]
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'position-breadcrumbs' => [
                    'attributes' => [
                        'key' => 'breadcrumbs'
                    ]
                ]
            ]
        ]
    ]
];
