<?php
/** @var $this \App\View\AppView */

$this->layout = 'default';

$code = $this->Flash->render();
?>
<h2>Flash messages</h2>
<div class="example p-4">
    <div class="control p-3 mb-4">
        <?= $code; ?>
    </div>
    <?= $this->element('code', ['id' => 'flash-messages', 'code' => $code]); ?>
</div>
