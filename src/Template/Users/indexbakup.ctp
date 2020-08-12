<?php use Cake\Utility\Inflector; ?>
<style>
.label{
    padding:10px;    
    display: block;
    
    font-size: 12px;
}
.thead-inverse th {
    background-color: #2A80B9;
    color: #fff;
    padding:13px !important;
}
th a{
    color:#ffffff;
}
div.box-body{
    padding: 0px;
}
.box-header.with-border {
    border-bottom: 1px solid #2A80B9;
}
.box-body, .box-header{
    overflow:auto;
}
.fa-sort{
    line-height: 19px;
}
</style>
<section class="content-header">
    <h1><?= __('Users') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Users') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box box-primary box-solid">   
                <div class="box-header with-border">  
                    <div class="user-block col-md-8" style="padding-left:0px;">
                        <?= $this->Form->create(null,[                
                          'url' => ['action' => 'index'],
                          'class' => 'form-inline',
                          'type' => 'GET'
                        ]) ?>                         
                        <div class="input-group input-group-sm">
                            <input class="form-control" name="query" type="text" placeholder="Enter query to search">
                            <span class="input-group-btn">
                                <?= $this->Form->button('<i class="fa fa-search"></i>',['name' => 'search', 'value' => 'search', 'class' => 'btn btn-info btn-flat', 'escape' => false]) ?>
                                <?= $this->Html->link(__('Reset'), ['action' => 'index'],['class' => 'btn btn-success btn-flat', 'escape' => false]) ?>                            
                                <?= $this->Html->link('<i class="fa fa-plus"></i> Add New', ['action' => 'add'],['class' => 'btn btn-success', 'escape' => false]) ?>
                            </span>
                        </div>                        
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="box-tools" style="top:9px;margin-left:3px;right:3px;"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div>
                </div>             
                <div class="box-body">                    
                    <table id="dt-users-list" class="table table-hover table-striped">
                        <thead class="thead-inverse">
                            <tr>
                                <th class="actions"></th>
                                <th><?= $this->Paginator->sort('id', __("Id") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('firstname', __("Firstname") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('lastname', __("Lastname") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('email', __("Email") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>                                
                                <th><?= $this->Paginator->sort('username', __("Username") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>                                
                                <th><?= $this->Paginator->sort('group_id', __("Group Name") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>                            
                                <th><?= $this->Paginator->sort('created', __("Created") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('modified', __("Modified") . "<i class='fa fa-sort pull-right'> </i>", array('escape' => false)) ?></th>                                                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="table-actions">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="drpdwn" data-toggle="dropdown" aria-expanded="true">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="drpdwn">
                                            <li role="presentation"><?= $this->Html->link('<i class="fa fa-eye"></i> View', ['action' => 'view', $user->id],['escape' => false]) ?></li>                                            
                                            <li role="presentation"><?= $this->Html->link('<i class="fa fa-pencil"></i> Edit', ['action' => 'edit', $user->id],['escape' => false]) ?></li>
                                            <li role="presentation"><?= $this->Html->link('<i class="fa fa-trash"></i> Delete', '#modal-'.$user->id,['data-toggle' => 'modal','escape' => false]) ?></li>
                                        </ul>
                                    </div>   
                                    <div id="modal-<?=$user->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Delete Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to delete selected entry?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'delete', $user->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>              
                                </td>
                                <td><?= $this->Number->format($user->id) ?></td>                               
                                <td><?= h($user->firstname) ?></td>
                                <td><?= h($user->lastname) ?></td>                                                           
                                <td><?= h($user->email) ?></td>                                                           
                                <td><?= h($user->username) ?></td>                                                           
                                <td><?= h($user->group->name) ?></td>                                                           
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>                                
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator" style="text-align:center;">
                        <ul class="pagination">
                        <?= $this->Paginator->prev('«') ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next('»') ?>
                        </ul>
                        <p class="hidden"><?= $this->Paginator->counter() ?></p>
                    </div>                     
                </div>
            </div>
        </section>
    </div>
</section>