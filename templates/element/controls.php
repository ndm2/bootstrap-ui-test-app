<?php

use Cake\Error\Debug\TextFormatter;
use Cake\Error\Debugger;
use Cake\Utility\Text;
use Cake\View\Form\ArrayContext;

/** @var $this \App\View\AppView */

if (!isset($formOptions)) {
    $formOptions = [];
}

$containerOptions = [
    'class' => 'container-class',
    'custom' => 'container-attribute',
];

$labelOptions = [
    'text' => 'label text',
    'class' => 'label-class',
    'custom' => 'label-attribute',
];

$controls = [
    'text' => [
        'text' => [
        ],
        'text (append control)' => [
            'append' => $this->Form->button('button')
        ],
        'text (prepend control)' => [
            'prepend' => $this->Form->button('button')
        ],
        'text (append text)' => [
            'append' => 'A'
        ],
        'text (prepend text)' => [
            'prepend' => 'P'
        ],
    ],
    'static' => [
        'static' => [
            'type' => 'staticControl',
            'value' => 'Static <b>Text</b>',
        ],
        'static (no escape)' => [
            'type' => 'staticControl',
            'value' => 'Static <b>Text</b>',
            'escape' => false,
        ],
        'static (no escape, no label)' => [
            'type' => 'staticControl',
            'value' => 'Static <b>Text</b>',
            'escape' => false,
            'label' => false,
        ],
    ],
    'textarea' => [
        'textarea' => [
            'type' => 'textarea',
        ],
        'textarea (append)' => [
            'type' => 'textarea',
            'append' => 'A'
        ],
        'textarea (prepend)' => [
            'type' => 'textarea',
            'prepend' => 'P'
        ],
    ],
    'select' => [
        'select' => [
            'type' => 'select',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
        ],
        'select (multiple)' => [
            'type' => 'select',
            'multiple' => true,
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
        ],
        'select (append)' => [
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'append' => 'A'
        ],
        'select (prepend)' => [
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'prepend' => 'P'
        ],
        'select (multiple , append)' => [
            'type' => 'select',
            'multiple' => true,
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'append' => 'A'
        ],
        'select (multiple, prepend)' => [
            'type' => 'select',
            'multiple' => true,
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'prepend' => 'P'
        ],
    ],
    'multi checkbox' => [
        'select (checkbox)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
        ],
        'select (checkbox, nested)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'nestedInput' => true,
        ],
        'select (checkbox, inline)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'inline' => true,
        ],
        'select (checkbox, inline, nested)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'inline' => true,
            'nestedInput' => true,
        ],
        'select (checkbox, groups)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                'group 1' => [
                    1 => 'option 1',
                    2 => 'option 2'
                ],
                'group 2' => [
                    3 => 'option 3',
                    4 => 'option 4',
                    5 => [
                        'value' => 10,
                        'text' => 'option 5',
                        'class' => 'form-check-input customInputClass',
                        'label' => [
                            'class' => 'form-check-label customLabelClass'
                        ]
                    ],
                    6 => [
                        'value' => 20,
                        'text' => 'option 6',
                        'label' => false
                    ],
                ],
            ],
        ],
        'select (checkbox, groups, nested)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                'group 1' => [
                    1 => 'option 1',
                    2 => 'option 2'
                ],
                'group 2' => [
                    3 => 'option 3',
                    4 => 'option 4',
                    5 => [
                        'value' => 10,
                        'text' => 'option 5',
                        'class' => 'form-check-input customInputClass',
                        'label' => [
                            'class' => 'form-check-label customLabelClass'
                        ]
                    ],
                    6 => [
                        'value' => 20,
                        'text' => 'option 6',
                        'label' => false
                    ],
                ],
            ],
            'nestedInput' => true,
        ],
        'select (checkbox, groups, inline)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                'group 1' => [
                    1 => 'option 1',
                    2 => 'option 2'
                ],
                'group 2' => [
                    3 => 'option 3',
                    4 => 'option 4',
                    5 => [
                        'value' => 10,
                        'text' => 'option 5',
                        'class' => 'form-check-input customInputClass',
                        'label' => [
                            'class' => 'form-check-label customLabelClass'
                        ]
                    ],
                    6 => [
                        'value' => 20,
                        'text' => 'option 6',
                        'label' => false
                    ],
                ],
            ],
            'inline' => true,
        ],
        'select (checkbox, groups, inline, nested)' => [
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => [
                'group 1' => [
                    1 => 'option 1',
                    2 => 'option 2'
                ],
                'group 2' => [
                    3 => 'option 3',
                    4 => 'option 4',
                    5 => [
                        'value' => 10,
                        'text' => 'option 5',
                        'class' => 'form-check-input customInputClass',
                        'label' => [
                            'class' => 'form-check-label customLabelClass'
                        ]
                    ],
                    6 => [
                        'value' => 20,
                        'text' => 'option 6',
                        'label' => false
                    ],
                ],
            ],
            'inline' => true,
            'nestedInput' => true,
        ],
    ],
    'checkbox' => [
        'checkbox' => [
            '_controls' => [
                'checkbox 1' => [
                    'type' => 'checkbox',
                ],
                'checkbox 2' =>[
                    'type' => 'checkbox',
                ],
            ],
        ],
        'checkbox (nested)' => [
            '_controls' => [
                'checkbox (nested) 1' => [
                    'type' => 'checkbox',
                    'nestedInput' => true,
                ],
                'checkbox (nested) 2' =>[
                    'type' => 'checkbox',
                    'nestedInput' => true,
                ],
            ],
        ],
        'checkbox (inline)' => [
            '_controls' => [
                'checkbox (inline) 1' => [
                    'type' => 'checkbox',
                    'inline' => true,
                ],
                'checkbox (inline) 2' =>[
                    'type' => 'checkbox',
                    'inline' => true,
                ],
            ],
        ],
        'checkbox (inline, nested)' => [
            '_controls' => [
                'checkbox (inline, nested) 1' => [
                    'type' => 'checkbox',
                    'inline' => true,
                    'nestedInput' => true,
                ],
                'checkbox (inline, nested) 2' =>[
                    'type' => 'checkbox',
                    'inline' => true,
                    'nestedInput' => true,
                ],
            ],
        ],
    ],
    'radio' => [
        'radio' => [
            'type' => 'radio',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
        ],
        'radio (nested)' => [
            'type' => 'radio',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'nestedInput' => true,
        ],
        'radio (inline)' => [
            'type' => 'radio',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'inline' => true,
        ],
        'radio (inline, nested)' => [
            'type' => 'radio',
            'options' => [
                1 => 'foo',
                2 => 'bar',
                3 => 'baz'
            ],
            'inline' => true,
            'nestedInput' => true,
        ],
        'radio (per option config)' => [
            'type' => 'radio',
            'options' => [
                1 => 'option 1',
                2 => [
                    'value' => 10,
                    'text' => 'option 2',
                    'class' => 'form-check-input customInputClass',
                    'label' => [
                        'class' => 'form-check-label customLabelClass'
                    ]
                ],
                3 => [
                    'value' => 20,
                    'text' => 'option 3',
                    'label' => false
                ],
            ],
        ],
        'radio (per option config, inline)' => [
            'type' => 'radio',
            'options' => [
                1 => 'option 1',
                2 => [
                    'value' => 10,
                    'text' => 'option 2',
                    'class' => 'form-check-input customInputClass',
                    'label' => [
                        'class' => 'form-check-label customLabelClass'
                    ]
                ],
                3 => [
                    'value' => 20,
                    'text' => 'option 3',
                    'label' => false
                ],
            ],
            'inline' => true,
        ],
        'radio (per option config, inline, nested)' => [
            'type' => 'radio',
            'options' => [
                1 => 'option 1',
                2 => [
                    'value' => 10,
                    'text' => 'option 2',
                    'class' => 'form-check-input customInputClass',
                    'label' => [
                        'class' => 'form-check-label customLabelClass'
                    ]
                ],
                3 => [
                    'value' => 20,
                    'text' => 'option 3',
                    'label' => false
                ],
            ],
            'inline' => true,
            'nestedInput' => true,
        ],
    ],
    'datetime' => [
        'datetime' => [
            'type' => 'datetime',
        ],
        'date' => [
            'type' => 'date',
        ],
        'time' => [
            'type' => 'time',
        ],
    ],
    'file' => [
        'file' => [
            'type' => 'file',
        ],
        'file (append control)' => [
            'type' => 'file',
            'append' => $this->Form->button('button'),
        ],
        'file (prepend control)' => [
            'type' => 'file',
            'prepend' => $this->Form->button('button')
        ],
        'file (append text)' => [
            'type' => 'file',
            'append' => 'A'
        ],
        'file (prepend text)' => [
            'type' => 'file',
            'prepend' => 'P'
        ],
    ],
    'range' => [
        'range' => [
            'type' => 'range',
            'min' => 0,
            'max' => 10,
            'step' => 1,
        ],
    ],
    'button' => [
        'submit' => [
            '_method' => 'submit',
        ],
        'button' => [
            '_method' => 'button',
        ],
    ],
    'combined' => [
        'combined' => [
            '_controls' => [
                'combined text' => [
                    'type' => 'text'
                ],
                'combined select (checkbox)' => [
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => [
                        1 => 'foo',
                        2 => 'bar'
                    ],
                ],
                'combined radio' => [
                    'type' => 'radio',
                    'options' => [
                        1 => 'foo',
                        2 => 'bar',
                    ],
                ],
                'combined checkbox' => [
                    'type' => 'checkbox',
                ],
                'combined checkbox (inline) 1' => [
                    'type' => 'checkbox',
                    'inline' => true,
                ],
                'combined checkbox (inline) 2' =>[
                    'type' => 'checkbox',
                    'inline' => true,
                ],
                'combined submit' => [
                    '_method' => 'submit',
                ]
            ],
        ]
    ]
];
?>

<?php $this->start('sidebar'); ?>
<?php foreach ($controls as $groupTitle => $groupControls): ?>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 py-2 mt-4 text-muted">
        <?= h($groupTitle) ?>
    </h6>
    <?php foreach ($groupControls as $title => $config): ?>
        <li class="nav-item px-1">
            <a class="nav-link" href="#<?= h(Text::slug($title)) ?>-anchor"><?= h($title) ?></a>
        </li>
    <?php endforeach; ?>
<?php endforeach; ?>
<?php $this->end(); ?>

<?php
$errors = [];
foreach (collection($controls)->unfold() as $title => $config) {
    if (isset($config['_controls'])) {
        foreach ($config['_controls'] as $controlTitle => $controlConfig) {
            $errors[Text::slug($controlTitle) . '-error'] = ['foo' => 'error message'];
        }
    } else {
        $errors[Text::slug($title) . '-error'] = ['foo' => 'error message'];
    }
}
$context = new ArrayContext([
    'errors' => $errors
]);

foreach (collection($controls)->unfold() as $title => $config) {
    $field = Text::slug($title);
    ?>
    <h2 class="anchor" id="<?= h($field) ?>-anchor"><a href="#<?= h($field) ?>-anchor"><?= h($title) ?></a></h2>
    <div class="example p-4">
        <div class="control p-3 mb-4">
            <?php
            $configOptions = $config;

            echo $this->Form->create($context, $formOptions);
            if (isset($config['_controls'])) {
                $code = '';
                $configOptions = [];
                foreach ($config['_controls'] as $controlTitle => $controlConfig) {
                    $controlConfig += [
                        'container' => $containerOptions,
                        'label' => $labelOptions,
                    ];
                    $code .= $this->control($controlTitle, $controlConfig);
                    $configOptions[] = $controlConfig;
                }
                $config = $configOptions;
            } else {
                $config += [
                    'container' => $containerOptions,
                    'label' => $labelOptions,
                ];
                $code = $this->control($title, $config);
            }
            echo $code;
            echo $this->Form->end();
            ?>
        </div>
        <?= $this->element('code', [
            'id' => $field,
            'code' => $code,
            'config' => (new TextFormatter())->dump(Debugger::exportVarAsNodes($config, 6)),
        ]); ?>
    </div>
    <hr>
    <?php
}
