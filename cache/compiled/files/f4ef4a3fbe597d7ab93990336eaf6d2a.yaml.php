<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/richardigbiriki/send/grav/user/themes/bootstrap4/blueprints/modular/showcase.yaml',
    'modified' => 1565654062,
    'data' => [
        'title' => 'Showcase',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'name' => [
                                                    'default' => 'modular/showcase',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'default' => 'modular/showcase',
                                            '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'buttons' => [
                            'type' => 'tab',
                            'title' => 'Buttons',
                            'fields' => [
                                'header.buttons' => [
                                    'name' => 'buttons',
                                    'type' => 'list',
                                    'label' => 'Buttons',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL'
                                        ],
                                        '.primary' => [
                                            'type' => 'toggle',
                                            'label' => 'Primary',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
