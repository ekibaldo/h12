<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Serv Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $price
 * @property int $state_id
 *
 * @property \App\Model\Entity\State $state
 */
class Serv extends Entity
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
        'type' => true,
        'price' => true,
        'state_id' => true,
        'state' => true
    ];
}
