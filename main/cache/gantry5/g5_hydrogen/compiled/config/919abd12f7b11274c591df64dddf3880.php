<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1693410031,
    'checksum' => 'c713ddbab0ca9d357ecc304362d3e441',
    'files' => [
        'user/data/gantry5/themes/g5_hydrogen/config/home' => [
            'assignments' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/home/assignments.yaml',
                'modified' => 1693407912
            ],
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/home/index.yaml',
                'modified' => 1693410006
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/home/layout.yaml',
                'modified' => 1693410006
            ]
        ],
        'user/data/gantry5/themes/g5_hydrogen/config/default' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/index.yaml',
                'modified' => 1693405729
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/layout.yaml',
                'modified' => 1693405729
            ],
            'particles/branding' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/branding.yaml',
                'modified' => 1693346611
            ],
            'particles/breadcrumbs' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/breadcrumbs.yaml',
                'modified' => 1693346611
            ],
            'particles/content' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/content.yaml',
                'modified' => 1693346614
            ],
            'particles/contentarray' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/contentarray.yaml',
                'modified' => 1693346611
            ],
            'particles/copyright' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/copyright.yaml',
                'modified' => 1693346611
            ],
            'particles/custom' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/custom.yaml',
                'modified' => 1693346611
            ],
            'particles/date' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/date.yaml',
                'modified' => 1693346612
            ],
            'particles/feed' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/feed.yaml',
                'modified' => 1693346612
            ],
            'particles/login' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/login.yaml',
                'modified' => 1693346612
            ],
            'particles/logo' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1693346612
            ],
            'particles/menu' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/menu.yaml',
                'modified' => 1693346613
            ],
            'particles/messages' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/messages.yaml',
                'modified' => 1693346614
            ],
            'particles/mobile-menu' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/mobile-menu.yaml',
                'modified' => 1693346613
            ],
            'particles/position' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/position.yaml',
                'modified' => 1693346614
            ],
            'particles/sample' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/sample.yaml',
                'modified' => 1693346613
            ],
            'particles/search' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/search.yaml',
                'modified' => 1693346613
            ],
            'particles/social' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/social.yaml',
                'modified' => 1693346613
            ],
            'particles/spacer' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/spacer.yaml',
                'modified' => 1693346614
            ],
            'particles/totop' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/totop.yaml',
                'modified' => 1693346614
            ],
            'styles' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/styles.yaml',
                'modified' => 1693340919
            ]
        ],
        'user/themes/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'user/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1693297349
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => 'Part of <a href="https://coastwatch.noaa.gov/cwn/index.html">NOAA CoastWatch</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ],
                'owner' => ''
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => '1',
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => '1',
                'url' => '',
                'image' => 'gantry-media://media/noaa-logo.png',
                'text' => 'National Oceanic and Atmospheric Administration',
                'class' => 'gantry-logo',
                'height' => '',
                'svg' => ''
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => '1',
                'menu' => '0',
                'base' => '/',
                'startLevel' => '1',
                'maxLevels' => '0',
                'renderTitles' => '0',
                'hoverExpand' => '1',
                'mobileTarget' => '0',
                'forceTarget' => '0'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-facebook-square',
                        'text' => '',
                        'title' => 'Follow us on Facebook',
                        'link' => '#',
                        'name' => 'Facebook'
                    ],
                    1 => [
                        'icon' => 'fa fa-twitter-square',
                        'text' => '',
                        'title' => 'Follow us on Twitter/X',
                        'link' => '#',
                        'name' => 'Twitter/X'
                    ],
                    2 => [
                        'icon' => 'fa fa-youtube',
                        'text' => '',
                        'title' => 'Subscribe to our YouTube Channel',
                        'link' => '#',
                        'name' => 'YouTube'
                    ],
                    3 => [
                        'icon' => 'fa fa-linkedin-square',
                        'text' => '',
                        'title' => 'Follow us on LinkedIn',
                        'link' => '#',
                        'name' => 'LinkedIn'
                    ]
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'totop'
                ],
                'icon' => '',
                'content' => '',
                'title' => ''
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'breadcrumbs' => [
                'enabled' => '1'
            ],
            'content' => [
                'enabled' => '1'
            ],
            'contentarray' => [
                'enabled' => '1',
                'article' => [
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'title' => [
                            'enabled' => 'show',
                            'limit' => ''
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show',
                            'label' => '',
                            'css' => ''
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'show',
                            'route' => ''
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'default',
                        'ordering' => 'asc'
                    ]
                ],
                'css' => [
                    'class' => ''
                ],
                'extra' => [
                    
                ]
            ],
            'date' => [
                'enabled' => '1',
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'feed' => [
                'enabled' => '1'
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'bootstrap4' => [
                    'enabled' => 0
                ],
                'bootstrap5' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'langswitcher' => [
                'enabled' => true
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'login' => [
                'enabled' => '1'
            ],
            'messages' => [
                'enabled' => '1'
            ],
            'position' => [
                'enabled' => '1',
                'chrome' => ''
            ],
            'search' => [
                'enabled' => '1'
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ],
            'fontawesome' => [
                'enable' => 1,
                'version' => 'fa4',
                'fa4_compatibility' => 1,
                'content_compatibility' => 1
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#3180c2',
                'color-2' => '#ef6c00'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#ffffff',
                'text-color' => '#1867a9'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => '0'
            ],
            'navigation' => [
                'background' => '#3180c2',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#142d53',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#142d53',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset2'
        ],
        'pages' => [
            'blog_item' => [
                'header' => [
                    'process' => [
                        'markdown' => true,
                        'twig' => false
                    ],
                    'child_type' => 'default',
                    'admin' => [
                        'children_display_order' => 'collection'
                    ]
                ],
                'name' => 'default'
            ],
            'blog_list' => [
                'header' => [
                    'process' => [
                        'markdown' => true,
                        'twig' => false
                    ],
                    'child_type' => 'blog_item',
                    'admin' => [
                        'children_display_order' => 'collection'
                    ],
                    'content' => [
                        'items' => '@self.children',
                        'leading' => 0,
                        'columns' => 2,
                        'limit' => 5,
                        'order' => [
                            'by' => 'date',
                            'dir' => 'desc'
                        ],
                        'show_date' => 0,
                        'pagination' => 1,
                        'url_taxonomy_filters' => 1
                    ]
                ],
                'name' => 'default'
            ],
            'modular' => [
                'features' => [
                    'name' => 'modular/features',
                    'header' => [
                        'template' => 'modular/features'
                    ]
                ],
                'showcase' => [
                    'name' => 'modular/showcase',
                    'header' => [
                        'template' => 'modular/showcase',
                        'buttons' => [
                            'primary' => 1
                        ]
                    ]
                ],
                'text' => [
                    'name' => 'modular/text',
                    'header' => [
                        'template' => 'modular/text',
                        'image_align' => 'left'
                    ]
                ]
            ]
        ],
        'index' => [
            'name' => 'home',
            'timestamp' => 1693410006,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1693297350
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-5099' => 'Logo / Image',
                    'logo-4700' => 'CIROH Logo'
                ],
                'custom' => [
                    'custom-5832' => 'Custom HTML',
                    'custom-2895' => 'Custom HTML'
                ],
                'spacer' => [
                    'spacer-4731' => 'Spacer'
                ],
                'menu' => [
                    'menu-1072' => 'Menu'
                ],
                'messages' => [
                    'system-messages-7049' => 'System Messages'
                ],
                'content' => [
                    'system-content-7411' => 'Page Content'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-6009' => 'Copyright'
                ],
                'branding' => [
                    'branding-5276' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-5038' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
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
        ],
        'assignments' => [
            'page' => [
                0 => [
                    'home' => true
                ]
            ],
            'language' => [
                
            ],
            'type' => [
                
            ]
        ]
    ]
];
