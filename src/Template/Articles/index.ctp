<!-- File: src/Template/Articles/index.ctp -->
<?= $this->Html->css('custom.css') ?>
<subheader>
    <h1>SQLMD</h1>
    <h4>A Coding Journey</h4>
</subheader>
<div id="article-container">
    <?php foreach ($articles as $article): ?>
    <div class="article-item">
        <div class = "article-title"><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></div>
        <div>
            <p><?= h(substr(($article->body),0,500)) . (strlen($article->body) > 500 ? '...' : '')  ?></p>
        </div>
        <div class="article-time">
            <?= $article->created ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<hr>
<?= $this->Html->link('Add Article', ['action'=> 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td><?= $this->form->postLink(
            'Delete',
            ['action' => 'delete', $article->id],
            ['confirm' => 'Are you sure'])
            ?>
            <?= $this->Html->link('Edit',['action'=> 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>