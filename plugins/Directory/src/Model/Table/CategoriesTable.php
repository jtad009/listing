<?php
namespace Directory\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 *
 * @property \Directory\Model\Table\ListingsTable&\Cake\ORM\Association\BelongsToMany $Listings
 *
 * @method \Directory\Model\Entity\Category get($primaryKey, $options = [])
 * @method \Directory\Model\Entity\Category newEntity($data = null, array $options = [])
 * @method \Directory\Model\Entity\Category[] newEntities(array $data, array $options = [])
 * @method \Directory\Model\Entity\Category|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\Category saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\Category patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Directory\Model\Entity\Category[] patchEntities($entities, array $data, array $options = [])
 * @method \Directory\Model\Entity\Category findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Listings', [
            'foreignKey' => 'category_id',
            'targetForeignKey' => 'listing_id',
            'joinTable' => 'listings_categories',
            'className' => 'Directory.Listings',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('category')
            ->maxLength('category', 200)
            ->requirePresence('category', 'create')
            ->notEmptyString('category');

        $validator
            ->integer('listing_count')
            ->requirePresence('listing_count', 'create')
            ->notEmptyString('listing_count');

        $validator
            ->boolean('unpublished')
            ->notEmptyString('unpublished');

        return $validator;
    }
}
