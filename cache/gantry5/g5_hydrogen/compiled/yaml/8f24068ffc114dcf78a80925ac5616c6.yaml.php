<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\zoomin/media/gantry5/engines/nucleus/particles/analytics.yaml',
    'modified' => 1524569217,
    'data' => [
        'name' => 'Google Analytics',
        'description' => 'Configure Google Analytics.',
        'type' => 'atom',
        'icon' => 'fa-area-chart',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable analytic particles.',
                    'default' => true
                ],
                'ua.code' => [
                    'type' => 'input.text',
                    'description' => 'Enter the Google UA tracking code for analytics (UA-XXXXXXXX-X)',
                    'label' => 'UA Code',
                    'placeholder' => 'UA-XXXXXXXX-X'
                ],
                'ua.anonym' => [
                    'type' => 'input.checkbox',
                    'description' => 'Send only Anonymous IP Addresses (mandatory in Europe)',
                    'label' => 'Anonym Statistics',
                    'default' => false
                ],
                'ua.ssl' => [
                    'type' => 'input.checkbox',
                    'description' => 'Send all data using SSL, even from insecure (HTTP) pages.',
                    'label' => 'Force SSL use',
                    'default' => false
                ],
                'ua.debug' => [
                    'type' => 'input.checkbox',
                    'description' => 'Enable the debug version of analytics.js - DON\'T USE ON PRODUCTION!',
                    'label' => 'Use Debug Mode',
                    'default' => false
                ]
            ]
        ]
    ]
];
