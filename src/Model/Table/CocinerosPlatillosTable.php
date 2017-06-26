<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CocinerosPlatillos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cocineros
 * @property \Cake\ORM\Association\BelongsTo $Platillos
 *
 * @method \App\Model\Entity\CocinerosPlatillo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CocinerosPlatillo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CocinerosPlatillo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CocinerosPlatillo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CocinerosPlatillo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CocinerosPlatillo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CocinerosPlatillo findOrCreate($search, callable $callback = null, $options = [])
 */
class CocinerosPlatillosTable extends Table
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

        $this->setTable('cocineros_platillos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cocineros', [
            'foreignKey' => 'cocinero_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Platillos', [
            'foreignKey' => 'platillo_id',
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
        $rules->add($rules->existsIn(['cocinero_id'], 'Cocineros'));
        $rules->add($rules->existsIn(['platillo_id'], 'Platillos'));

        return $rules;
    }
}
