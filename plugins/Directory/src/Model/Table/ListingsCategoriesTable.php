<?php
namespace Directory\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListingsCategories Model
 *
 * @property \Directory\Model\Table\ListingsTable&\Cake\ORM\Association\BelongsTo $Listings
 * @property \Directory\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \Directory\Model\Entity\ListingsCategory get($primaryKey, $options = [])
 * @method \Directory\Model\Entity\ListingsCategory newEntity($data = null, array $options = [])
 * @method \Directory\Model\Entity\ListingsCategory[] newEntities(array $data, array $options = [])
 * @method \Directory\Model\Entity\ListingsCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\ListingsCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\ListingsCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Directory\Model\Entity\ListingsCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \Directory\Model\Entity\ListingsCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListingsCategoriesTable extends Table
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

        $this->setTable('listings_categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Listings', [
            'foreignKey' => 'listing_id',
            'joinType' => 'INNER',
            'className' => 'Directory.Listings',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
            'className' => 'Directory.Categories',
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['listing_id'], 'Listings'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
