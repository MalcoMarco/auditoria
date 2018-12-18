<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compatitibilidades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Compatitibilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Compatitibilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Compatitibilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Compatitibilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compatitibilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Compatitibilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Compatitibilidade findOrCreate($search, callable $callback = null, $options = [])
 */
class CompatitibilidadesTable extends Table
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

        $this->setTable('compatitibilidades');
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
            ->scalar('c1')
            ->allowEmpty('c1');

        $validator
            ->scalar('c2')
            ->allowEmpty('c2');

        $validator
            ->scalar('c3')
            ->allowEmpty('c3');

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
