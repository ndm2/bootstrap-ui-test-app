<?php
/** @var $this \App\View\AppView */

$this->layout = 'default';

echo $this->element('controls', ['formOptions' => [
    'align' => 'inline',
]]);
