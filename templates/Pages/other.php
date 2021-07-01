<?php
use Cake\Utility\Inflector;
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
    'icons (aligned sizes)' => implode(
        ' ',
        collection(['2xs', 'xs', 'sm', null, 'lg', 'xl', '2xl'])
            ->map(function ($size) {
                return $this->Html->icon('info-circle-fill', ['size' => $size]);
            })
            ->toArray()
    ),

    'icons (unaligned sizes)' => implode(
        ' ',
        collection(['1x', '2x', '3x', '4x', '5x', '6x', '7x', '8x', '9x', '10x'])
            ->map(function ($size) {
                return $this->Html->icon('info-circle-fill', ['size' => $size]);
            })
            ->toArray()
    ),

    'badges' => implode(
        ' ',
        collection(['primary', 'secondary', 'success', 'danger', 'warning text-dark', 'info text-dark', 'light text-dark', 'dark'])
            ->map(function ($style) {
                return $this->Html->badge(Inflector::humanize($style), ['class' => $style]);
            })
            ->toArray()
    ),

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
