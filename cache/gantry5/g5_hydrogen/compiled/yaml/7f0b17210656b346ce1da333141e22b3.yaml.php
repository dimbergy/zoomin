<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\zoomin/templates/g5_hydrogen/particles/uikit.yaml',
    'modified' => 1524654722,
    'data' => [
        'name' => 'UIkit for Gantry5',
        'description' => 'Configure UIkit for Gantry5.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable UIkit for Gantry5 particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'This Atom loads a modified and optimized version of the <a href="http://getuikit.com/index.html" target="_blank">UIkit Framework</a> prepared specifically for Gantry 5.<br />Developed and maintained by <a href="http://www.inspiretheme.com/" target="_blank">InspireTheme.com</a><br /><br /><strong>UIkit Version:</strong><br />2.27.4<br /><br /><strong>Components Included:</strong><br />Core, Dynamic Grid, Dotnav, Progress, Slidenav, Lightbox, Slider, Slideset, Slideshow, Parallax, Accordion, Notify, Sticky, Tooltip'
                ],
                'jslocation' => [
                    'type' => 'select.select',
                    'label' => 'JS Location',
                    'description' => 'Select where the UIkit JS assets should be loaded. The default and recommended location is \'Footer\' (before the closing body tag).',
                    'placeholder' => 'Select...',
                    'default' => 'footer',
                    'options' => [
                        'footer' => 'Footer',
                        'head' => 'Head'
                    ]
                ]
            ]
        ]
    ]
];
