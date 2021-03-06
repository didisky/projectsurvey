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
	<div>
		<h3><?= __('Question') ?></h3>
		<strong><?=$question->question?></strong>
		<mark><mark>
	</div>

	<div class="related">
		<h4><?= __('Related Propositions') ?></h4>
        <?php if (!empty($question->propositions)): ?>
        <table cellpadding="0" cellspacing="0">
			<tr>
				<th><?= __('Proposition') ?></th>
				<th><?= __('Vote') ?></th>
				<th>
				<?= __('Resultat') ?>
				<?=__('('), $question->nbrVote,__(')')?>
				</th>
			</tr>
            <?php foreach ($question->propositions as $propositions): ?>
            <tr>
				<td><?= h($propositions->proposition) ?></td>
				<td>
				<?= $this->Form->create('Vote', array('url' => array ('controller' => 'Propositions', 'action' => 'vote',  $question->id), 'method' => 'vote')); ?>
				<?=$this->Form->input('propid', array('value'=>$propositions->id, 'type' => 'hidden')); ?>
				<?= $this->Form->button('Vote'); ?>
				<?= $this->Form->end(); ?>
				</td>
				<td>
				<progress value=<?=$propositions->compteur*100/$question->nbrVote;?> max="100"></progress>
				<?=$this->Number->toPercentage($propositions->compteur*100/$question->nbrVote); ?>
				</td>
		
			</tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
