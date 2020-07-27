<style>
#form-contact-us .form-control{
  margin-bottom: 4px;
}
</style>
<br/>
<div class="content container">
<div class="row">
  <div class="col-md-8">
  <div class="spacer content" id="contact-us">
  <!--Contact Starts-->
  <div class="contactform">
  <div class="contact-form-container">
    <p class="wowload fadeInUp" style="margin-left:31px;">Fill out the below form. We will contact you in no time.</p>
       
        <form id="form-contact-us" method="POST" class="form-horizontal">   
          <div class="col-sm-12">      
            <div class="err-container"></div>
            <div class="col-sm-10 col-xs-12"><input type="text" name="name" id="name" required="" placeholder="Name" class="form-control"></div>
            <div class="col-sm-10 col-xs-12"><input type="text" name="company" id="company" required="" placeholder="Company" class="form-control"></div>
            <div class="col-sm-10 col-xs-12"><input type="email" name="email" id="email" required="" placeholder="Email" class="form-control"></div>
            <div class="col-sm-10 col-xs-12"><input type="text" name="position" id="position" required="" placeholder="Position" class="form-control"></div>
            <div class="col-sm-10 col-xs-12"><input type="text" name="phone_number" id="phone_number" required="" placeholder="Phone Number" class="form-control"></div>
            <div class="col-sm-10 col-xs-12"><input type="text" name="fax" id="fax" placeholder="Fax" class="form-control"></div>
            <div class="col-sm-12 col-xs-12"><textarea rows="5" name="message" id="message" required="" placeholder="Message" class="form-control"></textarea></div>
          </div>
          <div class="col-sm-12" style="margin-bottom:20px;"> 
            <div class="col-sm-3 col-xs-12"><button type="submit" class="btn btn-primary btn-send-inquiry"><i class="fa fa-paper-plane"></i> Send</button></div>
          </div>
        </form>      
  </div>
  </div>
  </div>
  </div>
  <br/>
  <div class="col-md-4">
  
    <div class="box box-primary box-solid">                  
        <div class="box-header with-border"><i class="fa fa-envelope margin-r-5"></i> <?= __('Email Us') ?> : <?php echo $companyDetails->email; ?></div>   

        <?php if($companyDetails->contact_number != ''){ ?>  
          <div class="box-header with-border"><i class="fa fa-phone margin-r-5"></i> <?= __('Contact Number') ?> : <?php echo $companyDetails->contact_number; ?></div> 
        <?php } ?>

        <?php if($companyDetails->fax != ''){ ?>  
          <div class="box-header with-border"><i class="fa fa-fax margin-r-5"></i> <?= __('Fax Number') ?> : <?php echo $companyDetails->fax; ?></div>   
        <?php } ?>

        <hr />
        <div class="box-header with-border"><i class="fa fa-map-marker margin-r-5"></i> <?= __('Address') ?> : <?php echo $companyDetails->address; ?></div>   
        <div class="box-body">
            <?php if( isMobile() ){ ?>
              <div class="pull-right">
              <a href="waze://?ll=<?php echo $companyDetails->latitude; ?>,<?php echo $companyDetails->longtitude; ?>&navigate=yes"><img style="height:50px;margin:10px 0px;" src="<?= $this->Url->build("/webroot/img/waze_icon_3.png") ?>"></a>
              </div>
            <?php } ?>  
            <style>#map {width: 100%;height: 300px;}</style>
            <div class="location-tab-map-pane">
                <div id="map"></div>            
                <script>
                    function initMap() {
                      var myLatLng = {lat: <?php echo $companyDetails->latitude; ?>, lng: <?php echo $companyDetails->longtitude; ?>};

                      // Create a map object and specify the DOM element for display.
                      var map = new google.maps.Map(document.getElementById('map'), {
                        center: myLatLng,
                        // scrollwheel: false,
                        zoom: 16
                      });

                      // Create a marker and set its position.
                      var marker = new google.maps.Marker({
                        map: map,
                        position: myLatLng,
                        title: 'Regalia large and amazing room!'
                      });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChZmDn0hp-VnrzRQK9IKjJeYPTDYWKIE8&callback=initMap&sensor=false" async defer></script>                
            </div>                         
        </div>
    </div>  
  </div>
</div>
</div>
<br/><br/>
<!--Contact Ends-->