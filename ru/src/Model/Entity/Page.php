<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Page Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $title_ru
 * @property string $text_ru
 * @property string $title_kz
 * @property string $text_kz
 * @property bool $menu
 * @property int $position
 *
 * @property \App\Model\Entity\Category $category
 */
class Page extends Entity
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
        'category_id' => true,
        'title_ru' => true,
        'text_ru' => true,
        'title_kz' => true,
        'text_kz' => true,
        'menu' => true,
        'link_ru' => true,
        'link_kz' => true,
        'position' => true,
        'category' => true
    ];
}
