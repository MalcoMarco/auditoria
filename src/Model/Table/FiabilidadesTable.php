<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fiabilidades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Fiabilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fiabilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fiabilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fiabilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fiabilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fiabilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fiabilidade findOrCreate($search, callable $callback = null, $options = [])
 */
class FiabilidadesTable extends Table
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

        $this->setTable('fiabilidades');
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
            ->scalar('fi1')
            ->allowEmpty('fi1');

        $validator
            ->scalar('fi2')
            ->allowEmpty('fi2');

        $validator
            ->scalar('fi3')
            ->allowEmpty('fi3');

        $validator
            ->scalar('fi4')
            ->allowEmpty('fi4');

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
