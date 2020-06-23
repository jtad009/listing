<?php
namespace Blog\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Distributors Model
 *
 * @method \Blog\Model\Entity\Distributor get($primaryKey, $options = [])
 * @method \Blog\Model\Entity\Distributor newEntity($data = null, array $options = [])
 * @method \Blog\Model\Entity\Distributor[] newEntities(array $data, array $options = [])
 * @method \Blog\Model\Entity\Distributor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\Distributor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\Distributor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Blog\Model\Entity\Distributor[] patchEntities($entities, array $data, array $options = [])
 * @method \Blog\Model\Entity\Distributor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DistributorsTable extends Table
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

        $this->setTable('distributors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('first_name')
            ->maxLength('first_name', 200)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 200)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

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
            ->scalar('seller_type')
            ->maxLength('seller_type', 200)
            ->requirePresence('seller_type', 'create')
            ->notEmptyString('seller_type');

        $validator
            ->scalar('business_name')
            ->maxLength('business_name', 200)
            ->requirePresence('business_name', 'create')
            ->notEmptyString('business_name');

        $validator
            ->scalar('business_location_city')
            ->maxLength('business_location_city', 200)
            ->requirePresence('business_location_city', 'create')
            ->notEmptyString('business_location_city');

        $validator
            ->scalar('business_location_state')
            ->maxLength('business_location_state', 200)
            ->requirePresence('business_location_state', 'create')
            ->notEmptyString('business_location_state');

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

        return $rules;
    }

    /**
     * Returns the database connection name to use by default.
     *
     * @return string
     */
    public static function defaultConnectionName()
    {
        return 'blog';
    }
}
