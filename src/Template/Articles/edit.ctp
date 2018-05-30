<?= $this->Html->css('custom.css') ?>

<subheader>
    <h1>Edit your Blog Post</h1>
</subheader>
<div id="article-add">
    <?php
        echo $this->Form->create($article);
        echo $this->Form->control('title');
        echo $this->Form->control('body',['rows'=> '20']);
        echo $this->Form->button(__('Save Article'));
        echo $this->Form->end();
    ?>
</div>