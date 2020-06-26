<?php
namespace WeddingBlog\View\Cell;

use Cake\View\Cell;

/**
 * RecentPosts cell
 */
class RecentPostsCell extends Cell
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
                                                ->order(['created' => 'DESC'])
                                                ->limit(5)
                                                ->toArray();
        $this->set(['total_posts' => $total_posts, 'recent_posts' => $recent_posts]);
    }
}
