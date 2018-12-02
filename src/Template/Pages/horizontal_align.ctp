<?php
/** @var $this \App\View\AppView */

$this->layout = 'default';

echo $this->element('controls', ['formOptions' => [
    'align' => [
        'sm' => [
            'left' => 1,
            'middle' => 11,
        ],
        'md' => [
            'left' => 1,
            'middle' => 11,
        ],
    ],
]]);
