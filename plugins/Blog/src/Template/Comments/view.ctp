<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="list-inline">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->id]) ?> </li>
        <li class="list-inline-item small"><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comments card">
    <h3 class="card-header"><?= h($comment->name) ?></h3>
    <table class="table table-sm table-bordered table-responsive">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($comment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $comment->has('article') ? $this->Html->link($comment->article->title, ['controller' => 'Articles', 'action' => 'view', $comment->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($comment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($comment->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($comment->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $this->Number->format($comment->published) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($comment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($comment->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($comment->comment)); ?>
    </div>
</div>
