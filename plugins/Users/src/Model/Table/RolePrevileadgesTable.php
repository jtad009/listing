<?php
namespace Users\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RolePrevileadges Model
 *
 * @property \Users\Model\Table\PrevileadgesTable&\Cake\ORM\Association\BelongsTo $Previleadges
 * @property \Users\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \Users\Model\Entity\RolePrevileadge get($primaryKey, $options = [])
 * @method \Users\Model\Entity\RolePrevileadge newEntity($data = null, array $options = [])
 * @method \Users\Model\Entity\RolePrevileadge[] newEntities(array $data, array $options = [])
 * @method \Users\Model\Entity\RolePrevileadge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\RolePrevileadge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\RolePrevileadge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Users\Model\Entity\RolePrevileadge[] patchEntities($entities, array $data, array $options = [])
 * @method \Users\Model\Entity\RolePrevileadge findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RolePrevileadgesTable extends Table
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

        $this->setTable('role_previleadges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Previleadges', [
            'foreignKey' => 'previleadge_id',
            'joinType' => 'INNER',
            'className' => 'Users.Previleadges',
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
            'className' => 'Users.Roles',
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
        $rules->add($rules->existsIn(['previleadge_id'], 'Previleadges'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
