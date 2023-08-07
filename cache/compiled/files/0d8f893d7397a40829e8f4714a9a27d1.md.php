<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/git/grav-admin/user/pages/01.home/modular.md',
    'modified' => 1690893905,
    'data' => [
        'header' => [
            'title' => 'Mache',
            'cache_enable' => false,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_cta2',
                        1 => '_about',
                        2 => '_cta1',
                        3 => '_cta3',
                        4 => '_services',
                        5 => '_updates',
                        6 => '_features',
                        7 => '_testimonials',
                        8 => '_prices',
                        9 => '_banner',
                        10 => '_contact',
                        11 => '_map'
                    ]
                ]
            ],
            'form' => [
                'action' => '/home',
                'name' => 'contact',
                'button_outer_classes' => 'form-group col-md-6 col-sm-12',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Name',
                        'placeholder' => 'Your name',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'outerclasses' => 'form-group col-md-6 col-sm-12',
                        'classes' => 'col-md-12',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'Your email address',
                        'type' => 'email',
                        'outerclasses' => 'form-group col-md-6 col-sm-12',
                        'classes' => 'col-md-12',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'message',
                        'label' => 'Message',
                        'placeholder' => 'Your message',
                        'type' => 'textarea',
                        'rows' => 5,
                        'outerclasses' => 'form-group col-md-12',
                        'classes' => 'col-md-12',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
                        'name' => 'g-recaptcha-response',
                        'label' => 'Captcha',
                        'type' => 'captcha',
                        'outerclasses' => 'form-group col-md-12',
                        'classes' => 'col-md-12',
                        'recaptcha_site_key' => NULL,
                        'recaptcha_not_validated' => 'Captcha not valid!',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit'
                    ]
                ],
                'process' => [
                    0 => [
                        'captcha' => [
                            'recaptcha_secret' => NULL
                        ]
                    ],
                    1 => [
                        'email' => [
                            'subject' => '[Site Contact Form] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    2 => [
                        'save' => [
                            'fileprefix' => 'contact-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    3 => [
                        'display' => 'thank-you'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Mache
cache_enable: false
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _cta2
            - _about
            - _cta1
            - _cta3
            - _services
            - _updates
            - _features
            - _testimonials
            - _prices
            - _banner
            - _contact
            - _map
form:
    action: /home
    name: contact
    button_outer_classes: \'form-group col-md-6 col-sm-12\'
    fields:
        -
            name: name
            label: Name
            placeholder: \'Your name\'
            autocomplete: \'on\'
            type: text
            outerclasses: \'form-group col-md-6 col-sm-12\'
            classes: col-md-12
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: \'Your email address\'
            type: email
            outerclasses: \'form-group col-md-6 col-sm-12\'
            classes: col-md-12
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: \'Your message\'
            type: textarea
            rows: 5
            outerclasses: \'form-group col-md-12\'
            classes: col-md-12
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            outerclasses: \'form-group col-md-12\'
            classes: col-md-12
            recaptcha_site_key: null
            recaptcha_not_validated: \'Captcha not valid!\'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            captcha:
                recaptcha_secret: null
        -
            email:
                subject: \'[Site Contact Form] {{ form.value.name|e }}\'
                body: \'{% include \'\'forms/data.html.twig\'\' %}\'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: \'{% include \'\'forms/data.txt.twig\'\' %}\'
        -
            display: thank-you',
        'markdown' => ''
    ]
];
