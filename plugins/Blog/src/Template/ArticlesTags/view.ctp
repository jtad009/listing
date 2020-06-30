<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="list-inline">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('Edit Articles Tag'), ['action' => 'edit', $articlesTag->id]) ?> </li>
        <li class="list-inline-item small"><?= $this->Form->postLink(__('Delete Articles Tag'), ['action' => 'delete', $articlesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->id)]) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles Tags'), ['action' => 'index']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Articles Tag'), ['action' => 'add']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articlesTags card">
    <h3 class="card-header"><?= h($articlesTag->id) ?></h3>
    <table class="table table-sm table-bordered table-responsive">
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $articlesTag->has('article') ? $this->Html->link($articlesTag->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesTag->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articlesTag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Id') ?></th>
            <td><?= $this->Number->format($articlesTag->tag_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($articlesTag->created) ?></td>
        </tr>
    </table>
</div>
