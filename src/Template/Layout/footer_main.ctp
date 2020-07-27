<?php use Cake\Utility\Inflector; ?>
<?php use Cake\Utility\Text; ?>
<section class="footer2">
  <div class="container">
    <div class="media-container-row content ranta-white">
      <div class="col-md-3 col-sm-4">
        <div class="mb-3 img-logo">         
        </div>
        <p class="mb-3 ranta-fonts-style foot-title display-7">
        </p>
        <p class="ranta-text ranta-fonts-style ranta-links-column display-7">
          <a href="<?php echo $this->Url->build("/about-us"); ?>" class="text-white">About Us</a>
          <br><a href="<?php echo $this->Url->build("/location"); ?>" class="text-white">Location</a>
          <br><a href="<?php echo $this->Url->build("/categories"); ?>" class="text-white">Category</a>
          <br><a href="<?php echo $this->Url->build("/contact-us"); ?>" class="text-white">Contact</a>
        </p>
      </div>
      <div class="col-md-4 col-sm-8">
        <p class="mb-4 foot-title ranta-fonts-style display-7">
          RECENT NEWS
        </p>
        <p class="ranta-text ranta-fonts-style foot-text display-7">
          <?php $news_slug = Inflector::slug($recentNews->name, "-"); ?>    
          <?php echo $recentNews->excerpt; ?>
        </p>
        <br />
        <a class="btn btn-info" href="<?php echo $this->Url->build('/news/' . $recentNews->id . '/' . $news_slug); ?>">Read more</a>
      </div>
      <div class="col-md-4 offset-md-1 col-sm-12">
        <p class="mb-4 foot-title ranta-fonts-style display-7">
          SUBSCRIBE
        </p>
        <p class="ranta-text ranta-fonts-style form-text display-7">
          Get monthly updates and free resources.
        </p>
        <div class="media-container-column" data-form-type="formoid">
          <div data-form-alert="test" class="align-center subscribe-alert"></div>

          <form class="form-inline" id="form-subscribe-email" method="post" data-form-title=" Form">
            <input type="hidden" value="" data-form-email="true">
            <div class="form-group">
              <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-n">
            </div>
            <div class="input-group-btn m-2">
              <button href="" class="btn btn-primary btn-subscribe" type="submit" role="button">Subscribe</button>
            </div>
          </form>
        </div>
        <p class="mb-4 ranta-fonts-style foot-title display-7">
          CONNECT WITH US
        </p>
        <div class="social-list pl-0 mb-0">
          <div class="soc-item">
            <a href="https://twitter.com/" target="_blank">
              <span class="socicon-twitter socicon ranta-iconfont ranta-iconfont-social" media-simple="true"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://www.facebook.com/pages/" target="_blank">
              <span class="socicon-facebook socicon ranta-iconfont ranta-iconfont-social" media-simple="true"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://www.youtube.com/c/" target="_blank">
              <span class="socicon-youtube socicon ranta-iconfont ranta-iconfont-social" media-simple="true"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://instagram.com/" target="_blank">
              <span class="socicon-instagram socicon ranta-iconfont ranta-iconfont-social" media-simple="true"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://plus.google.com/u/0/+" target="_blank">
              <span class="socicon-googleplus socicon ranta-iconfont ranta-iconfont-social" media-simple="true"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://www.behance.net/" target="_blank">
              <span class="socicon-behance socicon ranta-iconfont ranta-iconfont-social" media-simple="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-lower">
      <div class="media-container-row">
        <div class="col-sm-12">
          <hr>
        </div>
      </div>
      <div class="media-container-row ranta-white">
        <div class="col-sm-12 copyright">
          <p class="ranta-text ranta-fonts-style display-7">
            © Copyright <?= date("Y"); ?> - All Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if( isset($load_share_script) ){ ?>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f263d4a3d6c5e30"></script> 
<?php } ?>
<script>
  var base_url   = "<?= $base_url; ?>";  
  var paypal_sandbox = "<?= PAYPAL_SANDBOX ?>";  
  var paydollar_sandbox = "<?= PAYDOLLAR_SANDBOX ?>";  
</script>
<?php   
  echo $this->Html->script('front/jquery.min');    
  echo $this->Html->script('front/bootstrap.min');
  echo $this->Html->script('front/registration');
  echo $this->Html->script('front/front');
  echo $this->Html->script('front/login');
  echo $this->Html->script('front/tab');
  echo $this->Html->script('front/menu');
  echo $this->Html->script('front/offcanvas');    
  echo $this->Html->script('jquery-ui.min');
  echo $this->Html->script('jquery-ui-timepicker-addon');  

  /*if( isset($load_datetime_picker) ){
    echo $this->Html->script('jquery-ui.min');
    echo $this->Html->script('jquery-ui-timepicker-addon');  
  }*/
  
  if( empty($hdr_user_data) || $hdr_user_data->group_id == 1  ){
    echo $this->Html->script('front/social_media_login');  
  }

  if( isset($load_product_js) ){
    echo $this->Html->script('front/products');
  }
  if( isset($enable_fancy_box) ){
    echo $this->Html->css('jquery.fancybox.min');
    echo $this->Html->script('jquery.fancybox.min');    
  }
  if( isset($enable_star_rating) ){
    echo $this->Html->script('jquery.rateyo.min');
  }
  if( isset($load_cart) ){
      echo $this->Html->script('front/cart');
  }
?>
<script>
  (function() { 
    $('#datetimepicker-thelorry').datetimepicker({
      controlType: 'select',
      oneLine: true,
      minDate: 1,
      timeFormat: 'hh:mm TT',
      beforeShowDay: $.datepicker.noWeekends
    });    
    
    <?php 
        if( isset($script_product_rating) ){
          echo $script_product_rating;
        }
    ?>
    <?php if( isset($enable_star_rating) ){ ?>
      $(".rateYo").each(function (e) {          
          $(this).next().text($(this).rateYo("rating"));
      });
    <?php } ?>
    [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
      new CBPFWTabs(el);
    });

  })();

</script>
</body>
</html>
