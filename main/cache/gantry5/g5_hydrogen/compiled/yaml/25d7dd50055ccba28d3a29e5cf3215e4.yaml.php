<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/data/gantry5/themes/g5_hydrogen/config/home/layout.yaml',
    'modified' => 1693410006,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/home.png',
            'name' => 'home',
            'timestamp' => 1693297350
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-5099 10',
                    1 => 'custom-5832 30',
                    2 => 'logo-4700 10',
                    3 => 'spacer-4731 50'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-1072'
                ]
            ],
            '/showcase/' => [
                0 => [
                    0 => 'custom-2895'
                ]
            ],
            '/feature/' => [
                
            ],
            '/main/' => [
                0 => [
                    0 => 'system-messages-7049'
                ],
                1 => [
                    0 => 'system-content-7411'
                ]
            ],
            '/subfeature/' => [
                
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-6009 50',
                    1 => 'branding-5276 50'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-5038'
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
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'feature' => [
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
            'subfeature' => [
                'type' => 'section',
                'attributes' => [
                    'class' => 'flush',
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
            'logo-5099' => [
                'title' => 'Logo / Image'
            ],
            'custom-5832' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<h1>Water Prediction Node</h1>
<h2>A NOAA Coast Watch Node</h2>'
                ],
                'block' => [
                    'class' => 'site-title'
                ]
            ],
            'logo-4700' => [
                'title' => 'CIROH Logo',
                'attributes' => [
                    'url' => 'https://ciroh.ua.edu/',
                    'image' => 'gantry-media://media/ciroh-logo.png',
                    'text' => 'Cooperative Institute  for Research to Operations in Hydrology'
                ]
            ],
            'custom-2895' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<h1>Water Prediction Node</h1>
<p>Delivering Remote Sensing Data for US Inland Waters</p>
<a href="" class="button">View</a>
<a href="" class="button">Learn</a>
<a href="" class="button">Explore</a>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'position-footer' => [
                'attributes' => [
                    'key' => 'footer'
                ]
            ],
            'branding-5276' => [
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'mobile-menu-5038' => [
                'title' => 'Mobile Menu'
            ]
        ]
    ]
];
