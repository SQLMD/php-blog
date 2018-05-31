<?= $this->Html->css('custom.css') ?>

<subheader>
    <h2><?= h($article->title) ?></h2>
</subheader>
<div class="article-container ">
    <p class="article-item no-border"><?= nl2br($article->body) ?></p>
    <div>
    <?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $article->id],
            ['confirm' => 'This is irreversible. Are you sure you want to delete the post "'.$article->title.'" ?'])
        ?>
        <?= $this->Html->link('Edit',['action'=> 'edit', $article->id]) ?>
    </div>
    <p class="article-time">Created: <?= $article->created ?></p>
</div>
