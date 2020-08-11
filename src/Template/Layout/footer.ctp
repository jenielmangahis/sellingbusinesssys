    </div><!-- #wrapper -->

    <div class="modal fade" id="messageNotifierModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="messageModalLabel">Notice</h4>
              </div>

              <div class="modal-body">
                <p id="msg-notifier-container"></p>
              </div>
              <div class="modal-footer">                                 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> --> <!-- <?= CURRENT_VERSION; ?> -->
    </div>
    <strong>Copyright &copy; <?= date("Y"); ?> <a href="#"><?= COMPANY_NAME ?></a>.</strong> All rights
    reserved.
  </footer>

<script>
  var base_url = "<?= $base_url; ?>";
  //$.widget.bridge('uibutton', $.ui.button);
</script>

<?php   
  echo $this->Html->script('plugins/jQuery/jquery-2.2.3.min.js');
  echo $this->Html->script('app/jquery.min.js'); 
?>
<?php 
  echo $this->Html->script('bootstrap/js/bootstrap.min.js');
  echo $this->Html->script('jquery.ui.touch-punch.min.js');      
  echo $this->Html->script('plugins/datepicker/bootstrap-datepicker.js');
  echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));

  echo $this->Html->script('plugins/slimScroll/jquery.slimscroll.min.js');  
  echo $this->Html->script('dist/js/app.min.js');

  if( isset($enable_fancy_box) ){
    echo $this->Html->css('jquery.fancybox.min.css');
    echo $this->Html->script('jquery.fancybox.min.js');    
  }

  if( isset($enable_token_input) || isset($enable_reports) ){
    echo $this->Html->script('tokeninput/jquery.tokeninput.js');    
  }

  if( isset($enable_reports) ){
    echo $this->Html->script('reports.js');
  }

  echo $this->Html->script('backend-application.js');
  echo $this->Html->script('ui-elements.js');

?>
</body>
</html>