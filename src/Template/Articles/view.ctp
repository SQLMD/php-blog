<?= $this->Html->css('custom.css') ?>

<subheader>
    <h2><?= h($article->title) ?></h2>
</subheader>
<div class="article-container ">
    <p class="article-item no-border"><?= nl2br($article->body) ?></p>
    <p class="article-time">Created: <?= $article->created ?></p>
</div>
