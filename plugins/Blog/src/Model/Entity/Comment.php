<?php
namespace Blog\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property string $id
 * @property int $article_id
 * @property string $comment
 * @property int $published
 * @property string $name
 * @property string $email
 * @property string $website
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \Blog\Model\Entity\Article $article
 */
class Comment extends Entity
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
