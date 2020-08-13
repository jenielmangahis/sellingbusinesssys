<section class="content-header">
    <h1>View User</h1>
</section>

<section class="content">
    <table class="table table-striped table-bordered table-hover">
        <tbody>
            <tr>
                <th width="140"><?= __('Firstname') ?></th>
                <td><?= h($user->firstname) ?></td>
            </tr>  
            <tr>
                <th width="140"><?= __('Lastname') ?></th>
                <td><?= h($user->lastname) ?></td>
            </tr>
            <tr>
                <th width="140"><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>  
            <tr>
                <th width="140"><?= __('Username') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>    
            <tr>
                <th><?= __('Group') ?></th>
                <td><?= h($user->group->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= date("Y-m-d H:i:s",strtotime($user->created)) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified') ?></th>
                <td><?= date("Y-m-d H:i:s",strtotime($user->modified)) ?></td>
            </tr> 
            <tr>
                <th></th>
                <td><br/><?= $this->Html->link('<i class="fa fa-angle-left"> </i> Back To list', ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?></td>
            </tr>                                       
        </tbody>
    </table>
</section>