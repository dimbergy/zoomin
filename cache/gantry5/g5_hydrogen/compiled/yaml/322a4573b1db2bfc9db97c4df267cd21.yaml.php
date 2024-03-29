<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/zoomin/templates/g5_hydrogen/particles/fixed-header.yaml',
    'modified' => 1524643906,
    'data' => [
        'name' => 'Fixed Header',
        'description' => 'Configure Fixed Header.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable fixed header particles.',
                    'default' => true
                ],
                'cssselector' => [
                    'type' => 'input.text',
                    'description' => 'Enter the CSS Selector for the element that should get fixed/sticky, for example \'#g-header\'.',
                    'label' => 'CSS Selector',
                    'placeholder' => '#g-header'
                ],
                'mobile' => [
                    'type' => 'select.select',
                    'label' => 'Mobile',
                    'description' => 'Enable or disable the fixed/sticky header on phone view.',
                    'placeholder' => 'Select...',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ],
                'secondtrigger' => [
                    'type' => 'input.checkbox',
                    'description' => 'Adds a second class (\'g-fixed-second\') when the user reaches the top offset specified below.<br />This is very useful for applying effects when the user scrolls.<br />This atom just adds the class, you need to write your styling (CSS) in the \'custom.scss\' file.',
                    'label' => 'Second Trigger',
                    'default' => false
                ],
                'secondoffset' => [
                    'type' => 'input.text',
                    'description' => 'Enter the top offset in pixels for the \'Second Trigger\' (do NOT add \'px\' at the end).',
                    'label' => 'Top Offset',
                    'placeholder' => '600'
                ]
            ]
        ]
    ]
];
