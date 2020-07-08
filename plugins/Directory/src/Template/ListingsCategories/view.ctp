<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listingsCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Listings Category'), ['action' => 'edit', $listingsCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Listings Category'), ['action' => 'delete', $listingsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listings Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listings Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listingsCategories view large-9 medium-8 columns content">
    <h3><?= h($listingsCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($listingsCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Listing') ?></th>
            <td><?= $listingsCategory->has('listing') ? $this->Html->link($listingsCategory->listing->id, ['controller' => 'Listings', 'action' => 'view', $listingsCategory->listing->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $listingsCategory->has('category') ? $this->Html->link($listingsCategory->category->id, ['controller' => 'Categories', 'action' => 'view', $listingsCategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($listingsCategory->created) ?></td>
        </tr>
    </table>
</div>
