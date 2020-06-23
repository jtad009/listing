<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="list-inline">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="list-inline-item small"><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $media->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]
            )
        ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Media'), ['action' => 'index']) ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="media card">
    <?= $this->Form->create($media) ?>
    <fieldset class="card-body">
        <legend class="card-title text-center"><?= __('Edit Media') ?></legend>
        <?php
            echo $this->Form->input('article_id', ['options' => $articles]);
            echo $this->Form->input('link');
            echo $this->Form->input('type');
        ?>
        <?= $this->Form->button(__('Submit')) ?>
    </fieldset>

    <?= $this->Form->end() ?>
</div>
