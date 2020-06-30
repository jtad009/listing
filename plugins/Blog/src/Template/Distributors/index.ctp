<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $distributors
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">

            <br />
            <br />
            <br />
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><?= $this->Html->link(__('New Distributor'), ['action' => 'add']) ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <div class="card">
                <h3 class="card-header"><?= __('Distributors') ?></h3>
                <table class="table table-sm table-responsive">
                    <thead>
                        <tr>

                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('name') ?></th>

                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('email') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('phone') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('seller_type') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('business_name') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('business_city') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('business_state') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('created') ?></th>

                            <th scope="col" style="font-size: 14px !important;" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($distributors as $distributor) : ?>
                            <tr style="font-size: 13px">

                                <td><?= h($distributor->first_name . ' ' . $distributor->last_name) ?></td>

                                <td><?= h($distributor->email) ?></td>
                                <td><?= h($distributor->phone) ?></td>
                                <td><?= h($distributor->seller_type) ?></td>
                                <td><?= h($distributor->business_name) ?></td>
                                <td><?= h($distributor->business_location_city) ?></td>
                                <td><?= h($distributor->business_location_state) ?></td>
                                <td><?= h($distributor->created) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $distributor->id], ['class' => 'btn-link btn-sm', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'View']) ?>
                                    <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $distributor->id], ['class' => 'btn-link btn-sm', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'Edit']) ?>
                                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $distributor->id], ['data-toggle' => 'tooltip', 'title' => 'Delete', 'class' => 'btn-link btn-sm text-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $distributor->id)]) ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-12">
            <div class="paginator mt-5">
                <p class="text-center small colorBlue" style="font-size: 12px"><?= $this->Paginator->counter(['format' => __('Showing items {{start}} - {{end}} of {{count}} ')]) ?></p>
                <ul class="pagination pagination-sm justify-content-center">

                    <?= $this->Paginator->numbers([
                        'modulus' => 1,
                        'first' => 1,
                        'last' => 1
                    ]) ?>

                    <?= $this->Paginator->next(__('<i class="fa fa-play"></i>'), ['escape' => false,]) ?>

                </ul>

            </div>
        </div>
    </div>
</div>