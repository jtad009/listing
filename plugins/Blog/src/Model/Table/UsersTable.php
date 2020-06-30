<?php
namespace Blog\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Articles
 *
 * @method \Blog\Model\Entity\User get($primaryKey, $options = [])
 * @method \Blog\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \Blog\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \Blog\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Blog\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \Blog\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Articles', [
            'foreignKey' => 'user_id',
            'className' => 'Blog.Articles'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        // $validator
        //     ->requirePresence('last_name', 'create')
        //     ->notEmpty('last_name');

        // $validator
        //     ->integer('article_count')
        //     ->requirePresence('article_count', 'create')
        //     ->notEmpty('article_count');

        // $validator
        //     ->requirePresence('bio', 'create')
        //     ->notEmpty('bio');

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
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options){
        $query->select(['canWrite','username','first_name','last_name','bio', 'image','email','article_count','created','password','user_code'=>'id']);
       $query->where(['username'=>env('PHP_AUTH_USER')]);
       
         return $query;
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
