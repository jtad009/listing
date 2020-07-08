<?php

namespace Directory\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

/**
 * FindListing behavior
 */
class FindListingBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
/**
 * Search the listing table
 * @param Query $query
 * @param array $search_param
 * @return Query
 */
    public function findListing($query, array $search_param)
    {

        $query
        ->where(['business_name LIKE' => $search_param['param'] . '%'])
        ->orWhere(['description LIKE ' => $search_param['param'] . '%'])
            ->orWhere(['phone LIKE ' => $search_param['param'] . '%'])
            ->orWhere(['email LIKE' => $search_param['param'] . '%'])
            ->orWhere(['url LIKE' => $search_param['param'] . '%'])
            ->orWhere(['address' => $search_param['param']])
           ;
        // debug($query);
        return $query;
    }
}
