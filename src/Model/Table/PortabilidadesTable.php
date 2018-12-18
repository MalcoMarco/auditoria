<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Portabilidades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Portabilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Portabilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Portabilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Portabilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Portabilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Portabilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Portabilidade findOrCreate($search, callable $callback = null, $options = [])
 */
class PortabilidadesTable extends Table
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

        $this->setTable('portabilidades');
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
            ->scalar('p1')
            ->allowEmpty('p1');

        $validator
            ->scalar('p2')
            ->allowEmpty('p2');

        $validator
            ->scalar('p3')
            ->allowEmpty('p3');

        $validator
            ->scalar('p4')
            ->allowEmpty('p4');

        $validator
            ->scalar('p5')
            ->allowEmpty('p5');

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
