<?php
namespace Directory\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property string $id
 * @property string $category
 * @property int $listing_count
 * @property bool $unpublished
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Directory\Model\Entity\Listing[] $listings
 */
class Category extends Entity
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
        'category' => true,
        'listing_count' => true,
        'unpublished' => true,
        'created' => true,
        'modified' => true,
        'listings' => true,
    ];
}
