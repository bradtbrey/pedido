<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Platillo Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property float $precio
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $categoria_platillo_id
 *
 * @property \App\Model\Entity\CategoriaPlatillo $categoria_platillo
 * @property \App\Model\Entity\Cocinero[] $cocineros
 */
class Platillo extends Entity
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
