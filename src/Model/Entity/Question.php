<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Question extends Entity
{
    private $question;
    private $theme;

    
    public function getQuestion()
    {
        return $this->question;
    }
    
    public function setQuestion($nouvelleQuestion)
    {
        $this->question = $nouvelleQuestion;
    }
}