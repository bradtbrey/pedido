<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Platillos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CategoriaPlatillos
 * @property \Cake\ORM\Association\BelongsToMany $Cocineros
 *
 * @method \App\Model\Entity\Platillo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Platillo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Platillo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Platillo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Platillo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Platillo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Platillo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlatillosTable extends Table
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

        $this->setTable('platillos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CategoriaPlatillos', [
            'foreignKey' => 'categoria_platillo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Cocineros', [
            'foreignKey' => 'platillo_id',
            'targetForeignKey' => 'cocinero_id',
            'joinTable' => 'cocineros_platillos'
        ]);
        $this->hasMany('Pedidos', [
                'foreignKey' => 'platillo_id',
                ]
                );
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->numeric('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio');

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
        $rules->add($rules->existsIn(['categoria_platillo_id'], 'CategoriaPlatillos'));

        return $rules;
    }
}
