<?php
namespace App\Model\Table;

use App\Model\Entity\Proposition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Propositions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Questions
 */
class PropositionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

    }
    
    
    public function findPropositions()
    {
    	    	
    	$propostions = $this->find('all');
    	return $propostions;
    
    }

}
