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
        <?= $this->form->postLink(
            'Delete',
            ['action' => 'delete', $article->id],
            ['confirm' => 'This is irreversible. Are you sure you want to delete the post "'.$article->title.'" ?'])
        ?>
        <?= $this->Html->link('Edit',['action'=> 'edit', $article->id]) ?>
    </div>
    <?php endforeach; ?>
</div>
