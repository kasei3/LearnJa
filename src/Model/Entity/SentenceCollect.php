<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SentenceCollect Entity
 *
 * @property int $sentence_collect_id
 * @property int $sentence_id
 * @property string $user_id
 * @property \Cake\I18n\FrozenDate $created_date
 *
 * @property \App\Model\Entity\Sentence $sentence
 * @property \App\Model\Entity\User $user
 */
class SentenceCollect extends Entity
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
        'sentence_id' => true,
        'user_id' => true,
        'created_date' => true,
        'sentence' => true,
        'user' => true
    ];
}
