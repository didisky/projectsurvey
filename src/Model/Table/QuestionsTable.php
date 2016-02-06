<?php
namespace App\Model\Table;

use App\Model\Entity\Question;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Themes
 * @property \Cake\ORM\Association\HasMany $Propositions
 */
class QuestionsTable extends Table
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
}
