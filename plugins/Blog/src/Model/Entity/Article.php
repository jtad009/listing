<?php

namespace Blog\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property string $id
 * @property int $category_id
 * @property string $title
 * @property string $slug
 * @property string $article
 * @property string $cover_image
 * @property bool $published
 * @property int $comment_count
 * @property int $view_count
 * @property int $user_id
 * @property string readTime
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \Blog\Model\Entity\Category $category
 * @property \Blog\Model\Entity\User $user
 * @property \Blog\Model\Entity\Comment[] $comments
 * @property \Blog\Model\Entity\Media[] $media
 * @property \Blog\Model\Entity\Tag[] $tags
 */
class Article extends Entity
{
    protected $_virtual = ['readTime', 'ExtractExcerpt'];
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
    public function _getCover_Image(){
        return '/img/blog/big-blog.svg';
    }
    /**
     *Calculate the time it will take to read this article
     */
    public function _getReadTime()
    {
        $a = preg_replace("/<img[^>]+\>/i", " ", $this->article);
        $articleWordCount = str_word_count($a);
        $mins = ceil($articleWordCount / 200);
        return $mins == 1 ?   $mins . ' Min Read' :  $mins . ' Mins Read';
    }
    /**
     * Get a short exceprt from the article
     * @return string 
     * */
    public function _getExtractExcerpt()
    {
        return $this->genExcerpt($this->article);
    }
    /**
     * Generate excerpt from article 
     * @param string $article
     * @return string
     */
    private function genExcerpt($article)
    {
        $a = preg_replace("/<img[^>]+\>/i", " ", $article);
        $word = $a;
        $start = 0;
        $end = 0;
        if ($start == 0) {
            $start = strpos($word, '<p>');
            $end = strpos($word, '</p>', $start);
            $excerpt_p = substr($word, $start, $end - $start + 1);
            if (stripos($excerpt_p, '<img') !== FALSE) {
                $this->genExcerpt($word, $end + 4);
            }
        } else {
            $end = strpos($word, '</p>', $start);
            $excerpt_p = substr($word, $start, $end - $start + 1);
        }
        return  \Cake\Utility\Text::truncate(
            trim(html_entity_decode(strip_tags($excerpt_p))),
            80,
            [
                'ellipsis' => '...',
                'exact' => false
            ]
        );
    }
}
