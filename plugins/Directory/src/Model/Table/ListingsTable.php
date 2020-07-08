<?php
namespace Directory\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listings Model
 *
 * @property \Directory\Model\Table\StatesTable&\Cake\ORM\Association\BelongsTo $States
 * @property \Directory\Model\Table\ListingImagesTable&\Cake\ORM\Association\HasMany $ListingImages
 * @property \Directory\Model\Table\ListingReviewsTable&\Cake\ORM\Association\HasMany $ListingReviews
 * @property \Directory\Model\Table\ListingViewsTable&\Cake\ORM\Association\HasMany $ListingViews
 *
 * @method \Directory\Model\Entity\Listing get($primaryKey, $options = [])
 * @method \Directory\Model\Entity\Listing newEntity($data = null, array $options = [])
 * @method \Directory\Model\Entity\Listing[] newEntities(array $data, array $options = [])
 * @method \Directory\Model\Entity\Listing|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\Listing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Directory\Model\Entity\Listing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Directory\Model\Entity\Listing[] patchEntities($entities, array $data, array $options = [])
 * @method \Directory\Model\Entity\Listing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListingsTable extends Table
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

        $this->setTable('listings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER',
            'className' => 'Directory.States',
        ]);
        $this->hasMany('ListingImages', [
            'foreignKey' => 'listing_id',
            'className' => 'Directory.ListingImages',
        ]);
        $this->hasMany('ListingReviews', [
            'foreignKey' => 'listing_id',
            'className' => 'Directory.ListingReviews',
        ]);
        $this->hasMany('ListingViews', [
            'foreignKey' => 'listing_id',
            'className' => 'Directory.ListingViews',
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
            ->scalar('business_name')
            ->maxLength('business_name', 200)
            ->requirePresence('business_name', 'create')
            ->notEmptyString('business_name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('url')
            ->maxLength('url', 200)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['state_id'], 'States'));

        return $rules;
    }
}
