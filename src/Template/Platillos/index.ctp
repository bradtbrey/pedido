<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
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
<div class="platillos index large-9 medium-8 columns content">
    <h3><?= __('Platillos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_platillo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($platillos as $platillo): ?>
            <tr>
                <td><?= $this->Number->format($platillo->id) ?></td>
                <td><?= h($platillo->nombre) ?></td>
                <td><?= $this->Number->format($platillo->precio) ?></td>
                <td><?= h($platillo->created) ?></td>
                <td><?= h($platillo->modified) ?></td>
                <td><?= $platillo->has('categoria_platillo') ? $this->Html->link($platillo->categoria_platillo->id, ['controller' => 'CategoriaPlatillos', 'action' => 'view', $platillo->categoria_platillo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $platillo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $platillo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $platillo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $platillo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

     

     
   
     
</div>