<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proposition Entity.
 *
 * @property int $id
 * @property string $proposition
 * @property int $question_id
 * @property string $etat_objet
 * @property int $compteur
 */
class Proposition extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
