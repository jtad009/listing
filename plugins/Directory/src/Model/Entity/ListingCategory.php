<?php
namespace Directory\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListingCategory Entity
 *
 * @property string $id
 * @property string $listing_id
 * @property string $category_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \Directory\Model\Entity\Listing $listing
 * @property \Directory\Model\Entity\Category $category
 */
class ListingCategory extends Entity
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
        'category_id' => true,
        'created' => true,
        'listing' => true,
        'category' => true,
    ];
}
