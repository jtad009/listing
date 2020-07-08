<?php
namespace Directory\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListingViews Model
 *
 * @property \Directory\Model\Table\ListingsTable&\Cake\ORM\Association\BelongsTo $Listings
 *
 * @method \Directory\Model\Entity\ListingView get($primaryKey, $options = [])
 * @method \Directory\Model\Entity\ListingView newEntity($data = null, array $options = [])
 * @method \Directory\Model\Entity\ListingView[] newEntities(array $data, array $options = [])
 * @method \Directory\Model\Entity\ListingView|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\ListingView saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\ListingView patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Directory\Model\Entity\ListingView[] patchEntities($entities, array $data, array $options = [])
 * @method \Directory\Model\Entity\ListingView findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListingViewsTable extends Table
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

        $this->setTable('listing_views');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Listings', [
            'foreignKey' => 'listing_id',
            'joinType' => 'INNER',
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
            ->integer('views')
            ->requirePresence('views', 'create')
            ->notEmptyString('views');

        $validator
            ->scalar('ip')
            ->maxLength('ip', 200)
            ->requirePresence('ip', 'create')
            ->notEmptyString('ip');

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

        return $rules;
    }
}
