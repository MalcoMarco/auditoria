<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compatitibilidade Entity
 *
 * @property int $id
 * @property string $c1
 * @property string $c2
 * @property string $c3
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Compatitibilidade extends Entity
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
        'c1' => true,
        'c2' => true,
        'c3' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
