<script type="text/javascript">
    var BASE_URL = "<?= $base_url; ?>";
</script>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b><?= $this->Html->image('logo.jpg',["height"=>"61"]) ?></b></a>    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p id="page-title" class="login-box-msg">Sign in to start your session</p>

    <?= $this->Flash->render() ?>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
        <div id="login-container">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>

            <a href="javascript:void(0);" id="btn-forgot-password">I forgot my password</a><br>            
        </div>
    <?= $this->Form->end() ?>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <div id="forgot-password-container" style="display: none;">
        <form id="frm-forgot-password" onsubmit="return false;" data-toggle="validator" role="form" method="post">
            <div class="form-group">
                <input type="email" name="email_username" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-lg btn-success btn-continue-forgot-password">Continue</button>
            </div>
            <div class="form-group" style="text-align: right; margin-top:20px;">
                <a href="javascript:void(0);" id="btn-return-login" >Back to Sign In</a>
            </div>
        </form>    
    </div>

    

  </div>
  <!-- /.login-box-body -->
</div>