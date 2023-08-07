<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/git/grav-admin/user/themes/mache/blueprints/modular/about.yaml',
    'modified' => 1649236784,
    'data' => [
        'title' => 'About',
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
                                'header.right_image' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'label' => 'THEME_MACHE.RIGHT_IMAGE',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.right_image_alt' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.RIGHT_IMAGE_ALT'
                                ],
                                'header.link_label' => [
                                    'type' => 'editor',
                                    'label' => 'THEME_MACHE.LINK_LABEL'
                                ],
                                'header.link_url' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.LINK_URL'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
