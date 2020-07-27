<section class="content-header">
    <h1><?= __('Edit Company Details') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-gear'></i>" . __('Company Details'), ['action' => 'edit', 1],['escape' => false]) ?></li>
        <li class="active"><?= __('Edit') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">

                </div>
                <div class="box-body">
                    <?= $this->Form->create($companyDetail,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <?= $this->Form->hidden('latitude',['id' => 'latitude']); ?>
                    <?= $this->Form->hidden('longtitude',['id' => 'longtitude']); ?>
                    <fieldset>                          
                        <?php
                            echo "
                            <div class='form-group'>
                                <label for='name' class='col-sm-2 control-label'>" . __('Name') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('name', ['class' => 'form-control', 'id' => 'name', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='logo' class='col-sm-2 control-label'>" . __('Logo') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('logo', ['type' => 'text', 'class' => 'form-control has-ck-finder', 'readonly' => 'readonly', 'id' => 'logo', 'label' => false]);                
                            echo " </div></div>";

                            echo "
                            <div class='form-group'>
                                <label for='qr_image' class='col-sm-2 control-label'>" . __('QR Image') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('qr_image', ['type' => 'text', 'class' => 'form-control has-ck-finder-sub', 'readonly' => 'readonly', 'id' => 'logo2', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='email' class='col-sm-2 control-label'>" . __('Email') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('email', ['class' => 'form-control', 'id' => 'email', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='address' class='col-sm-2 control-label'>" . __('Address') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('address', ['class' => 'form-control ckeditor', 'id' => 'address', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='inquiry_recipient' class='col-sm-2 control-label'>" . __('Inquiry Recipient') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('inquiry_recipient', ['class' => 'form-control', 'id' => 'inquiry_recipient', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='contact_number' class='col-sm-2 control-label'>" . __('Contact Number') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('contact_number', ['class' => 'form-control', 'id' => 'contact_number', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='fax' class='col-sm-2 control-label'>" . __('Fax') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('fax', ['class' => 'form-control', 'id' => 'fax', 'label' => false]);                
                            echo " </div></div>";

                            echo "
                            <div class='form-group'>
                                <label for='fax' class='col-sm-2 control-label'>" . __('Facebook') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('facebook', ['type' => 'text', 'class' => 'form-control', 'id' => 'facebook', 'label' => false]);                
                            echo " </div></div>";

                            echo "
                            <div class='form-group'>
                                <label for='fax' class='col-sm-2 control-label'>" . __('Twitter') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('twitter', ['type' => 'text', 'class' => 'form-control', 'id' => 'twitter', 'label' => false]);                
                            echo " </div></div>";

                            echo "
                            <div class='form-group'>
                                <label for='fax' class='col-sm-2 control-label'>" . __('Instagram') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('instagram', ['type' => 'text', 'class' => 'form-control', 'id' => 'instagram', 'label' => false]);                
                            echo " </div></div>";

                            echo "
                            <div class='form-group'>
                                <label for='fax' class='col-sm-2 control-label'>" . __('Linkedin') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('linkedin', ['type' => 'text', 'class' => 'form-control', 'id' => 'linkedin', 'label' => false]);                
                            echo " </div></div>";

                            echo "
                            <div class='form-group'>
                                <label for='google_analytics' class='col-sm-2 control-label'>" . __('Google Analytics') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('google_analytics', ['type' => 'textarea', 'class' => 'form-control', 'id' => 'google_analytics', 'label' => false]);                
                            echo " </div></div>";    
                        ?>

                        <div class="row">
                            <div class="location-tab-map-pane" style="padding:10px;">
                            <div class="tooltip-bottom-middle tooltip-layout panel-header-tooltip space-top-4 text-center pinned">
                                <p class="panel-body" style="background-color: #3C8DBC;color:#ffffff;">Drag the pin to set your location.</p>
                                <style>#map {width: 100%;height: 300px;}</style>
                                <div id="map"></div>      
                                <script>                    
                                    function initMap() {
                                        var lat = parseFloat($("#latitude").val());
                                        var longt = parseFloat($("#longtitude").val());
                                        
                                        var myLatLng = {lat: lat, lng: longt};
                                        var map = new google.maps.Map(document.getElementById('map'), {                                            
                                            zoom: 16, // initialize zoom level - the max value is 21
                                            streetViewControl: false, // hide the yellow Street View pegman
                                            scaleControl: true, // allow users to zoom the Google Map
                                            mapTypeId: google.maps.MapTypeId.ROADMAP,                                            
                                            center: myLatLng,
                                            //mapTypeId: google.maps.MapTypeId.ROADMAP
                                        });

                                        var myMarker = new google.maps.Marker({
                                            position: new google.maps.LatLng(lat, longt),
                                            draggable: true,
                                            animation: google.maps.Animation.DROP
                                        });

                                        google.maps.event.addListener(myMarker, 'dragend', function (evt) {
                                            $("#latitude").val(evt.latLng.lat());
                                            $("#longtitude").val(evt.latLng.lng());
                                        });

                                        myMarker.addListener('click', toggleBounce);

                                        bounds  = new google.maps.LatLngBounds();
                                        loc = new google.maps.LatLng(myMarker.position.lat(), myMarker.position.lng());
                                        bounds.extend(loc);
                                        map.panToBounds(bounds);  

                                        function toggleBounce() {
                                          if (myMarker.getAnimation() !== null) {
                                            myMarker.setAnimation(null);
                                          } else {
                                            myMarker.setAnimation(google.maps.Animation.BOUNCE);
                                          }
                                        }

                                        map.setCenter(myMarker.position);
                                        myMarker.setMap(map);
                                    }
                                </script>

                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChZmDn0hp-VnrzRQK9IKjJeYPTDYWKIE8&callback=initMap&sensor=false" async defer></script>                
                            </div>                
                            </div>  
                        </div>
                    </fieldset>
                    <div class="form-group" style="margin-top: 30px;">
                        <div class="col-sm-offset-2 col-sm-10">                            
                            <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                            <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue editing'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back'), ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </section>
    </div>
</section>