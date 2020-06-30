<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="list-inline">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('Edit Media'), ['action' => 'edit', $media->id]) ?> </li>
        <li class="list-inline-item small"><?= $this->Form->postLink(__('Delete Media'), ['action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Media'), ['action' => 'index']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Media'), ['action' => 'add']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="media card">
    <h3 class="card-header"><?= h($media->id) ?></h3>
    <table class="table table-sm table-bordered table-responsive">
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $media->has('article') ? $this->Html->link($media->article->title, ['controller' => 'Articles', 'action' => 'view', $media->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($media->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($media->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($media->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($media->type)); ?>
    </div>
</div>
