<?php
namespace Blog\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Comments
 * @property \Cake\ORM\Association\HasMany $Media
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \Blog\Model\Entity\Article get($primaryKey, $options = [])
 * @method \Blog\Model\Entity\Article newEntity($data = null, array $options = [])
 * @method \Blog\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \Blog\Model\Entity\Article|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Blog\Model\Entity\Article[] patchEntities($entities, array $data, array $options = [])
 * @method \Blog\Model\Entity\Article findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\CounterCacheBehavior
 */
class ArticlesTable extends Table
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

        $this->table('articles');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', ['Categories' => ['article_count'], 'Users' => ['article_count']]);
        $this->addBehavior('Blog.Sluggable', [
            'implementedMethods' => [
                'superSlug' => 'slug',
            ]
        ]);

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'LEFT',
            'className' => 'Blog.Categories'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'LEFT',
            'className' => 'Blog.Users'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'article_id',
            'className' => 'Blog.Comments'
        ]);
        $this->hasMany('Media', [
            'foreignKey' => 'article_id',
            'className' => 'Blog.Media'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'article_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'articles_tags',
            'className' => 'Blog.Tags'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        

        $validator
            // ->requirePresence('cover_image', 'create')
            ->allowEmpty('cover_image');

        $validator
            ->integer('published')
            ->requirePresence('published', 'create')
            ->notEmpty('published');

        
      

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

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
    public function findTagged(Query $query, array $options) {
        return $this->find()->contain( ['Categories', 'Users'])
                        ->distinct(['Articles.id'])->matching('Categories')->matching('Users')
                        ->matching('Tags', function ($q) use ($options) {
                            if (empty($options['tags'])) {
                                return $q->where(['Tags.tag IS' => null]);
                            }
                            return $q->where(['Tags.tag IN' => $options['tags']]);
                        });
    }
     public function findCategory(Query $query, array $options) {
        return $this->find()->contain( ['Categories', 'Users'])
                        ->distinct(['Articles.id'])->matching('Tags')->matching('Users')
                        ->matching('Categories', function ($q) use ($options) {
                            if (empty($options['tags'])) {
                                return $q->where(['Categories.category IS' => null]);
                            }
                            return $q->where(['Categories.category IN' => $options['tags']]);
                        });
    }
}
