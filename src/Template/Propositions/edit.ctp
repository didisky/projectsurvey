<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proposition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proposition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Propositions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="propositions form large-9 medium-8 columns content">
    <?= $this->Form->create($proposition) ?>
    <fieldset>
        <legend><?= __('Edit Proposition') ?></legend>
        <?php
            echo $this->Form->input('proposition');
            echo $this->Form->input('question_id');
            echo $this->Form->input('etat_objet');
            echo $this->Form->input('compteur');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
