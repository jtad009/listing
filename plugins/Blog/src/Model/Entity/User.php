<?php
namespace Blog\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
    @property string $image
    @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property int $article_count
 * @property bool canWrite
 * @property \Cake\I18n\Time $created
 * @property string $bio
 *
 * @property \Blog\Model\Entity\Article[] $articles
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
        '*' => true,
        'id' => false
    ];
    
    protected $_hidden = [
        'password', 'api_key'
    ];
    public function _setPassword($password){
        $hasher =  new \Cake\Auth\DefaultPasswordHasher();
        return $hasher->hash($password);
    }
    public function _getFullname(){
        return $this->last_name.' '.$this->first_name;
    }
}
