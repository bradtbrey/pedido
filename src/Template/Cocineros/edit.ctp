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
                ['action' => 'delete', $cocinero->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cocinero->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cocineros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'Platillos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cocineros form large-9 medium-8 columns content">
    <?= $this->Form->create($cocinero) ?>
    <fieldset>
        <legend><?= __('Edit Cocinero') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('platillos._ids', ['options' => $platillos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
