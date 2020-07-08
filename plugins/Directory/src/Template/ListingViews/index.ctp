<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $listingViews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Listing View'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listingViews index large-9 medium-8 columns content">
    <h3><?= __('Listing Views') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('listing_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('views') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listingViews as $listingView): ?>
            <tr>
                <td><?= h($listingView->id) ?></td>
                <td><?= $listingView->has('listing') ? $this->Html->link($listingView->listing->id, ['controller' => 'Listings', 'action' => 'view', $listingView->listing->id]) : '' ?></td>
                <td><?= $this->Number->format($listingView->views) ?></td>
                <td><?= h($listingView->ip) ?></td>
                <td><?= h($listingView->created) ?></td>
                <td><?= h($listingView->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $listingView->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listingView->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listingView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingView->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
