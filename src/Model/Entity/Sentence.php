<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sentence Entity
 *
 * @property int $sentence_id
 * @property string $jp
 * @property string $jp_kana
 * @property string $cn
 */
class Sentence extends Entity
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
        'jp' => true,
        'jp_kana' => true,
        'cn' => true
    ];
}
