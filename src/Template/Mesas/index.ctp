<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mesa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Meseros'), ['controller' => 'Meseros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesero'), ['controller' => 'Meseros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesas index large-9 medium-8 columns content">
    <h3><?= __('Mesas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puestos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posicion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mesero_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesas as $mesa): ?>
            <tr>
                <td><?= $this->Number->format($mesa->id) ?></td>
                <td><?= h($mesa->serie) ?></td>
                <td><?= h($mesa->puestos) ?></td>
                <td><?= h($mesa->posicion) ?></td>
                <td><?= h($mesa->created) ?></td>
                <td><?= h($mesa->modified) ?></td>
                <td><?= $mesa->has('mesero') ? $this->Html->link($mesa->mesero->id, ['controller' => 'Meseros', 'action' => 'view', $mesa->mesero->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mesa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
