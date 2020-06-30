<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="list-inline">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Media'), ['action' => 'add']) ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li class="list-inline-item small"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="media card">
    <h3 class="card-header"><?= __('Media') ?></h3>
    <table class="table table-sm table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('article_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($media as $media): ?>
            <tr>
                <td><?= $this->Number->format($media->id) ?></td>
                <td><?= $media->has('article') ? $this->Html->link($media->article->title, ['controller' => 'Articles', 'action' => 'view', $media->article->id]) : '' ?></td>
                <td><?= h($media->link) ?></td>
                <td><?= h($media->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $media->id],['class'=>'btn-link btn-sm','escape'=>false,'data-toggle'=>'tooltip','title'=>'View']) ?>
                    <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $media->id],['class'=>'btn-link btn-sm','escape'=>false,'data-toggle'=>'tooltip','title'=>'Edit']) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $media->id], ['data-toggle'=>'tooltip','title'=>'Delete','class'=>'btn-link btn-sm text-danger','escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination pagination-sm justify-content-sm-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
