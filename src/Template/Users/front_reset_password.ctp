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
                    <div class="panel-title">Enter new password</div>                                   
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create(null,['id' => 'loginform', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="new password"><br/>                            
                        </div>  

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="repassword" placeholder="retype password"><br/>                            
                        </div>                        
                        <div style="margin-top:10px" class="form-group">

                            <div class="col-sm-12 controls" style="padding-left:0px;">
                              <button type="submit" class="btn btn-success">Reset Password </button>                                                      
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