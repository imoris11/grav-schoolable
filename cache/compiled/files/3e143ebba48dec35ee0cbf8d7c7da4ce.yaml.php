<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/richardigbiriki/send/grav/user/plugins/markdown-notices/blueprints.yaml',
    'modified' => 1562010982,
    'data' => [
        'name' => 'Markdown Notices',
        'version' => '1.0.1',
        'description' => 'Adds the ability to render notices blocks in Markdown',
        'icon' => 'asterisk',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-markdown-notices',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'level_classes' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'placeholder' => 'e.g. yellow, red, blue, green',
                    'label' => 'Level classes',
                    'help' => 'The classes to use for each level of notices depth',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ]
            ]
        ]
    ]
];
