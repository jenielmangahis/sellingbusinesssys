<script type="text/javascript">
    var BASE_URL = "<?= $base_url; ?>";
</script>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b><?= $this->Html->image('logo.png',["height"=>"40","width"=>"182"]) ?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?= $this->Flash->render() ?>
    <?= $this->Flash->render('auth') ?>
    <?php if( $is_code_valid ){ ?>
    <p id="page-title" class="login-box-msg">Enter your new password</p>
    <?= $this->Form->create() ?>
        <div id="login-container">
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="repassword" placeholder="Confirm Password" required="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">                
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Change Password</button>
                </div>
                <!-- /.col -->
            </div>  
        </div>
    <?= $this->Form->end() ?>
    <?php } ?>
  </div>
  <!-- /.login-box-body -->
</div>