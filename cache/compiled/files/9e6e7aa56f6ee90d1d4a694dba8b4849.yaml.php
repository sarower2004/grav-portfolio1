<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-develop/Project_3/user/themes/mytheme/blueprints.yaml',
    'modified' => 1746447959,
    'size' => 433,
    'data' => [
        'title' => 'Hero',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'buttons' => [
                            'type' => 'section',
                            'title' => 'Hero',
                            'fields' => [
                                'header.hero_classes' => [
                                    'type' => 'text',
                                    'label' => 'Hero Classes',
                                    'details' => NULL
                                ],
                                'header.hero_image' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Hero Image',
                                    'preview_images' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
