<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdNews Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $title_ru
 * @property string $text_ru
 * @property string $title_kz
 * @property string $text_kz
 * @property string $img
 */
class AdNews extends Entity
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
        'date' => true,
        'title_ru' => true,
        'text_ru' => true,
        'title_kz' => true,
        'text_kz' => true,
        'img' => true
    ];
}
