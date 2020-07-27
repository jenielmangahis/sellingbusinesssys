<style>
.fade {
    opacity: 1;
}
#___signin_0{
    top: 17px;  
}
</style>
<div class="container">    
<div class="media-container-row container pt-5 mt-2">
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">     
                    <div class="panel-title">Sign in to start your session</div>                                   
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create(null,['id' => 'loginform', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password"><br/>                            
                        </div>
                        <div style="margin-bottom: 15px">
                            <div style="float:right; font-size: 80%; position: relative; top:-10px;"><a href="<?= $this->Url->build('/forgot_password') ?>" style="color:#f91111 !important;">Forgot password?</a></div>
                        </div>
                        <div style="margin-top:10px" class="form-group">                            <!-- Button -->

                            <div class="col-sm-12 controls" style="padding-left:0px;">
                              <button type="submit" class="btn btn-success">Login </button>                              
                                <div class="" style="display:inline-block;">
                                  <a href="#" onclick="fb_login();"><img class="fb-login-image" src="<?php echo $this->Url->build("/webroot/img/fb_login.png") ?>" border="0" alt="" style="top:5px;"></a>              
                                  <span class="g-signin"
                                      data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
                                      data-clientid="198113573941-vlvsqfp8bq55ah8abrbe1fiu8k2rsu4v.apps.googleusercontent.com"
                                      data-redirecturi="postmessage"
                                      data-accesstype="offline"
                                      data-cookiepolicy="single_host_origin"
                                      data-callback="signInCallback">
                                  </span>
                                </div>    
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control" style="padding:0px;">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account! 
                                <a style="color:#3B5998;" data-toggle="modal" data-target="#exampleModal" href="#">
                                    Sign Up Here
                                </a>
                                </div>
                            </div>
                        </div>    
                    <?= $this->Form->end() ?> 
                    <br/>
                </div>                     
            </div>  
        </div>
    </div>
</div>
<script>
var po = document.createElement('script');
po.type = 'text/javascript';
po.async = true;
po.src = 'https://plus.google.com/js/client:plusone.js?onload=start';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(po, s);
</script>