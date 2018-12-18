<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mantenibilidade Entity
 *
 * @property int $id
 * @property string $m1
 * @property string $m2
 * @property string $m3
 * @property string $m4
 * @property string $m5
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Mantenibilidade extends Entity
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
        'm1' => true,
        'm2' => true,
        'm3' => true,
        'm4' => true,
        'm5' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
