<?php
namespace Directory\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListingView Entity
 *
 * @property string $id
 * @property string $listing_id
 * @property int $views
 * @property string $ip
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Directory\Model\Entity\Listing $listing
 */
class ListingView extends Entity
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
        'listing_id' => true,
        'views' => true,
        'ip' => true,
        'created' => true,
        'modified' => true,
        'listing' => true,
    ];
}
