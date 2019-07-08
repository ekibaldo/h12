<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdFaq Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date_post
 * @property string $fio
 * @property string $q
 * @property string $a
 * @property bool $status
 */
class AdFaq extends Entity
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
        'date_post' => true,
        'fio' => true,
        'q' => true,
        'a' => true,
        'status' => true
    ];
}
