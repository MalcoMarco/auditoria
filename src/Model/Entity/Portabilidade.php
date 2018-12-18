<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Portabilidade Entity
 *
 * @property int $id
 * @property string $p1
 * @property string $p2
 * @property string $p3
 * @property string $p4
 * @property string $p5
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Portabilidade extends Entity
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
        'p1' => true,
        'p2' => true,
        'p3' => true,
        'p4' => true,
        'p5' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
