<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usabilidade Entity
 *
 * @property int $id
 * @property string $u1
 * @property string $u2
 * @property string $u3
 * @property string $u4
 * @property string $u5
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Usabilidade extends Entity
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
        'u1' => true,
        'u2' => true,
        'u3' => true,
        'u4' => true,
        'u5' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
