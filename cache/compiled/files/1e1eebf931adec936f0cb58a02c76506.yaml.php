<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-develop/Project_3/user/themes/theme4/blueprints/modular/about.yaml',
    'modified' => 1753714031,
    'size' => 1416,
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
                                        'header.content.slide1' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 1'
                                        ],
                                        'header.content.slide2' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 2'
                                        ],
                                        'header.content.slide3' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 3'
                                        ],
                                        'header.content.slide4' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 4'
                                        ],
                                        'header.content.slide5' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 5'
                                        ],
                                        'header.content.slide6' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 6'
                                        ],
                                        'header.content.slide7' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Slide 7'
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
