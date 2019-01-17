<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sentence Model
 *
 * @method \App\Model\Entity\Sentence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sentence newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sentence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sentence|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sentence|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sentence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sentence[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sentence findOrCreate($search, callable $callback = null, $options = [])
 */
class SentenceTable extends Table
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

        $this->setTable('sentence');
        $this->setDisplayField('sentence_id');
        $this->setPrimaryKey('sentence_id');
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
            ->integer('sentence_id')
            ->allowEmpty('sentence_id', 'create');

        $validator
            ->scalar('jp')
            ->maxLength('jp', 255)
            ->allowEmpty('jp');

        $validator
            ->scalar('jp_kana')
            ->maxLength('jp_kana', 255)
            ->allowEmpty('jp_kana');

        $validator
            ->scalar('cn')
            ->maxLength('cn', 255)
            ->allowEmpty('cn');

        return $validator;
    }
}
