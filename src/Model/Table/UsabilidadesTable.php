<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usabilidades Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Usabilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usabilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usabilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usabilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usabilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usabilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usabilidade findOrCreate($search, callable $callback = null, $options = [])
 */
class UsabilidadesTable extends Table
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

        $this->setTable('usabilidades');
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
            ->scalar('u1')
            ->allowEmpty('u1');

        $validator
            ->scalar('u2')
            ->allowEmpty('u2');

        $validator
            ->scalar('u3')
            ->allowEmpty('u3');

        $validator
            ->scalar('u4')
            ->allowEmpty('u4');

        $validator
            ->scalar('u5')
            ->allowEmpty('u5');

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
