
<section class="content-header">
    <h1><?= __('View Slide') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($slide->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($slide->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($slide->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($slide->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sorting') ?></th>
            <td><?= $this->Number->format($slide->sorting) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Publish') ?></th>
            <td><?= $this->Number->format($slide->is_publish) ?></td>
        </tr>
    <tr>
        <th><?= __('Caption') ?></th>
        <td><?= $this->Text->autoParagraph(h($slide->caption)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($slide->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($slide->modified) ?></td>
        </tr>
        <tr>
            <th></th>
            <td><br/><?= $this->Html->link('<i class="fa fa-angle-left"> </i> Back To list', ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?></td>
        </tr>
    </tbody>
    </table>
</section>
