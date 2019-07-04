<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 *
 * @property \App\Model\Table\PagesTable|\Cake\ORM\Association\HasMany $Pages
 *
 * @method \App\Model\Entity\Category get($primaryKey, $options = [])
 * @method \App\Model\Entity\Category newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Category[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Category|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Category patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Category[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Category findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriesTable extends Table
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

        $this->setTable('categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Pages', [
            'foreignKey' => 'category_id'
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
            ->scalar('title_ru')
            ->maxLength('title_ru', 255)
            ->requirePresence('title_ru', 'create')
            ->notEmpty('title_ru');
		
        $validator
            ->scalar('title_kz')
            ->maxLength('title_kz', 255)
            ->requirePresence('title_kz', 'create')
            ->notEmpty('title_kz');

        $validator
            ->scalar('link_ru')
            ->maxLength('link_ru', 255)
            ->requirePresence('link_ru', 'create')
            ->notEmpty('link_ru');
		
        $validator
            ->scalar('link_kz')
            ->maxLength('link_kz', 255)
            ->requirePresence('link_kz', 'create')
            ->notEmpty('link_kz');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        return $validator;
    }
}
