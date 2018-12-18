<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $ruc
 * @property string $direccion
 *
 * @property \App\Model\Entity\Eficiencia[] $eficiencias
 * @property \App\Model\Entity\Fiabilidade[] $fiabilidades
 * @property \App\Model\Entity\Funcionalidade[] $funcionalidades
 * @property \App\Model\Entity\Mantenibilidade[] $mantenibilidades
 * @property \App\Model\Entity\Portabilidade[] $portabilidades
 * @property \App\Model\Entity\Seguridade[] $seguridades
 * @property \App\Model\Entity\Usabilidade[] $usabilidades
 */
class Empresa extends Entity
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
        'nombre' => true,
        'ruc' => true,
        'direccion' => true,
        'eficiencias' => true,
        'fiabilidades' => true,
        'funcionalidades' => true,
        'mantenibilidades' => true,
        'portabilidades' => true,
        'seguridades' => true,
        'usabilidades' => true
    ];
}
