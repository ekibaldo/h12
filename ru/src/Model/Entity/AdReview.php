<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdReview Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $fio
 * @property string $phone
 * @property string $email
 * @property string $message
 * @property bool $status
 */
class AdReview extends Entity
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
        'fio' => true,
        'phone' => true,
        'email' => true,
        'message' => true,
        'status' => true
    ];
}
