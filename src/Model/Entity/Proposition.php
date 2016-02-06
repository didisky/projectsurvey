<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proposition Entity.
 *
 * @property int $id
 * @property string $proposition
 * @property int $question_id
 * @property \App\Model\Entity\Question $question
 * @property string $etat_objet
 * @property int $compteur
 */
class Proposition extends Entity
{
		private $proposition;
		private $compteur;
	
	
		public function getProposition()
		{
			return $this->proposition;
		}
	
		public function setProposition($nouvelleProposition)
		{
			$this->proposition = $nouvelleProposition;
		}
}
