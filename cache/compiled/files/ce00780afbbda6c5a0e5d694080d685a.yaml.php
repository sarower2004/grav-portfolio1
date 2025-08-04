<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/gravcms/grav-portfolio1/user/themes/mytheme/blueprints.yaml',
    'modified' => 1754202968,
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
