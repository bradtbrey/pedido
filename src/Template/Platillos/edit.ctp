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
                ['action' => 'delete', $platillo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $platillo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Platillos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Platillos'), ['controller' => 'CategoriaPlatillos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria Platillo'), ['controller' => 'CategoriaPlatillos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cocineros'), ['controller' => 'Cocineros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cocinero'), ['controller' => 'Cocineros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="platillos form large-9 medium-8 columns content">
    <?= $this->Form->create($platillo) ?>
    <fieldset>
        <legend><?= __('Edit Platillo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('precio');
            echo $this->Form->control('categoria_platillo_id', ['options' => $categoriaPlatillos]);
            echo $this->Form->control('cocineros._ids', ['options' => $cocineros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
