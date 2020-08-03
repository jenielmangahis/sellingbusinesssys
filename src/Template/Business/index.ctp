
<section class="content-header">
    <h1><?= __('Business') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Business') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Busines'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="actions"><?= __('Actions') ?></th>
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('user_id') ?></th>
                                                <th><?= $this->Paginator->sort('taking') ?></th>
                                                <th><?= $this->Paginator->sort('weekly_turnover') ?></th>
                                                <th><?= $this->Paginator->sort('average_weekly_takings') ?></th>
                                                <th><?= $this->Paginator->sort('annual_return') ?></th>
                                                <th><?= $this->Paginator->sort('cover_photo') ?></th>
                                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($business as $busines): ?>
                                                        <tr>
                                <td class="table-actions">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="drpdwn" data-toggle="dropdown" aria-expanded="true">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="drpdwn">
                                            <li role="presentation"><?= $this->Html->link('<i class="fa fa-eye"></i> View', ['action' => 'view', $busines->id],['escape' => false]) ?></li>
                                            <li role="presentation"><?= $this->Html->link('<i class="fa fa-pencil"></i> Edit', ['action' => 'edit', $busines->id],['escape' => false]) ?></li>
                                            <li role="presentation"><?= $this->Html->link('<i class="fa fa-trash"></i> Delete', '#modal-'.$busines->id,['data-toggle' => 'modal','escape' => false]) ?></li>
                                        </ul>
                                    </div>   
                                    <div id="modal-<?=$busines->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $busines->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>                       
                                </td>
                                                <td><?= $this->Number->format($busines->id) ?></td>
                                                <td <?php if( $isKey == 1 ? 'class="tbl-field-id"' : '' ) ?>><?= $busines->has('user') ? $this->Html->link($busines->user->full_name, ['controller' => 'Users', 'action' => 'view', $busines->user->id]) : '' ?></td>
                                                <td><?= h($busines->taking) ?></td>
                                                <td><?= h($busines->weekly_turnover) ?></td>
                                                <td><?= h($busines->average_weekly_takings) ?></td>
                                                <td><?= h($busines->annual_return) ?></td>
                                                <td><?= h($busines->cover_photo) ?></td>
                  
                            </tr>
                            <?php ;endforeach; ?>
                        </tbody>
                    </table>
                    </div>
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