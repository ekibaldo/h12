<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdFaq Model
 *
 * @method \App\Model\Entity\AdFaq get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdFaq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdFaq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdFaq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdFaq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdFaq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdFaq findOrCreate($search, callable $callback = null, $options = [])
 */
class AdFaqTable extends Table
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

        $this->setTable('ad_faq');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->date('date_post')
            ->requirePresence('date_post', 'create')
            ->notEmpty('date_post');

        $validator
            ->scalar('fio')
            ->maxLength('fio', 255)
            ->requirePresence('fio', 'create')
            ->notEmpty('fio');

        $validator
            ->scalar('q')
            ->requirePresence('q', 'create')
            ->notEmpty('q');

        $validator
            ->scalar('a')
            ->requirePresence('a', 'create')
            ->notEmpty('a');

        $validator
            ->boolean('status')
            ->allowEmpty('status');

        return $validator;
    }
}
