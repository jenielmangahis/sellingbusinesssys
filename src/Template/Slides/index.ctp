<?php use Cake\Utility\Inflector; ?>
<style>
.label{
    padding:10px;    
    display: block;
    width:90px;
}
.thead-inverse th {
    background-color: #2A80B9;
    color: #fff;
    padding:13px !important;
}
th a{
    color:#ffffff;
}

.box-header.with-border {
    border-bottom: 1px solid #2A80B9;
}
.small-image{
    width: 100%;
    height: 200px;
}
.label{
    padding:10px;    
    display: block;
    width:100%;
    border-radius: 0px;
}
.header-label{
    padding:10px;
    font-size: 12px;
    background-color: #3C8DBC;
    color:#ffffff;
    margin-bottom: 0px;
}
</style>
<section class="content-header">
    <h1><?= __('Slides') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Slides') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box box-primary box-solid">   
                <div class="box-header with-border">  
                    <h3 style="margin:0px;font-size:16px;"><?= __('Drag and drop to sort') ?></h3>
                    <div class="box-tools" style="top:9px;">                         
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Add New', ['action' => 'add'],['class' => 'btn btn-box-tool', 'escape' => false]) ?>                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>                        
                    </div>         
                </div>  
                <br />           
                <div class="box-body" style="min-height:600px;"> 
                <input type="hidden" id="target-url" value="slides/jsonUpdateSort">
                <div class="sortable-div">                                                  
                    <?php $item_counter = 1; $is_with_end_tag = false; foreach( $slides as $s ){ ?>
                        <?php 
                            if( $item_counter == 1 ){
                                $is_with_end_tag = false;
                                //echo "<div class='row'>";
                            } 
                        ?>                        
                        <div class="col-md-3" id="view_<?php echo $s->id; ?>">
                            <div class="box box-custom box-default box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title" style="font-size:14px;"><?php echo $s->title; ?></h3>

                                  <div class="box-tools pull-right">   
                                        <a href="<?php echo $s->image; ?>" title="View" data-fancybox data-caption="<?php echo $s->title; ?>" class="btn btn-box-tool"><i class="fa fa-image"></i></a>                                 
                                    <?php                                         
                                        echo $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $s->id],['title' => 'Edit', 'class' => 'btn btn-box-tool', 'escape' => false]);
                                        if( $s->is_publish == 1 ){
                                            echo $this->Html->link('<i class="fa fa-close"></i>', '#modal-unpublish-'.$s->id,['title' => 'Unpublish', 'class' => 'btn btn-box-tool', 'data-toggle' => 'modal','escape' => false]);
                                        }else{
                                            echo $this->Html->link('<i class="fa fa-check"></i>', '#modal-publish-'.$s->id,['title' => 'Publish', 'class' => 'btn btn-box-tool','data-toggle' => 'modal','escape' => false]);
                                        }
                                        echo $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$s->id,['title' => 'Delete', 'class' => 'btn btn-box-tool', 'data-toggle' => 'modal','escape' => false]);
                                    ?>  
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                  </div>
                                  <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">                                    
                                    <img src="<?php echo $s->image; ?>" class="small-image" />   
                                    <?php 
                                        if( $s->is_publish == 1 ){
                                            echo "<span class=\"label label-success\">Published</span>";
                                        }else{
                                            echo "<span class=\"label label-danger\">Unpublished</span>";
                                        }
                                    ?>      
                                    <div id="modal-<?=$s->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $s->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>        

                                    <div id="modal-publish-<?=$s->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to publish selected slide?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'publish', $s->id],
                                                        ['class' => 'btn btn-info', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>

                                    <div id="modal-unpublish-<?=$s->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to unpublish selected slide?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'unpublish', $s->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>                                                                     
                                    
                                </div>
                            <!-- /.box-body -->
                            </div>                  
                        </div>                        
                        <?php
                            $item_counter++; 
                            if( $item_counter == 5 ){
                                $item_counter = 1;
                                $is_with_end_tag = true;
                                //echo "</div>";
                            }
                        ?>
                    <?php } ?>    

                    <?php 
                        if( !$is_with_end_tag ){ 
                            //echo "</div>";
                        }
                    ?>      
                </div>                   
                </div>
            </div>
        </section>
    </div>
</section>