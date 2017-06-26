<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mesa Entity
 *
 * @property int $id
 * @property string $serie
 * @property string $puestos
 * @property string $posicion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $mesero_id
 *
 * @property \App\Model\Entity\Mesero $mesero
 */
class Mesa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
