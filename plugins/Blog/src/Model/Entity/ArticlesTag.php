<?php
namespace Blog\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticlesTag Entity
 *
 * @property int $id
 * @property string $article_id
 * @property int $tag_id
 * @property \Cake\I18n\Time $created
 *
 * @property \Blog\Model\Entity\Article $article
 * @property \Blog\Model\Entity\Tag $tag
 */
class ArticlesTag extends Entity
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
    public function _setCreated($created){
      
      return date('Y-m-d');  
    }
}
