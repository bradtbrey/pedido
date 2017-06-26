<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cocinero'), ['action' => 'edit', $cocinero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cocinero'), ['action' => 'delete', $cocinero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cocinero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cocineros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cocinero'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'Platillos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cocineros view large-9 medium-8 columns content">
    <h3><?= h($cocinero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($cocinero->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($cocinero->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cocinero->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cocinero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cocinero->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Platillos') ?></h4>
        <?php if (!empty($cocinero->platillos)): ?>
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
            <?php foreach ($cocinero->platillos as $platillos): ?>
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
