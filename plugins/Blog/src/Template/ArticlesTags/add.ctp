<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="list-inline">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles Tags'), ['action' => 'index']) ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articlesTags card">
    <?= $this->Form->create($articlesTag) ?>
    <fieldset class="card-body">
        <legend class="card-title text-center"><?= __('Add Articles Tag') ?></legend>
        <?php
            echo $this->Form->input('article_id', ['options' => $articles]);
            echo $this->Form->input('tag_id');
        ?>
        <?= $this->Form->button(__('Submit')) ?>
    </fieldset>

    <?= $this->Form->end() ?>
</div>
