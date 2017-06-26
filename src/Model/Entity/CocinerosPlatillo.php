<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CocinerosPlatillo Entity
 *
 * @property int $id
 * @property int $cocinero_id
 * @property int $platillo_id
 *
 * @property \App\Model\Entity\Cocinero $cocinero
 * @property \App\Model\Entity\Platillo $platillo
 */
class CocinerosPlatillo extends Entity
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
