<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listingImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Listing Image'), ['action' => 'edit', $listingImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Listing Image'), ['action' => 'delete', $listingImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listing Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listingImages view large-9 medium-8 columns content">
    <h3><?= h($listingImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($listingImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Listing') ?></th>
            <td><?= $listingImage->has('listing') ? $this->Html->link($listingImage->listing->id, ['controller' => 'Listings', 'action' => 'view', $listingImage->listing->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($listingImage->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($listingImage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($listingImage->modified) ?></td>
        </tr>
    </table>
</div>
