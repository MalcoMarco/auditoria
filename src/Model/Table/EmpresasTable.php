<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\EficienciasTable|\Cake\ORM\Association\HasMany $Eficiencias
 * @property \App\Model\Table\FiabilidadesTable|\Cake\ORM\Association\HasMany $Fiabilidades
 * @property \App\Model\Table\FuncionalidadesTable|\Cake\ORM\Association\HasMany $Funcionalidades
 * @property \App\Model\Table\MantenibilidadesTable|\Cake\ORM\Association\HasMany $Mantenibilidades
 * @property \App\Model\Table\PortabilidadesTable|\Cake\ORM\Association\HasMany $Portabilidades
 * @property \App\Model\Table\SeguridadesTable|\Cake\ORM\Association\HasMany $Seguridades
 * @property \App\Model\Table\UsabilidadesTable|\Cake\ORM\Association\HasMany $Usabilidades
 *
 * @method \App\Model\Entity\Empresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa findOrCreate($search, callable $callback = null, $options = [])
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Eficiencias', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Fiabilidades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Funcionalidades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Mantenibilidades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Portabilidades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Seguridades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Usabilidades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('Compatitibilidades', [
            'foreignKey' => 'empresa_id',
            'dependent' => true,
            'cascadeCallbacks' => true
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre','No se puede dejar vacio!');

        $validator
            ->integer('ruc','Debe ingresar números!')
            ->requirePresence('ruc', 'create')
            ->notEmpty('ruc','No se puede dejar vacio!')
            ->add('ruc', [
                'length' => [
                    'rule' => ['minLength', 11],
                    'message' => 'El RUC debe tener 11 dígitos!',
                ]
            ]);

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion','No se puede dejar vacio!');

        return $validator;
    }
}
