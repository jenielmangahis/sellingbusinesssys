<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slide Entity
 *
 * @property int $id
 * @property string $title
 * @property string $caption
 * @property string $link
 * @property string $image
 * @property int $sorting
 * @property int $is_publish
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Slide extends Entity
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
