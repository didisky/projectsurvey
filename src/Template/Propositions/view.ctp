<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proposition'), ['action' => 'edit', $proposition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proposition'), ['action' => 'delete', $proposition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Propositions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposition'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propositions view large-9 medium-8 columns content">
    <h3><?= h($proposition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Proposition') ?></th>
            <td><?= h($proposition->proposition) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($proposition->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Question Id') ?></th>
            <td><?= $this->Number->format($proposition->question_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Compteur') ?></th>
            <td><?= $this->Number->format($proposition->compteur) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Etat Objet') ?></h4>
        <?= $this->Text->autoParagraph(h($proposition->etat_objet)); ?>
    </div>
</div>
