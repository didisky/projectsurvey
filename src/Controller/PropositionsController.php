<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Propositions Controller
 *
 * @property \App\Model\Table\PropositionsTable $Propositions
 */
class PropositionsController extends AppController {
	
	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index() {
		$propositions = $this->paginate ( $this->Propositions );
		
		$this->set ( compact ( 'propositions' ) );
		$this->set ( '_serialize', [ 
				'propositions' 
		] );
	}
	
	/**
	 * View method
	 *
	 * @param string|null $id
	 *        	Proposition id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null) {
		$proposition = $this->Propositions->get ( $id, [ 
				'contain' => [ ] 
		] );
		
		// $this->set('proposition', $proposition);
		// $this->set('_serialize', ['proposition']);
	}
	
	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add() {
		$proposition = $this->Propositions->newEntity ();
		if ($this->request->is ( 'post' )) {
			$proposition = $this->Propositions->patchEntity ( $proposition, $this->request->data );
			if ($this->Propositions->save ( $proposition )) {
				$this->Flash->success ( __ ( 'The proposition has been saved.' ) );
				return $this->redirect ( [ 
						'action' => 'index' 
				] );
			} else {
				$this->Flash->error ( __ ( 'The proposition could not be saved. Please, try again.' ) );
			}
		}
		$this->set ( compact ( 'proposition' ) );
		$this->set ( '_serialize', [ 
				'proposition' 
		] );
	}
	
	/**
	 * Edit method
	 *
	 * @param string|null $id
	 *        	Proposition id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null) {
		$proposition = $this->Propositions->get ( $id, [ 
				'contain' => [ ] 
		] );
		if ($this->request->is ( [ 
				'patch',
				'post',
				'put' 
		] )) {
			$proposition = $this->Propositions->patchEntity ( $proposition, $this->request->data );
			if ($this->Propositions->save ( $proposition )) {
				$this->Flash->success ( __ ( 'The proposition has been saved.' ) );
				return $this->redirect ( [ 
						'action' => 'index' 
				] );
			} else {
				$this->Flash->error ( __ ( 'The proposition could not be saved. Please, try again.' ) );
			}
		}
		$this->set ( compact ( 'proposition' ) );
		$this->set ( '_serialize', [ 
				'proposition' 
		] );
	}
	
	/**
	 * Delete method
	 *
	 * @param string|null $id
	 *        	Proposition id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null) {
		$this->request->allowMethod ( [ 
				'post',
				'delete' 
		] );
		$proposition = $this->Propositions->get ( $id );
		if ($this->Propositions->delete ( $proposition )) {
			$this->Flash->success ( __ ( 'The proposition has been deleted.' ) );
		} else {
			$this->Flash->error ( __ ( 'The proposition could not be deleted. Please, try again.' ) );
		}
		return $this->redirect ( [ 
				'action' => 'index' 
		] );
	}
	/**
	 * Vote method
	 * méthode qui va permettre d'incrémenter le compteur de vote.
	 */
	public function vote() {
		debug ( "TOTO" );
		echo ("TOTO");
	}
}
