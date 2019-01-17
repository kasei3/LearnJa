<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SentenceCollect Model
 *
 * @property \App\Model\Table\SentencesTable|\Cake\ORM\Association\BelongsTo $Sentences
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\SentenceCollect get($primaryKey, $options = [])
 * @method \App\Model\Entity\SentenceCollect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SentenceCollect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SentenceCollect|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SentenceCollect|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SentenceCollect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SentenceCollect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SentenceCollect findOrCreate($search, callable $callback = null, $options = [])
 */
class SentenceCollectTable extends Table
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

        $this->setTable('sentence_collect');
        $this->setDisplayField('sentence_collect_id');
        $this->setPrimaryKey('sentence_collect_id');

        $this->belongsTo('Sentences', [
            'foreignKey' => 'sentence_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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
            ->allowEmpty('sentence_collect_id', 'create');

        $validator
            ->date('created_date')
            ->allowEmpty('created_date');

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
        $rules->add($rules->existsIn(['sentence_id'], 'Sentences'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
