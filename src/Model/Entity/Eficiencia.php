<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Eficiencia Entity
 *
 * @property int $id
 * @property string $e1
 * @property string $e2
 * @property string $e3
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Eficiencia extends Entity
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
        'e1' => true,
        'e2' => true,
        'e3' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
