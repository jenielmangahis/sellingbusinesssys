<style>
.form-caption{
    background-color: #3C8DBC;
    color:#ffffff;
    padding: 5px;
}
</style>
<section class="content-header">
    <h1><?= __('Add User') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-gear'></i>" . __('Users'), ['action' => 'index'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($user,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset> 
                        <div class="box-dark box-spacer">
                            <div class="box-header">      
                                <h3 class="header-title-3">User Information</h3>
                            </div>
                        </div>
                        <?php
                                    echo "
                                    <div class='form-group'>
                                        <label for='firstname' class='col-sm-2 control-label'>" . __('Firstname') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('firstname', ['class' => 'form-control', 'id' => 'firstname', 'label' => false]);                
                                    echo " </div></div>";    

                                    echo "
                                    <div class='form-group'>
                                        <label for='middlename' class='col-sm-2 control-label'>" . __('Middlename') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('middlename', ['class' => 'form-control', 'id' => 'middlename', 'label' => false]);                
                                    echo " </div></div>";    

                                    echo "
                                    <div class='form-group'>
                                        <label for='lastname' class='col-sm-2 control-label'>" . __('Lastname') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('lastname', ['class' => 'form-control', 'id' => 'lastname', 'label' => false]);                
                                    echo " </div></div>";

                                    echo "
                                    <div class='form-group'>
                                        <label for='email' class='col-sm-2 control-label'>" . __('Email') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('email', ['class' => 'form-control', 'id' => 'email', 'label' => false]);                
                                    echo " </div></div>";

                                    echo "
                                    <div class='form-group'>
                                        <label for='is_active' class='col-sm-2 control-label'>" . __('Is Active') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->select('is_active',["1" => "Yes", "0" => "No"],['class' => 'form-control', 'id' => 'is_active', 'label' => false]);                                        
                                    echo " </div></div>";
                        ?>
                       <div class="box-dark box-spacer">
                            <div class="box-header">      
                                <h3 class="header-title-3">Login Details</h3>
                            </div>
                        </div>          
                        <?php
                                    echo "
                                    <div class='form-group'>
                                        <label for='group_id' class='col-sm-2 control-label'>" . __('Group') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('group_id', ['class' => 'form-control', 'id' => 'group_id', 'label' => false]);                
                                    echo " </div></div>";    

                                    echo "
                                    <div class='form-group'>
                                        <label for='username' class='col-sm-2 control-label'>" . __('Username') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('username', ['class' => 'form-control', 'id' => 'username', 'label' => false]);                
                                    echo " </div></div>";    

                                    echo "
                                    <div class='form-group'>
                                        <label for='password' class='col-sm-2 control-label'>" . __('Password') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'id' => 'password', 'label' => false]);                
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