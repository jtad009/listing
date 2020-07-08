<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listingView
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Listing View'), ['action' => 'edit', $listingView->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Listing View'), ['action' => 'delete', $listingView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingView->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listing Views'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing View'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listingViews view large-9 medium-8 columns content">
    <h3><?= h($listingView->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($listingView->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Listing') ?></th>
            <td><?= $listingView->has('listing') ? $this->Html->link($listingView->listing->id, ['controller' => 'Listings', 'action' => 'view', $listingView->listing->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($listingView->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Views') ?></th>
            <td><?= $this->Number->format($listingView->views) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($listingView->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($listingView->modified) ?></td>
        </tr>
    </table>
</div>
