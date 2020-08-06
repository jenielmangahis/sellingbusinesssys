<section class="content-header">
    <h1><?= __('Add Business') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-gear'></i>" . __('Business'), ['action' => 'index'],['escape' => false]) ?></li>
        <li class="active"><?= __('Add') ?></li>
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
                    <?= $this->Form->create($busines,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                            echo "
                            <div class='form-group'>
                                <label for='user_id' class='col-sm-2 control-label'>" . __('User') . "</label>
                                <div class='col-sm-6'>";
                                 echo $this->Form->input('user_id', ['class' => 'form-control', 'id' => 'user_id', 'label' => false, 'options' => $users]);                 
                            echo " </div></div>";    
                            echo "
                            <div class='form-group'>
                                <label for='taking' class='col-sm-2 control-label'>" . __('Taking') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('taking', ['class' => 'form-control', 'id' => 'taking', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='weekly_turnover' class='col-sm-2 control-label'>" . __('Weekly Turnover') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('weekly_turnover', ['class' => 'form-control', 'id' => 'weekly_turnover', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='average_weekly_takings' class='col-sm-2 control-label'>" . __('Average Weekly Takings') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('average_weekly_takings', ['class' => 'form-control', 'id' => 'average_weekly_takings', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='annual_return' class='col-sm-2 control-label'>" . __('Annual Return') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('annual_return', ['class' => 'form-control', 'id' => 'annual_return', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='cover_photo' class='col-sm-2 control-label'>" . __('Cover Photo') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('cover_photo', ['type' => 'file', 'class' => 'form-control', 'id' => 'cover_photo', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='business_listing_title' class='col-sm-2 control-label'>" . __('Business Listing Title') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('business_listing_title', ['class' => 'form-control', 'id' => 'business_listing_title', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='business_description' class='col-sm-2 control-label'>" . __('Business Description') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('business_description', ['class' => 'form-control', 'id' => 'business_description', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='state' class='col-sm-2 control-label'>" . __('State') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('state', ['class' => 'form-control', 'id' => 'state', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='postal_code' class='col-sm-2 control-label'>" . __('Postal Code') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('postal_code', ['class' => 'form-control', 'id' => 'postal_code', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='primary_agent' class='col-sm-2 control-label'>" . __('Primary Agent') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('primary_agent', ['class' => 'form-control', 'id' => 'primary_agent', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='business_type_id' class='col-sm-2 control-label'>" . __('Business Type') . "</label>
                                <div class='col-sm-6'>";
                                 echo $this->Form->input('business_type_id', ['class' => 'form-control', 'id' => 'business_type_id', 'label' => false, 'options' => $businessTypes]);                 
                            echo " </div></div>";    
                            echo "
                            <div class='form-group'>
                                <label for='office' class='col-sm-2 control-label'>" . __('Office') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('office', ['class' => 'form-control', 'id' => 'office', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='sales_authority_id' class='col-sm-2 control-label'>" . __('Sales Authority') . "</label>
                                <div class='col-sm-6'>";
                                 echo $this->Form->input('sales_authority_id', ['class' => 'form-control', 'id' => 'sales_authority_id', 'label' => false, 'options' => $salesAuthorities]);                 
                            echo " </div></div>";    
                            echo "
                            <div class='form-group'>
                                <label for='authority_start_date' class='col-sm-2 control-label'>" . __('Authority Start Date') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('authority_start_date', ['type' => 'text', 'class' => 'default-datepicker form-control', 'id' => 'authority_start_date', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='authority_end_date' class='col-sm-2 control-label'>" . __('Authority End Date') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('authority_end_date', ['type' => 'text', 'class' => 'default-datepicker form-control', 'id' => 'authority_end_date', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='business_category_id' class='col-sm-2 control-label'>" . __('Business Category') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('business_category_id', ['class' => 'form-control', 'id' => 'business_category_id', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='feature_listing' class='col-sm-2 control-label'>" . __('Feature Listing') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('feature_listing', ['class' => 'form-control', 'id' => 'feature_listing', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='estate_building' class='col-sm-2 control-label'>" . __('Estate Building') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('estate_building', ['class' => 'form-control', 'id' => 'estate_building', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='unit_prefix' class='col-sm-2 control-label'>" . __('Unit Prefix') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('unit_prefix', ['class' => 'form-control', 'id' => 'unit_prefix', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='unit_number' class='col-sm-2 control-label'>" . __('Unit Number') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('unit_number', ['class' => 'form-control', 'id' => 'unit_number', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='street_lot_number' class='col-sm-2 control-label'>" . __('Street Lot Number') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('street_lot_number', ['class' => 'form-control', 'id' => 'street_lot_number', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='street_name' class='col-sm-2 control-label'>" . __('Street Name') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('street_name', ['class' => 'form-control', 'id' => 'street_name', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='listing_suburb' class='col-sm-2 control-label'>" . __('Listing Suburb') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('listing_suburb', ['class' => 'form-control', 'id' => 'listing_suburb', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='advertising_suburb' class='col-sm-2 control-label'>" . __('Advertising Suburb') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('advertising_suburb', ['class' => 'form-control', 'id' => 'advertising_suburb', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='google_maps_address' class='col-sm-2 control-label'>" . __('Google Maps Address') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('google_maps_address', ['class' => 'form-control', 'id' => 'google_maps_address', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='marketing_sales_price' class='col-sm-2 control-label'>" . __('Marketing Sales Price') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('marketing_sales_price', ['class' => 'form-control', 'id' => 'marketing_sales_price', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='marketing_price_text' class='col-sm-2 control-label'>" . __('Marketing Price Text') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('marketing_price_text', ['class' => 'form-control', 'id' => 'marketing_price_text', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='annual_lease_price' class='col-sm-2 control-label'>" . __('Annual Lease Price') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('annual_lease_price', ['class' => 'form-control', 'id' => 'annual_lease_price', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='actual_sales_price' class='col-sm-2 control-label'>" . __('Actual Sales Price') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('actual_sales_price', ['class' => 'form-control', 'id' => 'actual_sales_price', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='price_comment' class='col-sm-2 control-label'>" . __('Price Comment') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('price_comment', ['class' => 'form-control', 'id' => 'price_comment', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='lease_terms' class='col-sm-2 control-label'>" . __('Lease Terms') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('lease_terms', ['class' => 'form-control', 'id' => 'lease_terms', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='parking' class='col-sm-2 control-label'>" . __('Parking') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('parking', ['class' => 'form-control', 'id' => 'parking', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='lease_comments' class='col-sm-2 control-label'>" . __('Lease Comments') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('lease_comments', ['class' => 'form-control', 'id' => 'lease_comments', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='other_feature' class='col-sm-2 control-label'>" . __('Other Feature') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('other_feature', ['class' => 'form-control', 'id' => 'other_feature', 'label' => false]);                
                            echo " </div></div>";    
                                    
                    ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">                            
                            <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                            <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue adding'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>                            
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </section>
    </div>
</section>