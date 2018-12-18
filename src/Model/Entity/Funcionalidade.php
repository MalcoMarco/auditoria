<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionalidade Entity
 *
 * @property int $id
 * @property string $fu1
 * @property string $fu2
 * @property string $fu3
 * @property string $fu4
 * @property string $fu5
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Funcionalidade extends Entity
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
        'fu1' => true,
        'fu2' => true,
        'fu3' => true,
        'fu4' => true,
        'fu5' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
