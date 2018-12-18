<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seguridade Entity
 *
 * @property int $id
 * @property string $s1
 * @property string $s2
 * @property string $s3
 * @property string $s4
 * @property string $s5
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Seguridade extends Entity
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
        's1' => true,
        's2' => true,
        's3' => true,
        's4' => true,
        's5' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
