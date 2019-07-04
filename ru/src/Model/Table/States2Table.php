<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * States2 Model
 *
 * @method \App\Model\Entity\States2 get($primaryKey, $options = [])
 * @method \App\Model\Entity\States2 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\States2[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\States2|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\States2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\States2[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\States2 findOrCreate($search, callable $callback = null, $options = [])
 */
class States2Table extends Table
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

        $this->setTable('states2');
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
            ->scalar('name_ru')
            ->maxLength('name_ru', 255)
            ->requirePresence('name_ru', 'create')
            ->notEmpty('name_ru');

        $validator
            ->scalar('name_kz')
            ->maxLength('name_kz', 255)
            ->requirePresence('name_kz', 'create')
            ->notEmpty('name_kz');

        $validator
            ->scalar('link')
            ->maxLength('link', 255)
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->scalar('icon_link')
            ->maxLength('icon_link', 255)
            ->requirePresence('icon_link', 'create')
            ->notEmpty('icon_link');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        return $validator;
    }
}
