<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Icons Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Articles
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Icon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Icon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Icon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Icon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Icon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Icon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Icon findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IconsTable extends Table
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

        $this->setTable('icons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Articles', [
            'foreignKey' => 'icon_id',
            'targetForeignKey' => 'article_id',
            'joinTable' => 'articles_icons'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'icon_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'icons_tags'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('icon', 'create')
            ->notEmpty('icon');

        return $validator;
    }
}
