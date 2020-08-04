<?php include('header.ctp'); ?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?= $base_url; ?>" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><?= $this->Html->image('logo.jpg',["height"=>"35","width"=>"35"]) ?></b></span>        
      <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?= $this->Html->image('logo.jpg',["width"=>"100%"]) ?></b></span>  
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">        
          <!-- User Account: style can be found in dropdown.less -->
          <?php if( isMobile() ){ ?>
              <li class="dropdown notifications-menu">                
                <?= $this->Html->link('<i class="fa fa-plus-circle"></i>', ['controller' => 'products', 'action' => 'add'],['escape' => false, 'target' => '_new']) ?>              
              </li>
          <?php } ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
                if( $hdr_user_data->photo != '' ){
                    $hdr_user_photo = $this->Url->build("/webroot/upload/users/" . $hdr_user_data->id . "/" . $hdr_user_data->photo);            
                }else{                  
                    $hdr_user_photo = $this->Url->build("/webroot/images/default_profile.jpg");
                }
              ?>
              <img src="<?php echo $hdr_user_photo; ?>" alt="User Avatar" class="user-image">                              
              <span class="hidden-xs"><?php echo $hdr_user_data->firstname . " " . $hdr_user_data->lastname; ?></span>
            </a>
            <ul class="dropdown-menu">              
              <!-- User image -->
              <li class="user-header">
                <?php 
                  if( $hdr_user_data->photo != '' ){
                      $hdr_user_photo = $this->Url->build("/webroot/upload/users/" . $hdr_user_data->id . "/" . $hdr_user_data->photo);            
                  }else{                  
                      $hdr_user_photo = $this->Url->build("/webroot/images/default_profile.jpg");
                  }
                ?>
                <img src="<?php echo $hdr_user_photo; ?>" alt="User Avatar" class="img-circle">           
                <p>
                  <?php echo $hdr_user_data->firstname . " " . $hdr_user_data->lastname; ?>
                  <small><?php echo $hdr_user_data->email; ?></small>
                </p>
              </li>              
              <!-- Menu Footer-->
              <li class="user-footer" style="background: #d3d3d3;">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Customer Profile</a> -->
                </div>
                <div class="pull-left">
                  <a href="<?= $base_url ?>profile/change_password" class="btn btn-sm btn-default btn-flat" style="font-size:11px;"><i class="fa fa-lock"></i> Change Password</a>                  
                </div>
                <div class="pull-right">
                  <a href="<?= $base_url ?>users/logout" class="btn btn-sm btn-default btn-flat" style="font-size:11px;"><i class="fa fa-sign-out"></i> Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("menu_wrap_user.ctp"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Enable Push Notification
              <?php 
                $is_checked = "";
                if( $hdr_user_data->enable_push_notification == 1 ){
                  $is_checked = "checked";
                }
              ?>
              <input type="checkbox" id="side-widget-push-notification" class="pull-right" <?php echo $is_checked; ?>>
            </label>

            <p>
              Allow to receive email
            </p>
          </div>
          <!-- /.form-group -->

          <!-- <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div> -->
          <!-- /.form-group -->

          <!-- <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div> -->
          <!-- /.form-group -->

          <!-- <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div> -->
          <!-- /.form-group -->

          <!-- <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div> -->
          <!-- /.form-group -->

          <!-- <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div> -->
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<?php include('footer.ctp'); ?>