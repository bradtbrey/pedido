<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cocineros Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Platillos
 *
 * @method \App\Model\Entity\Cocinero get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cocinero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cocinero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cocinero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cocinero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cocinero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cocinero findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CocinerosTable extends Table
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

        $this->setTable('cocineros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Platillos', [
            'foreignKey' => 'cocinero_id',
            'targetForeignKey' => 'platillo_id',
            'joinTable' => 'cocineros_platillos'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        return $validator;
    }
}
