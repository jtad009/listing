<?php
namespace Directory\Model\Entity;

use Cake\ORM\Entity;

/**
 * Listing Entity
 *
 * @property string $id
 * @property string $business_name
 * @property string $description
 * @property string $url
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $state_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $published
 * @property bool $approved
 *
 * @property \Directory\Model\Entity\State $state
 * @property \Directory\Model\Entity\ListingImage[] $listing_images
 * @property \Directory\Model\Entity\ListingReview[] $listing_reviews
 * @property \Directory\Model\Entity\ListingView[] $listing_views
 * @property \Directory\Model\Entity\Category[] $categories
 */
class Listing extends Entity
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
        'business_name' => true,
        'description' => true,
        'url' => true,
        'email' => true,
        'phone' => true,
        'address' => true,
        'state_id' => true,
        'created' => true,
        'modified' => true,
        'published' => true,
        'approved' => true,
        'state' => true,
        'listing_images' => true,
        'listing_reviews' => true,
        'listing_views' => true,
        'categories' => true,
    ];
    public function _getUrl(){
        return 'http://google.com';
    }
}
