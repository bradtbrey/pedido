<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cocineros Platillos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cocineros'), ['controller' => 'Cocineros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cocinero'), ['controller' => 'Cocineros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'Platillos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cocinerosPlatillos form large-9 medium-8 columns content">
    <?= $this->Form->create($cocinerosPlatillo) ?>
    <fieldset>
        <legend><?= __('Add Cocineros Platillo') ?></legend>
        <?php
            echo $this->Form->control('cocinero_id', ['options' => $cocineros]);
            echo $this->Form->control('platillo_id', ['options' => $platillos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
