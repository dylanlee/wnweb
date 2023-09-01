<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1693595572,
    'checksum' => '2d5fcf1327cf23b0bf9d6ec1c62db35f',
    'files' => [
        'user/data/gantry5/themes/g5_hydrogen/config/tutorial_documents' => [
            'assignments' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/tutorial_documents/assignments.yaml',
                'modified' => 1693594052
            ],
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/tutorial_documents/index.yaml',
                'modified' => 1693595011
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/tutorial_documents/layout.yaml',
                'modified' => 1693595011
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
            'name' => 'tutorial_documents',
            'timestamp' => 1693595011,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/2-col-left.png',
                'name' => '2_column_-_left',
                'timestamp' => 1693297350
            ],
            'positions' => [
                'header' => 'Header',
                'sidebar' => 'Sidebar',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'sidebar' => 'Sidebar',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-9355' => 'NOAA Logo',
                    'logo-4935' => 'CIROH Logo'
                ],
                'custom' => [
                    'custom-4612' => 'Custom HTML',
                    'custom-9583' => 'Custom HTML'
                ],
                'spacer' => [
                    'spacer-3074' => 'Spacer',
                    'spacer-5639' => 'Spacer'
                ],
                'position' => [
                    'position-position-4983' => 'Header',
                    'position-sidebar' => 'Sidebar',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'menu' => [
                    'menu-7106' => 'Menu'
                ],
                'messages' => [
                    'system-messages-1401' => 'System Messages'
                ],
                'content' => [
                    'system-content-7902' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-8307' => 'Copyright'
                ],
                'branding' => [
                    'branding-3302' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-8446' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'logo-9355' => 'logo-8477',
                    'custom-4612' => 'custom-5216',
                    'logo-4935' => 'logo-4012',
                    'spacer-3074' => 'spacer-1234',
                    'position-position-4983' => 'position-header'
                ]
            ]
        ],
        'layout' => [
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
        ],
        'assignments' => [
            'page' => [
                0 => [
                    'tools-and-training/water-node-tutorials' => true
                ]
            ],
            'language' => [
                
            ],
            'type' => [
                
            ]
        ]
    ]
];
