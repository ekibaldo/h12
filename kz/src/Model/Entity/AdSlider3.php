<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdSlider3 Entity
 *
 * @property int $id
 * @property string $img
 * @property string $link_ru
 * @property string $text_ru
 * @property string $link_kz
 * @property string $text_kz
 * @property int $position
 */
class AdSlider3 extends Entity
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
        'img' => true,
        'link_ru' => true,
        'text_ru' => true,
        'text_kz' => true,
        'position' => true
    ];
}
