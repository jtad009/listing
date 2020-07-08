<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listingImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Listing Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Listings'), ['controller' => 'Listings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Listing'), ['controller' => 'Listings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listingImages form large-9 medium-8 columns content">
    <?= $this->Form->create($listingImage) ?>
    <fieldset>
        <legend><?= __('Add Listing Image') ?></legend>
        <?php
            echo $this->Form->control('listing_id', ['options' => $listings]);
            echo $this->Form->control('path');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
