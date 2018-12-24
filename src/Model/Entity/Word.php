<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tag Entity
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Bookmark[] $bookmarks
 */
class Word extends Entity
{
	protected $_accessible = [
		'kanji'=>true,
		'kana'=>true,
		'*' => false,

	];
}
