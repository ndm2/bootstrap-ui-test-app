<?php
/** @var $this \App\View\AppView */
/** @var $id string */
/** @var $code string */
?>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" id="<?= h($id) ?>-formatted-tab" data-toggle="pill" href="#<?= h($id) ?>-formatted">Formatted</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="<?= h($id) ?>-raw-tab" data-toggle="pill" href="#<?= h($id) ?>-raw">Raw</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="<?= h($id) ?>-formatted">
        <?php $formatted = $this->formatHtml($code); ?>
        <pre><code class='language-html'><?= h($formatted) ?></code></pre>
    </div>
    <div class="tab-pane fade" id="<?= h($id) ?>-raw">
        <pre><code class='language-html raw'><?= h($code) ?></code></pre>
    </div>
</div>
