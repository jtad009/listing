<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listingCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Listing Category'), ['action' => 'edit', $listingCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Listing Category'), ['action' => 'delete', $listingCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listing Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listingCategories view large-9 medium-8 columns content">
    <h3><?= h($listingCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($listingCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Listing') ?></th>
            <td><?= $listingCategory->has('listing') ? $this->Html->link($listingCategory->listing->id, ['controller' => 'Listings', 'action' => 'view', $listingCategory->listing->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $listingCategory->has('category') ? $this->Html->link($listingCategory->category->id, ['controller' => 'Categories', 'action' => 'view', $listingCategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($listingCategory->created) ?></td>
        </tr>
    </table>
</div>
