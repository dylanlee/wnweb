<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/site.yaml',
    'modified' => 1693594330,
    'size' => 311,
    'data' => [
        'title' => 'Water Prediction Node',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Adam Warnock',
            'email' => 'akwarnock@ua.edu'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'A NOAA Coast Watch Node'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
