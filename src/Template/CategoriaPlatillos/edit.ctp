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
                ['action' => 'delete', $categoriaPlatillo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaPlatillo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categoria Platillos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'Platillos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriaPlatillos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriaPlatillo) ?>
    <fieldset>
        <legend><?= __('Edit Categoria Platillo') ?></legend>
        <?php
            echo $this->Form->control('categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
