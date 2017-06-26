<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria Platillo'), ['action' => 'edit', $categoriaPlatillo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria Platillo'), ['action' => 'delete', $categoriaPlatillo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaPlatillo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Platillos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Platillo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'Platillos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriaPlatillos view large-9 medium-8 columns content">
    <h3><?= h($categoriaPlatillo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($categoriaPlatillo->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriaPlatillo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Platillos') ?></h4>
        <?php if (!empty($categoriaPlatillo->platillos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Categoria Platillo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoriaPlatillo->platillos as $platillos): ?>
            <tr>
                <td><?= h($platillos->id) ?></td>
                <td><?= h($platillos->nombre) ?></td>
                <td><?= h($platillos->descripcion) ?></td>
                <td><?= h($platillos->precio) ?></td>
                <td><?= h($platillos->created) ?></td>
                <td><?= h($platillos->modified) ?></td>
                <td><?= h($platillos->categoria_platillo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Platillos', 'action' => 'view', $platillos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Platillos', 'action' => 'edit', $platillos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Platillos', 'action' => 'delete', $platillos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $platillos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
