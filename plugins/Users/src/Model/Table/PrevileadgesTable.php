<?php
namespace Users\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Previleadges Model
 *
 * @property \Users\Model\Table\RolePrevileadgesTable&\Cake\ORM\Association\HasMany $RolePrevileadges
 *
 * @method \Users\Model\Entity\Previleadge get($primaryKey, $options = [])
 * @method \Users\Model\Entity\Previleadge newEntity($data = null, array $options = [])
 * @method \Users\Model\Entity\Previleadge[] newEntities(array $data, array $options = [])
 * @method \Users\Model\Entity\Previleadge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\Previleadge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\Previleadge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Users\Model\Entity\Previleadge[] patchEntities($entities, array $data, array $options = [])
 * @method \Users\Model\Entity\Previleadge findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PrevileadgesTable extends Table
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

        $this->setTable('previleadges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('RolePrevileadges', [
            'foreignKey' => 'previleadge_id',
            'className' => 'Users.RolePrevileadges',
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
            ->scalar('previleadges')
            ->maxLength('previleadges', 200)
            ->requirePresence('previleadges', 'create')
            ->notEmptyString('previleadges');

        return $validator;
    }
}
