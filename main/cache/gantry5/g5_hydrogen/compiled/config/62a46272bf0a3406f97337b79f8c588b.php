<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1693299879,
    'checksum' => '9a3d05ac99f0351f37287d7a7d3f173d',
    'files' => [
        'user/data/gantry5/themes/g5_hydrogen/config/default' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/index.yaml',
                'modified' => 1693299822
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/layout.yaml',
                'modified' => 1693299822
            ],
            'styles' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/styles.yaml',
                'modified' => 1693299878
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
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
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
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
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
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'default',
                        'ordering' => 'asc'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'feed' => [
                'enabled' => true
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
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'search' => [
                'enabled' => true
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
                'background' => '#1867a9',
                'text-color' => '#ffffff'
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
            'name' => 'default',
            'timestamp' => 1693299822,
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
                    'logo-8477' => 'Logo'
                ],
                'position' => [
                    'position-header' => 'Header',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'menu' => [
                    'menu-8585' => 'Menu'
                ],
                'messages' => [
                    'system-messages-2298' => 'System Messages'
                ],
                'content' => [
                    'system-content-6790' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-3134' => 'Copyright'
                ],
                'spacer' => [
                    'spacer-5945' => 'Spacer'
                ],
                'branding' => [
                    'branding-1311' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-3654' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
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
    ]
];
