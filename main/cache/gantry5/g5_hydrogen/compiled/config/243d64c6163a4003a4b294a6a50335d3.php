<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1693345863,
    'checksum' => '3479cd5f437b888c11667854be735376',
    'files' => [
        'user/data/gantry5/themes/g5_hydrogen/config/_offline' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/_offline/index.yaml',
                'modified' => 1693340556
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/_offline/layout.yaml',
                'modified' => 1693340555
            ]
        ],
        'user/data/gantry5/themes/g5_hydrogen/config/default' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/index.yaml',
                'modified' => 1693342227
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/layout.yaml',
                'modified' => 1693342227
            ],
            'particles/branding' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/branding.yaml',
                'modified' => 1693340857
            ],
            'particles/breadcrumbs' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/breadcrumbs.yaml',
                'modified' => 1693340858
            ],
            'particles/content' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/content.yaml',
                'modified' => 1693340861
            ],
            'particles/contentarray' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/contentarray.yaml',
                'modified' => 1693340858
            ],
            'particles/copyright' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/copyright.yaml',
                'modified' => 1693340858
            ],
            'particles/custom' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/custom.yaml',
                'modified' => 1693340858
            ],
            'particles/date' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/date.yaml',
                'modified' => 1693340859
            ],
            'particles/feed' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/feed.yaml',
                'modified' => 1693340859
            ],
            'particles/login' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/login.yaml',
                'modified' => 1693340859
            ],
            'particles/logo' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1693340859
            ],
            'particles/menu' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/menu.yaml',
                'modified' => 1693340859
            ],
            'particles/messages' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/messages.yaml',
                'modified' => 1693340861
            ],
            'particles/mobile-menu' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/mobile-menu.yaml',
                'modified' => 1693340860
            ],
            'particles/position' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/position.yaml',
                'modified' => 1693340861
            ],
            'particles/sample' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/sample.yaml',
                'modified' => 1693340860
            ],
            'particles/search' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/search.yaml',
                'modified' => 1693340860
            ],
            'particles/social' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/social.yaml',
                'modified' => 1693340860
            ],
            'particles/spacer' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/spacer.yaml',
                'modified' => 1693340861
            ],
            'particles/totop' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/totop.yaml',
                'modified' => 1693340860
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
            'name' => '_offline',
            'timestamp' => 1693340555,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/offline.png',
                'name' => '_offline',
                'timestamp' => 1693297350
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'main' => 'Main',
                'footer' => 'Footer'
            ],
            'particles' => [
                'logo' => [
                    'logo-6333' => 'Logo'
                ],
                'spacer' => [
                    'spacer-2185' => 'Spacer',
                    'spacer-8660' => 'Spacer'
                ],
                'messages' => [
                    'system-messages-1406' => 'System Messages'
                ],
                'content' => [
                    'system-content-2017' => 'Page Content'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-9485' => 'Copyright'
                ],
                'branding' => [
                    'branding-7696' => 'Branding'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/offline.png',
                'name' => '_offline',
                'timestamp' => 1693297350
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-6333 30',
                        1 => 'spacer-2185 70'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-1406'
                    ],
                    1 => [
                        0 => 'system-content-2017'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-9485 40',
                        1 => 'spacer-8660 30',
                        2 => 'branding-7696 30'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
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
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ]
            ]
        ]
    ]
];
