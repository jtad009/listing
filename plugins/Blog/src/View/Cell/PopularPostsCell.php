<?php
namespace WeddingBlog\View\Cell;

use Cake\View\Cell;

/**
 * PopularPosts cell
 */
class PopularPostsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Lifestyles');
        $total_posts = $this->Lifestyles->find()->count();
        $recent_posts = $this->Lifestyles->find()->select(['title','created','slug'])
                                                ->where(['view_count >'=>'0'])
                                                ->order(['view_count' => 'DESC'])
                                                ->limit(5)
                                                ->toArray();
        $this->set(['total_posts' => $total_posts, 'popular_posts' => $recent_posts]);
    }
}
