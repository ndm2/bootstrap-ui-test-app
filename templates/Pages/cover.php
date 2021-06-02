<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/cover'); ?>

<?php $this->start('tb_topnav'); ?>
<a class="nav-link active" href="#">Active</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
<?php $this->end(); ?>

<?= $this->Html->image('BootstrapUI.baked-with-cakephp.svg', ['class' => 'mb-4', 'width' => '250']) ?>
