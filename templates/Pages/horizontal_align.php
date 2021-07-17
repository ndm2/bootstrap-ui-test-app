<?php
/** @var $this \App\View\AppView */

use BootstrapUI\View\Helper\FormHelper;

$this->layout = 'default';

echo $this->element('controls', ['formOptions' => [
    'align' => [
        'sm' => [
            FormHelper::GRID_COLUMN_ONE => 1,
            FormHelper::GRID_COLUMN_TWO => 11,
        ],
        'md' => [
            FormHelper::GRID_COLUMN_ONE => 1,
            FormHelper::GRID_COLUMN_TWO => 11,
        ],
    ],
]]);
