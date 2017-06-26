<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mesa'), ['action' => 'edit', $mesa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mesa'), ['action' => 'delete', $mesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mesas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meseros'), ['controller' => 'Meseros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesero'), ['controller' => 'Meseros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mesas view large-9 medium-8 columns content">
    <h3><?= h($mesa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serie') ?></th>
            <td><?= h($mesa->serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Puestos') ?></th>
            <td><?= h($mesa->puestos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Posicion') ?></th>
            <td><?= h($mesa->posicion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mesero') ?></th>
            <td><?= $mesa->has('mesero') ? $this->Html->link($mesa->mesero->nombre, ['controller' => 'Meseros', 'action' => 'view', $mesa->mesero->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mesa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mesa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mesa->modified) ?></td>
        </tr>
    </table>
</div>
