<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $name_kz
 * @property string $text_kz
 * @property int $position
 *
 * @property \App\Model\Entity\Doctor[] $doctors
 * @property \App\Model\Entity\Serv[] $servs
 */
class State extends Entity
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
        'name' => true,
        'text' => true,
        'name_kz' => true,
        'text_kz' => true,
        'position' => true,
        'doctors' => true,
        'servs' => true,
        'block' => true,
        'img' => true
    ];
}
