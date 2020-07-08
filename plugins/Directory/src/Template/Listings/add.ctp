<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Listings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Listing Images'), ['controller' => 'ListingImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Listing Image'), ['controller' => 'ListingImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Listing Reviews'), ['controller' => 'ListingReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Listing Review'), ['controller' => 'ListingReviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Listing Views'), ['controller' => 'ListingViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Listing View'), ['controller' => 'ListingViews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listings form large-9 medium-8 columns content">
    <?= $this->Form->create($listing) ?>
    <fieldset>
        <legend><?= __('Add Listing') ?></legend>
        <?php
            echo $this->Form->control('business_name');
            echo $this->Form->control('description');
            echo $this->Form->control('url');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('state_id', ['options' => $states]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
