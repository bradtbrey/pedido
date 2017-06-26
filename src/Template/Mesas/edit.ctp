<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mesa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mesas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Meseros'), ['controller' => 'Meseros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesero'), ['controller' => 'Meseros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesas form large-9 medium-8 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= __('Edit Mesa') ?></legend>
        <?php
            echo $this->Form->control('serie');
            echo $this->Form->control('puestos');
            echo $this->Form->control('posicion');
            echo $this->Form->control('mesero_id', ['options' => $meseros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
