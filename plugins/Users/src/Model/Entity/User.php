<?php
namespace Users\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenTime $created
 * @property string $password
 * @property string $image
 * @property string $email
 * @property string $role_id
 *
 * @property \Users\Model\Entity\Article[] $articles
 */
class User extends Entity
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
        'username' => true,
        'first_name' => true,
        'last_name' => true,
        'created' => true,
        'password' => true,
        'image' => true,
        'email' => true,
        'role_id' => true,
        'articles' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
    public function _getFullname(){
        return $this->first_name . ' '. $this->last_name;
    }
}
