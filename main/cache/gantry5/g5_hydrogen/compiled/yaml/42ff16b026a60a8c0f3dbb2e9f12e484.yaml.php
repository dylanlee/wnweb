<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/admin/blueprints/menu/menu.yaml',
    'modified' => 1693297156,
    'data' => [
        'name' => 'Menu',
        'description' => 'Gantry menu.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'settings.title' => [
                    'type' => 'input.text',
                    'label' => 'Title'
                ],
                'settings.base' => [
                    'type' => 'input.text',
                    'label' => 'Base Path',
                    'default' => '/'
                ]
            ]
        ]
    ]
];
