<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdSlider3 Model
 *
 * @method \App\Model\Entity\AdSlider3 get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdSlider3 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdSlider3[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdSlider3|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdSlider3 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdSlider3[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdSlider3 findOrCreate($search, callable $callback = null, $options = [])
 */
class AdSlider3Table extends Table
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

        $this->setTable('ad_slider3');
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
            ->scalar('img')
            ->maxLength('img', 255)
            ->requirePresence('img', 'create')
            ->notEmpty('img');

        $validator
            ->scalar('link_ru')
            ->maxLength('link_ru', 255)
            ->requirePresence('link_ru', 'create')
            ->notEmpty('link_ru');

        $validator
            ->scalar('text_ru')
            ->requirePresence('text_ru', 'create')
            ->notEmpty('text_ru');


        $validator
            ->scalar('text_kz')
            ->requirePresence('text_kz', 'create')
            ->notEmpty('text_kz');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        return $validator;
    }
}
