<?php
namespace Blog\View\Cell;

use Cake\View\Cell;

/**
 * Tags cell
 */
class TagsCell extends Cell
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
        
        
        $db = \Cake\Datasource\ConnectionManager::get('blog');
        
        $places_of_interest = $db->execute("SELECT distinct tag, tag_id FROM `articles_tags` inner join articles on article_id = articles.id inner join tags t ON t.id = tag_id")->fetchAll('assoc');
        
        
        $this->set('tags',$places_of_interest);
    }
    
}
