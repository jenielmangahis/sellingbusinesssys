<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyDetail Entity
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property string $email
 * @property string $address
 * @property string $inquiry_recipient
 * @property string $contact_number
 * @property string $fax
 * @property string $longtitude
 * @property string $latitude
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class CompanyDetail extends Entity
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
