<?php
/** @var $this \App\View\AppView */
/** @var $id string */
/** @var $code string */
/** @var $config string */
?>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" id="<?= h($id) ?>-formatted-tab" data-toggle="pill" href="#<?= h($id) ?>-formatted">Formatted</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="<?= h($id) ?>-raw-tab" data-toggle="pill" href="#<?= h($id) ?>-raw">Raw</a>
    </li>
    <?php if (isset($config)): ?>
    <li class="nav-item">
        <a class="nav-link" id="<?= h($id) ?>-config-tab" data-toggle="pill" href="#<?= h($id) ?>-config">Config</a>
    </li>
    <?php endif; ?>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="<?= h($id) ?>-formatted">
        <?php $formatted = $this->formatHtml($code); ?>
        <pre><code class='language-html'><?= h($formatted) ?></code></pre>
    </div>
    <div class="tab-pane fade" id="<?= h($id) ?>-raw">
        <pre><code class='language-html raw'><?= h($code) ?></code></pre>
    </div>
    <?php if (isset($config)): ?>
    <div class="tab-pane fade" id="<?= h($id) ?>-config">
        <pre><code class='language-php'><?= h($config) ?></code></pre>
    </div>
    <?php endif; ?>
</div>
