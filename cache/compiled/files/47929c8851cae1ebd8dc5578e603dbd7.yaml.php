<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/git/grav-admin/system/blueprints/pages/modular.yaml',
    'modified' => 1648478278,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MODULE',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'modular_title' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_ADMIN.MODULE_SETUP'
                                ],
                                'header.content.items' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ITEMS',
                                    'default' => '@self.modular',
                                    'size' => 'medium'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ORDER_BY',
                                    'placeholder' => 'date',
                                    'help' => NULL,
                                    'size' => 'small'
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ORDER',
                                    'help' => '"desc" or "asc" are valid values',
                                    'placeholder' => 'desc',
                                    'size' => 'small'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
