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
                    <li class="breadcrumb-item"><?= h($listing->business_name) ?></li>
                </ol>
            </nav>
        </nav>
        <?php if(isset($_SESSION['Auth'])): ?>
        <div class="d-flex mb-3">
            <a data-aos="zoom-in" class="btn btn-primary mr-3" href="#" id="approve" data-val="<?= $listing->approved ? 1: 0 ?>" data-id="<?= $listing->id  ?>"><?= $listing->published ? 'Approve Listing' : 'Un-Approve Listing' ?></a>
            <a data-aos="zoom-in"  class="btn btn-primary" href="#" id="publish" data-val="<?= $listing->published ? 1 : 0 ?>" data-id="<?= $listing->id  ?>"><?= $listing->published ? 'Publish Listing' : 'Unpublish Listing' ?></a>
        </div>
        <?php endif; ?>
        <div class="card border-0 blogCard">
            <div class="card-header d-flex">
                <h3 class=" title">Business Name: <?= h($listing->business_name) ?></h3>
                <div class="float-right d-flex justify-content-end" style="width:60%">
                        <p class="views"><?= $listing->has('listing_views') && !empty($listing->listing_views) ? ($listing->listing_views[0]->views) : 0 ?> </p>
                        <p class="ratings"><?= $listing->has('listing_reviews') && !empty($listing->listing_reviews) ? ($listing->listing_reviews[0]->rating) : 0 ?> </p>
                    </div>
            </div>
           
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
                    <th scope="row"><?= __('Categories') ?></th>
                    <td><?= $listing->has('categories') ? $categories : '' ?></td>
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
                <?php if (!empty($listing->listing_images)) : ?>

                    <div class="row">
                        <?php foreach ($listing->listing_images as $listingImages) :

                        ?>

                            <div class="col-md-3">
                                <?= $this->Html->image($listingImages->path, ['class' => 'img img-fluid']) ?>
                            </div>


                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
            </div>

        </div>
    </div>
</div>