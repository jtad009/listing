<?php
namespace Blog\Model\Entity;

use Cake\ORM\Entity;

/**
 * Distributor Entity
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $seller_type
 * @property string $business_name
 * @property string $business_location_city
 * @property string $business_location_state
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 */
class Distributor extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone' => true,
        'seller_type' => true,
        'business_name' => true,
        'business_location_city' => true,
        'business_location_state' => true,
        'created' => true,
        'modified' => true,
    ];
}
