<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * States2 Entity
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @property string $link
 * @property string $icon_link
 * @property int $position
 */
class States2 extends Entity
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
        'name_ru' => true,
        'name_kz' => true,
        'link' => true,
        'icon_link' => true,
        'position' => true
    ];
}
