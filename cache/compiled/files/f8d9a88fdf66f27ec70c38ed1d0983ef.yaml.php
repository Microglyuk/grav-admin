<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/git/grav-admin/user/themes/mache/blueprints/modular/testimonials.yaml',
    'modified' => 1649236784,
    'data' => [
        'title' => 'Testimonials',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'testimonials' => [
                            'type' => 'tab',
                            'title' => 'THEME_MACHE.TESTIMONIALS',
                            'fields' => [
                                'header.opening_icon' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'label' => 'THEME_MACHE.OPENING_ICON',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.closing_icon' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'label' => 'THEME_MACHE.CLOSING_ICON',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
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
                                'header.testimonials' => [
                                    'type' => 'list',
                                    'label' => 'THEME_MACHE.TESTIMONIALS',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.testimonial' => [
                                            'type' => 'textarea',
                                            'rows' => 3,
                                            'label' => 'THEME_MACHE.TESTIMONIAL'
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
