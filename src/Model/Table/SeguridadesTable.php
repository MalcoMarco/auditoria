<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seguridades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Seguridade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Seguridade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Seguridade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seguridade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seguridade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Seguridade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seguridade findOrCreate($search, callable $callback = null, $options = [])
 */
class SeguridadesTable extends Table
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

        $this->setTable('seguridades');
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
            ->scalar('s1')
            ->allowEmpty('s1');

        $validator
            ->scalar('s2')
            ->allowEmpty('s2');

        $validator
            ->scalar('s3')
            ->allowEmpty('s3');

        $validator
            ->scalar('s4')
            ->allowEmpty('s4');

        $validator
            ->scalar('s5')
            ->allowEmpty('s5');

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
