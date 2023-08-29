<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/admin/blueprints/position/chrome.yaml',
    'modified' => 1693297163,
    'data' => [
        'name' => 'Module chrome',
        'description' => 'Module chrome',
        'type' => 'position.chrome',
        'form' => [
            'fields' => [
                'display_title' => [
                    'type' => 'enable.enable',
                    'label' => 'Display Title',
                    'description' => 'Display title.',
                    'default' => 1
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Enter CSS class names.',
                    'default' => NULL
                ]
            ]
        ]
    ]
];