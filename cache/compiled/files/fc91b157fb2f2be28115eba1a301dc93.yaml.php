<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-develop/Project_3/user/themes/theme4/blueprints/modular/hobby.yaml',
    'modified' => 1753950528,
    'size' => 1107,
    'data' => [
        'title' => 'Hobby',
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
                                        'header.content.heading_1' => [
                                            'type' => 'text',
                                            'label' => 'Heading'
                                        ],
                                        'header.content.heading_2' => [
                                            'type' => 'text',
                                            'label' => 'Heading'
                                        ],
                                        'header.content.slides_1' => [
                                            'type' => 'list',
                                            'label' => 'Slides',
                                            'fields' => [
                                                '.slide' => [
                                                    'type' => 'pagemediaselect',
                                                    'label' => 'Slide',
                                                    'preview_images' => true
                                                ]
                                            ]
                                        ],
                                        'header.content.slides_2' => [
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
