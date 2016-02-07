<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Propositions'), ['controller' => 'Propositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposition'), ['controller' => 'Propositions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->input('question');
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('etat_objet');
            echo $this->Form->input('theme_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
