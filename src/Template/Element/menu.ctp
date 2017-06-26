<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?= $this->Html->link(__('Home'), ['controller' => 'pages', 'action' => 'home']) ?></li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meseros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= $this->Html->link(__('List Meseros'), ['controller' => 'meseros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('add Meseros'), ['controller' => 'meseros', 'action' => 'add']) ?></li>
                
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mesas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= $this->Html->link(__('List Mesas'), ['controller' => 'mesas', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('add Mesas'), ['controller' => 'mesas', 'action' => 'add']) ?></li>
                
                
              </ul>
            </li>

              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cocineros<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= $this->Html->link(__('List Cocineros'), ['controller' => 'cocineros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('add Cocinero'), ['controller' => 'cocineros', 'action' => 'add']) ?></li>
                
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Platillos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= $this->Html->link(__('List Platillos'), ['controller' => 'platillos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('add Platillos'), ['controller' => 'platillos', 'action' => 'add']) ?></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Categorias</li>
                 <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'categoria_platillos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('add Categoria'), ['controller' => 'categoria_platillos', 'action' => 'add']) ?></li>
              </ul>
            </li>
            <?php if (isset($current_user)):?>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pedidos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'pedidos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('add Pedido'), ['controller' => 'pedidos', 'action' => 'add']) ?></li>
            
              </ul>
            </li>
            <?php endif; ?>
          </ul>
          <?php if (isset($current_user)):?>
          <ul class="nav navbar-nav navbar-right">
            <li><?= $this->Html->link('salir', ['controller' => 'Users', 'action' => 'logout']) ?></li>
          </ul>
          <?php endif; ?>
          <?= $this->Html->link('Pedidos', ['controller' => 'pedidos', 'accion' => 'view'],['class' => 'btn btn-success navbar-btn']); ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>