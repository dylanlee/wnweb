<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/data/gantry5/themes/g5_hydrogen/config/default/layout.yaml',
    'modified' => 1693405729,
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
                    0 => 'logo-8477 10',
                    1 => 'custom-5216 30',
                    2 => 'logo-4012 10',
                    3 => 'spacer-1234 50'
                ],
                1 => [
                    0 => 'position-header'
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
            'logo-8477' => [
                'title' => 'NOAA Logo',
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'custom-5216' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<h1>Water Prediction Node</h1>
<h2>A NOAA CoastWatch Node</h2>'
                ],
                'block' => [
                    'class' => 'site-title',
                    'variations' => 'center'
                ]
            ],
            'logo-4012' => [
                'title' => 'CIROH Logo',
                'attributes' => [
                    'url' => 'https://ciroh.ua.edu/',
                    'image' => 'gantry-media://media/ciroh-logo.png',
                    'text' => 'Cooperative Institute  for Research to Operations in Hydrology'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'position-header' => [
                'attributes' => [
                    'enabled' => 0,
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
