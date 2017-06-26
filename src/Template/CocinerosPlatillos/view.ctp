<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cocineros Platillo'), ['action' => 'edit', $cocinerosPlatillo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cocineros Platillo'), ['action' => 'delete', $cocinerosPlatillo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cocinerosPlatillo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cocineros Platillos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cocineros Platillo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cocineros'), ['controller' => 'Cocineros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cocinero'), ['controller' => 'Cocineros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'Platillos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cocinerosPlatillos view large-9 medium-8 columns content">
    <h3><?= h($cocinerosPlatillo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cocinero') ?></th>
            <td><?= $cocinerosPlatillo->has('cocinero') ? $this->Html->link($cocinerosPlatillo->cocinero->id, ['controller' => 'Cocineros', 'action' => 'view', $cocinerosPlatillo->cocinero->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Platillo') ?></th>
            <td><?= $cocinerosPlatillo->has('platillo') ? $this->Html->link($cocinerosPlatillo->platillo->id, ['controller' => 'Platillos', 'action' => 'view', $cocinerosPlatillo->platillo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cocinerosPlatillo->id) ?></td>
        </tr>
    </table>
</div>
