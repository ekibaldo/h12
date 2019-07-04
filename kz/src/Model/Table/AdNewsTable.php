<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdNews Model
 *
 * @method \App\Model\Entity\AdNews get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdNews newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdNews[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdNews|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdNews patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdNews[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdNews findOrCreate($search, callable $callback = null, $options = [])
 */
class AdNewsTable extends Table
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

        $this->setTable('ad_news');
        $this->setDisplayField('title');
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('title_ru')
            ->maxLength('title_ru', 255)
            ->requirePresence('title_ru', 'create')
            ->notEmpty('title_ru');

        $validator
            ->scalar('text_ru')
            ->requirePresence('text_ru', 'create')
            ->notEmpty('text_ru');

        $validator
            ->scalar('title_kz')
            ->maxLength('title_kz', 255)
            ->requirePresence('title_kz', 'create')
            ->notEmpty('title_kz');

        $validator
            ->scalar('text_kz')
            ->requirePresence('text_kz', 'create')
            ->notEmpty('text_kz');

        $validator
            ->scalar('img')
            ->maxLength('img', 255)
            ->requirePresence('img', 'create')
            ->notEmpty('img');

        return $validator;
    }
}
