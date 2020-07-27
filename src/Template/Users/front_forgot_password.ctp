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
                    <div class="panel-title">Enter your registered email / username and we will send the reset password link</div>                                   
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create(null,['id' => 'loginform', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="Your Registered Email">                                        
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls" style="padding-left:0px;">
                              <button type="submit" class="btn btn-success">Send </button>  
                              <a class="btn btn-info" href="<?= $this->Url->build('/login') ?>">Login</a>                                                            
                            </div>
                        </div>
                    <?= $this->Form->end() ?> 
                    <br/>
                </div>                     
            </div>  
        </div>
    </div>
</div>
