<section class="content-header">
    <h1><?= __('Add Company Detail') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-gear'></i>" . __('Company Details'), ['action' => 'index'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($companyDetail,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
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
                                        <label for='email' class='col-sm-2 control-label'>" . __('Email') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('email', ['class' => 'form-control', 'id' => 'email', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='address' class='col-sm-2 control-label'>" . __('Address') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('address', ['class' => 'form-control', 'id' => 'address', 'label' => false]);                
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
                                        <label for='longtitude' class='col-sm-2 control-label'>" . __('Longtitude') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('longtitude', ['class' => 'form-control', 'id' => 'longtitude', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='latitude' class='col-sm-2 control-label'>" . __('Latitude') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('latitude', ['class' => 'form-control', 'id' => 'latitude', 'label' => false]);                
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