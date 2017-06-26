<?php
 echo $this->Html->script(['addtocart'], ['inline' => false]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Platillo'), ['action' => 'edit', $platillo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Platillo'), ['action' => 'delete', $platillo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $platillo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Platillos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Platillo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Platillos'), ['controller' => 'CategoriaPlatillos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Platillo'), ['controller' => 'CategoriaPlatillos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cocineros'), ['controller' => 'Cocineros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cocinero'), ['controller' => 'Cocineros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="platillos view large-9 medium-8 columns content">
    <h3><?= h($platillo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($platillo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria Platillo') ?></th>
            <td><?= $platillo->has('categoria_platillo') ? $this->Html->link($platillo->categoria_platillo->id, ['controller' => 'CategoriaPlatillos', 'action' => 'view', $platillo->categoria_platillo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($platillo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($platillo->precio) ?></td>
        </tr>
        <tr>
            <?php echo $this->Form->button('Agregar a Pedido',['class' => 'btn btn-primary addtocart', 'id' => $platillo->id] ); ?>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($platillo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($platillo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($platillo->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cocineros') ?></h4>
        <?php if (!empty($platillo->cocineros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($platillo->cocineros as $cocineros): ?>
            <tr>
                <td><?= h($cocineros->id) ?></td>
                <td><?= h($cocineros->nombre) ?></td>
                <td><?= h($cocineros->apellido) ?></td>
                <td><?= h($cocineros->created) ?></td>
                <td><?= h($cocineros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cocineros', 'action' => 'view', $cocineros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cocineros', 'action' => 'edit', $cocineros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cocineros', 'action' => 'delete', $cocineros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cocineros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
<nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CakePHP Shopping Cart</a>
      </div>
     
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">0</span>',
                                        array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>