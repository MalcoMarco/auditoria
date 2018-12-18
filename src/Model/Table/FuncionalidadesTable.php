<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionalidades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Funcionalidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionalidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcionalidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionalidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionalidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionalidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionalidade findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncionalidadesTable extends Table
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

        $this->setTable('funcionalidades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('fu1')
            ->allowEmpty('fu1');

        $validator
            ->scalar('fu2')
            ->allowEmpty('fu2');

        $validator
            ->scalar('fu3')
            ->allowEmpty('fu3');

        $validator
            ->scalar('fu4')
            ->allowEmpty('fu4');

        $validator
            ->scalar('fu5')
            ->allowEmpty('fu5');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
