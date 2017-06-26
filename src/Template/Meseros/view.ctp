<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mesero'), ['action' => 'edit', $mesero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mesero'), ['action' => 'delete', $mesero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Meseros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesero'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meseros view large-9 medium-8 columns content">
    <h3><?= h($mesero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($mesero->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mesero->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($mesero->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($mesero->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mesero->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mesero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mesero->modified) ?></td>
        </tr>
    </table>
</div>



