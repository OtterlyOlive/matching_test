<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TagsTagOptions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tags
 * @property \Cake\ORM\Association\BelongsTo $TagOptions
 *
 * @method \App\Model\Entity\TagsTagOption get($primaryKey, $options = [])
 * @method \App\Model\Entity\TagsTagOption newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TagsTagOption[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TagsTagOption|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TagsTagOption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TagsTagOption[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TagsTagOption findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TagsTagOptionsTable extends Table
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

        $this->setTable('tags_tag_options');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TagOptions', [
            'foreignKey' => 'tag_option_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));
        $rules->add($rules->existsIn(['tag_option_id'], 'TagOptions'));

        return $rules;
    }
}
