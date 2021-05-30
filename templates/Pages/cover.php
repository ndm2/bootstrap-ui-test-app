<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/cover'); ?>

<?php $this->start('tb_topnav'); ?>
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
<?php $this->end(); ?>

<?= $this->Html->image('BootstrapUI.baked-with-cakephp.svg', ['class' => 'mb-4', 'width' => '250']) ?>
