<?php
use Cake\Utility\Text;

/** @var $this \App\View\AppView */

$this->layout = 'default';

$this->Paginator->defaultModel('Model');
$this->request = $this->request->withAttribute('paging', [
    'Model' => [
        'page' => 4,
        'prevPage' => 3,
        'nextPage' => 5,
        'pageCount' => 20,
    ]
]);

$items = [
    'badges' =>
        $this->Html->badge('foo') .
        $this->Html->badge('bar', ['class' => 'primary']) .
        $this->Html->badge('baz', ['class' => 'danger']),

    'breadcrumbs' => $this->Breadcrumbs
        ->add('jadb', '/jadb')
        ->add('admad')
        ->add('joe')
        ->prepend('first')
        ->insertAt(2, 'at index 2')
        ->insertAfter('admad', 'after admad', '/after admad')
        ->insertBefore('joe', 'before joe')
        ->render(),

    'breadcrumbs (current as link)' => $this->Breadcrumbs
        ->reset()
        ->add('jadb', '/jadb')
        ->add('admad')
        ->add('joe', '/joe')
        ->prepend('first')
        ->insertAt(2, 'at index 2')
        ->insertAfter('admad', 'after admad', '/after admad')
        ->insertBefore('joe', 'before joe')
        ->render(),

    'pagination' => $this->Paginator->links([
        'first' => true,
        'prev' => true,
        'next' => true,
        'last' => true,
    ]),

    'flash messages' => $this->Flash->render(),
];
?>

<?php $this->start('sidebar'); ?>
<?php foreach ($items as $title => $code): ?>
    <li class="nav-item px-1">
        <a class="nav-link" href="#<?= h(Text::slug($title)) ?>-anchor"><?= h($title) ?></a>
    </li>
<?php endforeach; ?>
<?php $this->end(); ?>

<?php foreach ($items as $title => $code): ?>
    <?php $id = Text::slug($title); ?>
    <h2 class="anchor" id="<?= h($id) ?>-anchor"><a href="#<?= h($id) ?>-anchor"><?= h($title) ?></a></h2>
    <div class="example p-4">
        <div class="control p-3 mb-4">
            <?php echo $code; ?>
        </div>
        <?= $this->element('code', ['id' => $id, 'code' => $code]); ?>
    </div>
    <hr>
<?php endforeach; ?>
