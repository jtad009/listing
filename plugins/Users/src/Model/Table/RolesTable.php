<?php
namespace Users\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roles Model
 *
 * @property \Users\Model\Table\RolePrevileadgesTable&\Cake\ORM\Association\HasMany $RolePrevileadges
 * @property \Users\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \Users\Model\Entity\Role get($primaryKey, $options = [])
 * @method \Users\Model\Entity\Role newEntity($data = null, array $options = [])
 * @method \Users\Model\Entity\Role[] newEntities(array $data, array $options = [])
 * @method \Users\Model\Entity\Role|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\Role saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\Role patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Users\Model\Entity\Role[] patchEntities($entities, array $data, array $options = [])
 * @method \Users\Model\Entity\Role findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RolesTable extends Table
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

        $this->setTable('roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('RolePrevileadges', [
            'foreignKey' => 'role_id',
            'className' => 'Users.RolePrevileadges',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'role_id',
            'className' => 'Users.Users',
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
            ->scalar('role')
            ->maxLength('role', 200)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        return $validator;
    }
}
