<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->columnType($field) !== 'binary';
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}
%>
<section class="content-header">
    <h1><?= __('<%= Inflector::humanize($action) %> <%= $singularHumanName %>') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-gear'></i>" . __('<%= $pluralHumanName %>'), ['action' => 'index'],['escape' => false]) ?></li>
        <li class="active"><?= __('<%= Inflector::humanize($action) %>') ?></li>
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
                    <?= $this->Form->create($<%= $singularVar %>,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                        <%
                                foreach ($fields as $field) {
                                    if (in_array($field, $primaryKey)) {
                                        continue;
                                    }
                                    if (isset($keyFields[$field])) {
                                        $fieldData = $schema->column($field);
                                        if (!empty($fieldData['null'])) {
                        %>      
                                    echo "
                                    <div class='form-group'>
                                        <label for='<%= $field %>' class='col-sm-2 control-label'>" . __('<%= Inflector::humanize($field) %>') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('<%= $field %>', ['class' => 'form-control', 'id' => '<%= $field %>', 'label' => false,  'z' => $<%= $keyFields[$field] %>, 'empty' => true]);
                                    echo " </div></div>";                   
                        <%
                                        } else {
                        %>
                                    echo "
                                    <div class='form-group'>
                                        <label for='<%= $field %>' class='col-sm-2 control-label'>" . __('<%= Inflector::humanize($field) %>') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('<%= $field %>', ['class' => 'form-control', 'id' => '<%= $field %>', 'label' => false, 'options' => $<%= $keyFields[$field] %>]);                 
                                    echo " </div></div>";    
                        <%
                                        }
                                        continue;
                                    }
                                    if (!in_array($field, ['created', 'modified', 'updated'])) {
                                        $fieldData = $schema->column($field);
                                        if (($fieldData['type'] === 'date') && (!empty($fieldData['null']))) {
                        %>
                                    echo "
                                    <div class='form-group'>
                                        <label for='<%= $field %>' class='col-sm-2 control-label'>" . __('<%= Inflector::humanize($field) %>') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('<%= $field %>', ['class' => 'form-control', 'id' => '<%= $field %>', 'label' => false, 'empty' => true]);                 
                                    echo " </div></div>";    

                                    
                        <%
                                        } else {
                        %>
                                    echo "
                                    <div class='form-group'>
                                        <label for='<%= $field %>' class='col-sm-2 control-label'>" . __('<%= Inflector::humanize($field) %>') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('<%= $field %>', ['class' => 'form-control', 'id' => '<%= $field %>', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                        <%
                                        }
                                    }
                                }
                                if (!empty($associations['BelongsToMany'])) {
                                    foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
                        %>
                                    echo "
                                    <div class='form-group'>
                                        <label for='<%= $field %>' class='col-sm-2 control-label'>" . __('<%= Inflector::humanize($field) %>') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('<%= $assocData['property'] %>._ids', ['class' => 'form-control', 'id' => '<%= $field %>', 'label' => false, 'options' => $<%= $assocData['variable'] %>]);                
                                    echo " </div></div>";    
                                    
                        <%
                                    }
                                }
                        %>
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