<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Propositions'), ['controller' => 'Propositions', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Proposition'), ['controller' => 'Propositions', 'action' => 'add']) ?> </li>
	</ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
	<h3><?= h($question->id) ?></h3>
	<table class="vertical-table">
		<tr>
			<th><?= __('Question') ?></th>
			<td><?= h($question->question) ?></td>
		</tr>
		<tr>
			<th><?= __('Id') ?></th>
			<td><?= $this->Number->format($question->id) ?></td>
		</tr>
		<tr>
			<th><?= __('Theme Id') ?></th>
			<td><?= $this->Number->format($question->theme_id) ?></td>
		</tr>
		<tr>
			<th><?= __('Date') ?></th>
			<td><?= h($question->date) ?></td>
		</tr>
	</table>
	<div class="row">
		<h4><?= __('Etat Objet') ?></h4>
        <?= $this->Text->autoParagraph(h($question->etat_objet)); ?>
    </div>
	<div class="related">
		<h4><?= __('Related Propositions') ?></h4>
        <?php if (!empty($question->propositions)): ?>
        <table cellpadding="0" cellspacing="0">
			<tr>
				<th><?= __('Proposition') ?></th>
				<th><?= __('Compteur') ?></th>
				<th <?=__('Vote') ?></th>
			</tr>
            <?php foreach ($question->propositions as $propositions): ?>
            <tr>
				<td><?= h($propositions->proposition) ?></td>
				<td><?= h($propositions->compteur) ?></td>
				<td>
				<?= $this->Html->link(__('Vote'), ['controller' => 'Propositions','action' => 'vote', $question->id]) ?>
				</td>
			</tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
