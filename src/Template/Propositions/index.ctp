<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proposition'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propositions index large-9 medium-8 columns content">
    <h3><?= __('Propositions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('proposition') ?></th>
                <th><?= $this->Paginator->sort('question_id') ?></th>
                <th><?= $this->Paginator->sort('compteur') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propositions as $proposition): ?>
            <tr>
                <td><?= $this->Number->format($proposition->id) ?></td>
                <td><?= h($proposition->proposition) ?></td>
                <td><?= $this->Number->format($proposition->question_id) ?></td>
                <td><?= $this->Number->format($proposition->compteur) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proposition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proposition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proposition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposition->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
