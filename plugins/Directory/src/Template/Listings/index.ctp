<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $listings
 */
?>
<div class="row">
    <div class="col-md-10 mx-auto">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                 <li class="breadcrumb-item"><?= $this->Html->link(__('Listing'), ['action' => 'index']) ?></li>
                 <li class="breadcrumb-item"><?= $this->Html->link(__('Add Listing'), ['action' => 'add']) ?></li>
            </ol>
        </nav>
        </nav>
        <div class="row">

        <div class="col-md-12 mb-4">
            <form>
            <input type="text" class="form-control" id="param" name="param" placeholder="enter address, email, phone, url to find listing"/>
            </form>
            
        </div>

            <?php foreach ($listings as $listing) :
                echo $this->element('post-card-2', [
                    'fullname' => h($listing->business_name),
                    'image' => $listing->has('listing_images') && !empty($listing->listing_images) ? $listing->listing_images[0]->path: 'https://lorempixel.com/640/480/?97042',
                    'views' => $listing->has('listing_views') && !empty($listing->listing_views) ? ($listing->listing_views[0]->views): 0,
                    'ratings' => $listing->has('listing_reviews') && !empty($listing->listing_reviews) ? ceil($listing->listing_reviews[0]->rating): 0,
                    'id' => $listing->id,
                    'url' => h($listing->url),
                    'email' => h($listing->email),
                    'description' => h($listing->description)

                ]);
            ?>


            <?php endforeach; ?>

            
        </div>
       
    </div>
</div>