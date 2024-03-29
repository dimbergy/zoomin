<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\zoomin/media/gantry5/engines/nucleus/particles/logo.yaml',
    'modified' => 1524569217,
    'data' => [
        'name' => 'Logo / Image',
        'description' => 'Display a logo or an image.',
        'type' => 'particle',
        'icon' => 'fa-file-image-o',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable logo particles.',
                    'default' => true
                ],
                'url' => [
                    'type' => 'input.text',
                    'label' => 'Url',
                    'description' => 'Url for the image. Leave empty to go to home page.'
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Target',
                    'description' => 'Target browser window when logo is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_self',
                    'options' => [
                        '_self' => 'Same Frame (default)',
                        '_parent' => 'Parent Frame',
                        '_blank' => 'New Window or Tab'
                    ]
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select desired logo image.'
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link',
                    'description' => 'Renders Logo/Image with a link.',
                    'default' => true
                ],
                'svg' => [
                    'type' => 'textarea.textarea',
                    'label' => 'SVG Code',
                    'description' => 'Your SVG code that will be added inline to the site.',
                    'placeholder' => 'Place your <svg> code here.'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'Input logo description text.'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Set a specific CSS class for custom styling.'
                ]
            ]
        ]
    ]
];
