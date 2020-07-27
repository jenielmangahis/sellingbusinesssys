<section class="content-header">
    <h1><?= __('Add Slide') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-image'></i>" . __('Slides'), ['action' => 'index'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($slide,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                            echo "
                            <div class='form-group'>
                                <label for='title' class='col-sm-2 control-label'>" . __('Title') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('title', ['class' => 'form-control', 'id' => 'title', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='caption' class='col-sm-2 control-label'>" . __('Caption') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('caption', ['class' => 'form-control ckeditor', 'id' => 'caption', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='link' class='col-sm-2 control-label'>" . __('Link') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('link', ['class' => 'form-control', 'id' => 'link', 'label' => false]);                
                            echo " </div></div>";    
                            
                            echo "
                            <div class='form-group'>
                                <label for='image' class='col-sm-2 control-label'>" . __('Image') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->input('image', ['class' => 'form-control has-ck-finder', 'readonly' => 'readonly', 'id' => 'image', 'label' => false]);                
                            echo " </div></div>";   
                            
                            echo "
                            <div class='form-group'>
                                <label for='is_publish' class='col-sm-2 control-label'>" . __('Is Publish') . "</label>
                                <div class='col-sm-6'>";
                                echo $this->Form->select('is_publish',["1" => "Yes", "0" => "No"],['class' => 'form-control', 'id' => 'is_publish', 'label' => false]);                                        
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