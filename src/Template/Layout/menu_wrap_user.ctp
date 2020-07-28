<?php use Cake\Utility\Inflector; ?>
<?php 
    $nav_selected = $this->NavigationSelector->selectedMainNavigation($nav_selected[0]);
    if (!empty($sub_nav_selected)) {
        $sub_nav_selected = $this->NavigationSelector->selectedSubNavigation($sub_nav_selected['parent'],$sub_nav_selected['child']);
    }else{
        $sub_nav_selected = array();
    }
    
?>

<aside class="main-sidebar">    
    <section class="sidebar">  
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php 
            if( $hdr_user_data->photo != '' ){
                $hdr_user_photo = $this->Url->build("/webroot/upload/users/" . $hdr_user_data->id . "/" . $hdr_user_data->photo);            
            }else{                  
                $hdr_user_photo = $this->Url->build("/webroot/images/default_profile.jpg");
            }
          ?>
          <img src="<?php echo $hdr_user_photo; ?>" alt="User Avatar" class="img-circle" style="min-height:43px;margin-top:12px;">                    
        </div>
        <div class="pull-left info">
          <p><?php echo $hdr_user_data->firstname . " " . $hdr_user_data->lastname; ?></p>     
          <a href="<?= $base_url ?>profile/index" style="font-size:11px;"><i class="fa fa-user"></i> My Profile</a>     
        </div>
      </div>
      <!-- search form -->
      <?= $this->Form->create(null,[                
        'url' => ['controller' => 'admin_search', 'action' => 'index'],
        'class' => 'sidebar-form',
        'type' => 'GET'
      ]) ?> 
        <div class="input-group">
          <input type="text" name="query" class="form-control" value="<?php echo(isset($query_string) ? $query_string : ''); ?>" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>    
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("Dashboard") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("Profile") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("My Favorite") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("Saved Search") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("My Properties") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("My package") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i><span>' . __("Submission") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li> 

       <!--  <li id="pages_nav" title="Pages" class="<?= $nav_selected["pages"] ?>">
            <?= $this->Html->link('<i class="fa fa-globe"></i><span>' . __("Pages") . "</span>",["controller" => "pages", "action" => "index"],["escape" => false]) ?>
        </li>                      
        <li id="slides_nav" title="Slides" class="<?= $nav_selected["slides"] ?>">
            <?= $this->Html->link('<i class="fa fa-image"></i><span>' . __("Slides") . "</span>",["controller" => "slides", "action" => "index"],["escape" => false]) ?>
        </li>         -->
        <li id="system_settings_nav" title="System Settings" class="treeview <?= $nav_selected["system_settings"] ?>">
          <a href="#">
            <i class="fa fa-gear"></i> <span>System Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><?= $this->Html->link('<i class="fa fa-industry"></i><span>' . __("Company") . "</span>",["controller" => "company_details", "action" => "index"],["escape" => false]) ?></li>
          	<li><?= $this->Html->link('<i class="fa fa-users"></i><span>' . __("Users") . "</span>",["controller" => "users", "action" => "index"],["escape" => false]) ?></li>            
            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __("Groups") . "</span>",["controller" => "groups", "action" => "index"],["escape" => false]) ?></li>
          </ul>
        </li>
       
      </ul>
    </section>    
</aside>