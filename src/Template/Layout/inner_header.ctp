      <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->Url->build('/', true); ?>"><?= $this->Html->image('header-logo.png') ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                <li <?php echo $nav_selected[0] == 'home' ? 'class="active"' : ''; ?>>
                  <?php echo $this->Html->link('Home',['controller' => 'Main', 'action' => 'index', '_full' => true]); ?>
                </li> 
                <li <?php echo $nav_selected[0] == 'about' ? 'class="active"' : ''; ?>>
                  <a class="" href="<?php echo $this->Url->build('/about-us'); ?>">About Us</a>
                </li>
                <li <?php echo $nav_selected[0] == 'products' ? 'class="active"' : ''; ?>>
                  <?php echo $this->Html->link('Products',['controller' => 'Products', 'action' => 'lists']); ?></a>
                </li>
                <li <?php echo $nav_selected[0] == 'distributor' ? 'class="active"' : ''; ?>>
                  <a class="" href="<?php echo $this->Url->build('/distributors'); ?>">Distributors</a>
                </li>
                <li <?php echo $nav_selected[0] == 'contact' ? 'class="active"' : ''; ?>>
                  <a class="" href="<?php echo $this->Url->build('/contact-us/', true); ?>">Contact Us</a>
                </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?php include_once('bottom_header.ctp'); ?>