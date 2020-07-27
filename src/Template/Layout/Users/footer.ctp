
    <div class="modal fade" id="messageNotifierModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding:0px;"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="messageModalLabel">Notice</h4>
              </div>

              <div class="modal-body">
                <p id="msg-notifier-container"></p>
              </div>
              <div class="modal-footer">                                 
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              </div>
            </div>
        </div>
    </div>
<?php 
  //echo $this->Html->script('jquery.min.js');
  echo $this->Html->script('plugins/jQuery/jquery-2.2.3.min.js');
  echo $this->Html->script('intellident/jquery.min.js'); 
  echo $this->Html->script('plugins/iCheck/icheck.min.js'); 
?>
<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>

<script type="text/javascript">

  $(function(){

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

    $('#btn-forgot-password').click(function(){
      $('#login-container').hide(500);
      $('#forgot-password-container').show(500);
      $('#page-title').html("Forgot Password");
      $('#page-desc').html("Enter the e-mail associated with your Intellident account, then click Continue. We'll send you an email confirmation where you can easily reset your password.");
    });

    $('#btn-return-login').click(function(){
      $('#forgot-password-container').hide(500);
      $('#login-container').show(500);
      $('#page-title').html("Sign in to start your session");
      $('#page-desc').html("Enter your username and password.");
    });

    $('#frm-forgot-password').submit(function(evt) {
      evt.preventDefault();

      $('.btn-continue-forgot-password').html("<i class='fa fa-spin fa-spinner'></i> Continue");
      if( $('.btn-continue-forgot-password').hasClass("disabled") ) {
        $('.btn-continue-forgot-password').html("Continue");
      }else{
        $('.btn-continue-forgot-password').attr("disabled","disabled");
        $.post(BASE_URL + "users/request_forgot_password",$('#frm-forgot-password').serialize(),function(o) {
          if(o.is_success) {
            
          }else{

          }
          $('.btn-continue-forgot-password').removeAttr("disabled");
          $('#msg-notifier-container').html(o.message);
          $('#messageNotifierModal').modal("show");
          $('.btn-continue-forgot-password').html("Continue");
        },"json");
      }
    });
  });
</script>