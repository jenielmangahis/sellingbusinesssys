
<section class="content-header">
    <h1><?= __('View Company Detail') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($companyDetail->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($companyDetail->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Inquiry Recipient') ?></th>
            <td><?= h($companyDetail->inquiry_recipient) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Number') ?></th>
            <td><?= h($companyDetail->contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Fax') ?></th>
            <td><?= h($companyDetail->fax) ?></td>
        </tr>
        <tr>
            <th><?= __('Longtitude') ?></th>
            <td><?= h($companyDetail->longtitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitude') ?></th>
            <td><?= h($companyDetail->latitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($companyDetail->id) ?></td>
        </tr>
    <tr>
        <th><?= __('Logo') ?></th>
        <td><?= $this->Text->autoParagraph(h($companyDetail->logo)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Address') ?></th>
        <td><?= $this->Text->autoParagraph(h($companyDetail->address)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($companyDetail->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($companyDetail->modified) ?></td>
        </tr>
    </tbody>
    </table>

    <div class="form-group" style="margin-top: 80px;">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="action-fixed-bottom">        
        <?= $this->Html->link('<i class="fa fa-angle-left"> </i> Back To list', ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
        </div>
    </div>
    </div>
</section>
