<?= $this->Html->css('custom.css') ?>

<subheader>
    <h1>Write a New Blog Post</h1>
</subheader>
<div id="article-add">
    <?php
        echo $this->Form->create($article);
        echo $this->Form->control('title');
        echo $this->Form->control('body',['rows' => '15']);
        echo $this->Form->button(__('Save Article'));
        echo $this->Form->end();
    ?>
</div>

