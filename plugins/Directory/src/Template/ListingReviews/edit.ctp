<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listingReview
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $listingReview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $listingReview->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Listing Reviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listingReviews form large-9 medium-8 columns content">
    <?= $this->Form->create($listingReview) ?>
    <fieldset>
        <legend><?= __('Edit Listing Review') ?></legend>
        <?php
            echo $this->Form->control('listing_id', ['options' => $listings]);
            echo $this->Form->control('rating');
            echo $this->Form->control('ip');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
