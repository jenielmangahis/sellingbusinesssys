
<section class="content-header">
    <h1><?= __('View Sales Authority') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($salesAuthority->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($salesAuthority->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($salesAuthority->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($salesAuthority->modified) ?></td>
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
    <div class="related">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Related Business') ?></h3>
            </div>
        </div>        
        <?php if (!empty($salesAuthority->business)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Taking') ?></th>
                <th><?= __('Weekly Turnover') ?></th>
                <th><?= __('Average Weekly Takings') ?></th>
                <th><?= __('Annual Return') ?></th>
                <th><?= __('Cover Photo') ?></th>
                <th><?= __('Business Listing Title') ?></th>
                <th><?= __('Business Description') ?></th>
                <th><?= __('State') ?></th>
                <th><?= __('Postal Code') ?></th>
                <th><?= __('Primary Agent') ?></th>
                <th><?= __('Business Type Id') ?></th>
                <th><?= __('Office') ?></th>
                <th><?= __('Sales Authority Id') ?></th>
                <th><?= __('Authority Start Date') ?></th>
                <th><?= __('Authority End Date') ?></th>
                <th><?= __('Business Category Id') ?></th>
                <th><?= __('Feature Listing') ?></th>
                <th><?= __('Estate Building') ?></th>
                <th><?= __('Unit Prefix') ?></th>
                <th><?= __('Unit Number') ?></th>
                <th><?= __('Street Lot Number') ?></th>
                <th><?= __('Street Name') ?></th>
                <th><?= __('Listing Suburb') ?></th>
                <th><?= __('Advertising Suburb') ?></th>
                <th><?= __('Google Maps Address') ?></th>
                <th><?= __('Marketing Sales Price') ?></th>
                <th><?= __('Marketing Price Text') ?></th>
                <th><?= __('Annual Lease Price') ?></th>
                <th><?= __('Actual Sales Price') ?></th>
                <th><?= __('Price Comment') ?></th>
                <th><?= __('Lease Terms') ?></th>
                <th><?= __('Parking') ?></th>
                <th><?= __('Lease Comments') ?></th>
                <th><?= __('Other Feature') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($salesAuthority->business as $business): ?>
            <tr>
                <td><?= h($business->id) ?></td>
                <td><?= h($business->user_id) ?></td>
                <td><?= h($business->taking) ?></td>
                <td><?= h($business->weekly_turnover) ?></td>
                <td><?= h($business->average_weekly_takings) ?></td>
                <td><?= h($business->annual_return) ?></td>
                <td><?= h($business->cover_photo) ?></td>
                <td><?= h($business->business_listing_title) ?></td>
                <td><?= h($business->business_description) ?></td>
                <td><?= h($business->state) ?></td>
                <td><?= h($business->postal_code) ?></td>
                <td><?= h($business->primary_agent) ?></td>
                <td><?= h($business->business_type_id) ?></td>
                <td><?= h($business->office) ?></td>
                <td><?= h($business->sales_authority_id) ?></td>
                <td><?= h($business->authority_start_date) ?></td>
                <td><?= h($business->authority_end_date) ?></td>
                <td><?= h($business->business_category_id) ?></td>
                <td><?= h($business->feature_listing) ?></td>
                <td><?= h($business->estate_building) ?></td>
                <td><?= h($business->unit_prefix) ?></td>
                <td><?= h($business->unit_number) ?></td>
                <td><?= h($business->street_lot_number) ?></td>
                <td><?= h($business->street_name) ?></td>
                <td><?= h($business->listing_suburb) ?></td>
                <td><?= h($business->advertising_suburb) ?></td>
                <td><?= h($business->google_maps_address) ?></td>
                <td><?= h($business->marketing_sales_price) ?></td>
                <td><?= h($business->marketing_price_text) ?></td>
                <td><?= h($business->annual_lease_price) ?></td>
                <td><?= h($business->actual_sales_price) ?></td>
                <td><?= h($business->price_comment) ?></td>
                <td><?= h($business->lease_terms) ?></td>
                <td><?= h($business->parking) ?></td>
                <td><?= h($business->lease_comments) ?></td>
                <td><?= h($business->other_feature) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Business', 'action' => 'view', $business->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Business', 'action' => 'edit', $business->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'Business', 'action' => 'delete', $business->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $business->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
