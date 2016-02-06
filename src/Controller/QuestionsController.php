<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Model\Entity\Proposition;
use App\Model\Table\PropositionsTable;
/**
 * Questions Controller
 *
 *  \App\Model\Table\QuestionsTable $Questions
 */
class QuestionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    	public function index()
	{
		$questions = $this->Questions->find('all');
		$this->set(compact('questions'));
    }
    
    public function view($id = null)
    {
    	$question = $this->Questions->get($id);
    	$this->set(compact('question'));
    	$Propositions = new PropositionsTable();
    	debug($this->Proposition);

    }

}
