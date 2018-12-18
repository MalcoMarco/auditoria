<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fiabilidade Entity
 *
 * @property int $id
 * @property string $fi1
 * @property string $fi2
 * @property string $fi3
 * @property string $fi4
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Fiabilidade extends Entity
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
        'fi1' => true,
        'fi2' => true,
        'fi3' => true,
        'fi4' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
