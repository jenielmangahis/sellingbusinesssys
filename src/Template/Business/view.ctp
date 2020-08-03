
<section class="content-header">
    <h1><?= __('View Busines') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $busines->has('user') ? $this->Html->link($busines->user->full_name, ['controller' => 'Users', 'action' => 'view', $busines->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Taking') ?></th>
            <td><?= h($busines->taking) ?></td>
        </tr>
        <tr>
            <th><?= __('Weekly Turnover') ?></th>
            <td><?= h($busines->weekly_turnover) ?></td>
        </tr>
        <tr>
            <th><?= __('Average Weekly Takings') ?></th>
            <td><?= h($busines->average_weekly_takings) ?></td>
        </tr>
        <tr>
            <th><?= __('Annual Return') ?></th>
            <td><?= h($busines->annual_return) ?></td>
        </tr>
        <tr>
            <th><?= __('Cover Photo') ?></th>
            <td><?= h($busines->cover_photo) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Listing Title') ?></th>
            <td><?= h($busines->business_listing_title) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($busines->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Postal Code') ?></th>
            <td><?= h($busines->postal_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Primary Agent') ?></th>
            <td><?= h($busines->primary_agent) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Type') ?></th>
            <td><?= $busines->has('business_type') ? $this->Html->link($busines->business_type->name, ['controller' => 'BusinessTypes', 'action' => 'view', $busines->business_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Office') ?></th>
            <td><?= h($busines->office) ?></td>
        </tr>
        <tr>
            <th><?= __('Sales Authority') ?></th>
            <td><?= $busines->has('sales_authority') ? $this->Html->link($busines->sales_authority->name, ['controller' => 'SalesAuthorities', 'action' => 'view', $busines->sales_authority->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Feature Listing') ?></th>
            <td><?= h($busines->feature_listing) ?></td>
        </tr>
        <tr>
            <th><?= __('Estate Building') ?></th>
            <td><?= h($busines->estate_building) ?></td>
        </tr>
        <tr>
            <th><?= __('Unit Prefix') ?></th>
            <td><?= h($busines->unit_prefix) ?></td>
        </tr>
        <tr>
            <th><?= __('Unit Number') ?></th>
            <td><?= h($busines->unit_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Street Lot Number') ?></th>
            <td><?= h($busines->street_lot_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Street Name') ?></th>
            <td><?= h($busines->street_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Listing Suburb') ?></th>
            <td><?= h($busines->listing_suburb) ?></td>
        </tr>
        <tr>
            <th><?= __('Advertising Suburb') ?></th>
            <td><?= h($busines->advertising_suburb) ?></td>
        </tr>
        <tr>
            <th><?= __('Marketing Sales Price') ?></th>
            <td><?= h($busines->marketing_sales_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Marketing Price Text') ?></th>
            <td><?= h($busines->marketing_price_text) ?></td>
        </tr>
        <tr>
            <th><?= __('Annual Lease Price') ?></th>
            <td><?= h($busines->annual_lease_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Actual Sales Price') ?></th>
            <td><?= h($busines->actual_sales_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Lease Terms') ?></th>
            <td><?= h($busines->lease_terms) ?></td>
        </tr>
        <tr>
            <th><?= __('Parking') ?></th>
            <td><?= h($busines->parking) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($busines->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Category Id') ?></th>
            <td><?= $this->Number->format($busines->business_category_id) ?></td>
        </tr>
    <tr>
        <th><?= __('Business Description') ?></th>
        <td><?= $this->Text->autoParagraph(h($busines->business_description)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Google Maps Address') ?></th>
        <td><?= $this->Text->autoParagraph(h($busines->google_maps_address)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Price Comment') ?></th>
        <td><?= $this->Text->autoParagraph(h($busines->price_comment)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Lease Comments') ?></th>
        <td><?= $this->Text->autoParagraph(h($busines->lease_comments)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Other Feature') ?></th>
        <td><?= $this->Text->autoParagraph(h($busines->other_feature)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Authority Start Date') ?></th>
            <td><?= h($busines->authority_start_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Authority End Date') ?></th>
            <td><?= h($busines->authority_end_date) ?></td>
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
