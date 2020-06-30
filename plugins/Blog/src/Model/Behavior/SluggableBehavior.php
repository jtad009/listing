<?php
namespace Blog\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

/**
 * Sluggable behavior
 */
class SluggableBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'field' => 'title',
        'slug' => 'slug',
        'replacement' => '-',
    ];
    
     public function slug(\Cake\ORM\Entity $entity) {
        $config = $this->config();
        $value = $entity->get($config['field']);
        $entity->set($config['slug'], \Cake\Utility\Inflector::slug($value, $config['replacement']));
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\Datasource\EntityInterface $entity) {
        $this->slug($entity);
    }
    
}
