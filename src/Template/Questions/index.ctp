<!-- File: src/Template/Questions/index.ctp -->

<h1>Toutes les questions du Blog</h1>
<table>
    <tr>
        <th>Id</th>
        <th>title</th>
        <th>Created</th>
    </tr>

    <!-- Ici se trouve l'itération sur l'objet query de nos question -->

    <?php foreach ($questions as $question): ?>
    <tr>
        <td><?= $question->id ?></td>
        <td>
            <?= $this->Html->link($question->question, ['action' => 'view', $question->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>