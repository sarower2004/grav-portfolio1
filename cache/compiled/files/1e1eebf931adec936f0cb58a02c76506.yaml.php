<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-develop/Project_3/user/themes/theme4/blueprints/modular/about.yaml',
    'modified' => 1753805719,
    'size' => 896,
    'data' => [
        'title' => 'About',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'newSection' => [
                                    'type' => 'section',
                                    'title' => 'About Section',
                                    'fields' => [
                                        'header.content.heading' => [
                                            'type' => 'text',
                                            'label' => 'Heading'
                                        ],
                                        'header.content.description' => [
                                            'type' => 'text',
                                            'label' => 'description'
                                        ],
                                        'header.content.btn' => [
                                            'type' => 'text',
                                            'label' => 'btn'
                                        ],
                                        'header.content.slides' => [
                                            'type' => 'list',
                                            'label' => 'Slides',
                                            'fields' => [
                                                '.slide' => [
                                                    'type' => 'pagemediaselect',
                                                    'label' => 'Slide',
                                                    'preview_images' => true
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
    ]
];
