<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/data/gantry5/themes/g5_hydrogen/config/default/layout.yaml',
    'modified' => 1693299822,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1693297350
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-8477 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-8585'
                ]
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
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-3134 40',
                    1 => 'spacer-5945 30',
                    2 => 'branding-1311 30'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-3654'
                ]
            ]
        ],
        'structure' => [
            'header' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'main' => [
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
            'position-header' => [
                'attributes' => [
                    'key' => 'header'
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
