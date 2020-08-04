<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Busines Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $taking
 * @property string $weekly_turnover
 * @property string $average_weekly_takings
 * @property string $annual_return
 * @property string $cover_photo
 * @property string $business_listing_title
 * @property string $business_description
 * @property string $state
 * @property string $postal_code
 * @property string $primary_agent
 * @property int $business_type_id
 * @property string $office
 * @property int $sales_authority_id
 * @property \Cake\I18n\Time $authority_start_date
 * @property \Cake\I18n\Time $authority_end_date
 * @property int $business_category_id
 * @property string $feature_listing
 * @property string $estate_building
 * @property string $unit_prefix
 * @property string $unit_number
 * @property string $street_lot_number
 * @property string $street_name
 * @property string $listing_suburb
 * @property string $advertising_suburb
 * @property string $google_maps_address
 * @property string $marketing_sales_price
 * @property string $marketing_price_text
 * @property string $annual_lease_price
 * @property string $actual_sales_price
 * @property string $price_comment
 * @property string $lease_terms
 * @property string $parking
 * @property string $lease_comments
 * @property string $other_feature
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\BusinessType $business_type
 * @property \App\Model\Entity\SalesAuthority $sales_authority
 */
class Busines extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
