<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mantenibilidades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Mantenibilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mantenibilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mantenibilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mantenibilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mantenibilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mantenibilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mantenibilidade findOrCreate($search, callable $callback = null, $options = [])
 */
class MantenibilidadesTable extends Table
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

        $this->setTable('mantenibilidades');
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
            ->scalar('m1')
            ->allowEmpty('m1');

        $validator
            ->scalar('m2')
            ->allowEmpty('m2');

        $validator
            ->scalar('m3')
            ->allowEmpty('m3');

        $validator
            ->scalar('m4')
            ->allowEmpty('m4');

        $validator
            ->scalar('m5')
            ->allowEmpty('m5');

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
