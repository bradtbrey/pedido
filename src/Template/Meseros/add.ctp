<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Meseros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="meseros form large-9 medium-8 columns content">
    <?= $this->Form->create($mesero) ?>
    <fieldset>
        <legend><?= __('Add Mesero') ?></legend>
        <?php
            echo $this->Form->control('dni');
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('telefono');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
