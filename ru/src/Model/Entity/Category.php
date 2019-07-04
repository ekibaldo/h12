<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_kz
 * @property string $link_ru
 * @property string $link_kz
 * @property int $position
 *
 * @property \App\Model\Entity\Page[] $pages
 */
class Category extends Entity
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
        'title_ru' => true,
        'title_kz' => true,
        'link_ru' => true,
        'link_kz' => true,
        'position' => true,
        'pages' => true
    ];
}
