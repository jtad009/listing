<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listing
 */
?>
<div class="row">
    <div class="col-sm-10 mx-auto">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                 <li class="breadcrumb-item"><?= $this->Html->link(__('Listing'), ['action' => 'index']) ?></li>
                 <li class="breadcrumb-item"><?= h($listing->business_name)?></li>
            </ol>
        </nav>
        </nav>
<div class="card border-0 blogCard">
    <h3 class="card-header title">Business Name: <?= h($listing->business_name) ?></h3>
    <table class="table table-sm table-hover small">
       
        
        <tr>
            <th scope="row "><?= __('Url') ?></th>
            <td><?= h($listing->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($listing->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($listing->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $listing->has('state') ? $this->Html->link($listing->state->states, ['controller' => 'States', 'action' => 'view', $listing->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($listing->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($listing->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <div class="col-sm-12">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($listing->description)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($listing->address)); ?>
        </div>
    </div>
    
    <div class="related mb-3">
        <h4><?= __('Listing Images') ?></h4>
        <?php if (!empty($listing->listing_images)): ?>
       
            <div class="row">
            <?php foreach ($listing->listing_images as $listingImages): 
                
                ?>
                
                    <div class="col-md-3">
                        <?= $this->Html->image($listingImages->path, ['class'=>'img img-fluid'])?>
                    </div>

            
            <?php endforeach; ?>
            </div>
       
        <?php endif; ?>
    </div>
    
</div>
    </div>
</div>

