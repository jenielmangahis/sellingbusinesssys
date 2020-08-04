<div class="cd-tabs" style="height:700px;">
  <style type="text/css">
    label
    {
      padding: 10px;
      padding-left: 0px;
      padding-top: 0px;
      }
    .btn-profile{
      font-size: 12px;
    }
  </style>

  <section class="content-header">
      <h1>My Profile</h1>
  </section>
  <br/>
  <div class="col-md-12" style="color: #000;">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <div class="col-md-2">
            <!-- Profile Image -->
          <div class="box box-primary">
            <div id="profile-box" class="box-body box-profile">
              <?php 
                if( $user->photo != '' ){
                    $user_photo = $this->Url->build("/webroot/upload/users/" . $user->id . "/" . $user->photo);            
                }else{
                    $user_photo = $this->Url->build("/webroot/images/default_profile.jpg");
                }
              ?>
              <img style="height:128px;width:128px;" src="<?php echo $user_photo; ?>" alt="User Avatar" class="profile-user-img img-responsive img-circle">                
              <br />
              <a href="#modal-change-avatar" data-toggle="modal" style="text-align:left;" class="btn btn-profile btn-primary btn-block"><b><i class="fa fa-image"></i> Change Avatar</b></a>
              <a href="<?php echo $this->Url->build(['action' => 'edit']); ?>" style="text-align:left;" class="btn btn-profile btn-primary btn-block"><b><i class="fa fa-pencil"></i> Edit Profile</b></a>
              <a href="<?php echo $this->Url->build(['action' => 'change_password']); ?>" style="text-align:left;" class="btn btn-profile btn-primary btn-block"><b><i class="fa fa-lock"></i> Change Password</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-10">

          <!-- Personal Info Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Personal Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Name</strong>
              <p class="text-muted">
                <?php echo $user->firstname . " " . $user->middlename . " " . $user->lastname; ?>
              </p>              
              <hr />              
              <strong><i class="fa fa-user margin-r-5"></i> Username</strong>
              <p class="text-muted">
                <?php echo $user->username; ?>
              </p>              
              <hr />
              <strong><i class="fa fa-gear margin-r-5"></i> Group</strong>
              <p class="text-muted">
                <?php echo $user->group->name; ?>
              </p>              
            </div>
            <!-- /.box-body -->                      
        </div>
        </div>
        <div id="modal-change-avatar" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Change Avatar</h4>
                </div>
                <?= $this->Form->create(null,[
                    'url' => ['action' => 'change_profile_photo'],
                    'class' => 'form-horizontal',
                    'type' => 'file',
                    'enctype' => 'multipart/form-data'            
                ]) ?>
                <div class="modal-body">
                    <div class="form-group">                      
                      <div class="col-sm-10">
                        <?php echo $this->Form->input('photo', ['type' => 'file', 'id' => 'photo', 'class' => 'filestyle', 'data-classButton' => 'btn btn-default', 'data-icon' => false, 'data-classInput' => 'form-control inline v-middle input-s', 'label' => false]); ?>                
                      </div>
                    </div>
                </div>
                <div class="modal-footer">            
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <?= $this->Form->button( __('Upload'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-info', 'escape' => false]) ?>
                </div>
                <?= $this->Form->end() ?>
              </div>
            </div>                              
        </div>  
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>
</li>
</ul>
</div>
