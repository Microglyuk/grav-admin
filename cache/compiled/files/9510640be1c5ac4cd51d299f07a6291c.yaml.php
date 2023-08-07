<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/git/grav-admin/user/themes/mache/blueprints/modular/cta2.yaml',
    'modified' => 1649236784,
    'data' => [
        'title' => 'CTA 2',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.background_image' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'label' => 'THEME_MACHE.BACKGROUND_IMAGE',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.button_label' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.BUTTON_LABEL'
                                ],
                                'header.button_url' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.BUTTON_URL'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
