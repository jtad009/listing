<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <nav class="large-3 medium-4 columns mt-3" id="actions-sidebar">
                <br />
                <br />
                <br />
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Subscriptions</li>
                    </ol>
                </nav>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <h3 class="card-header"><?= __('Subscriptions') ?></h3>
                <table class="table table-bordered table-sm table-stripped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('mail_chip_id') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('email') ?></th>
                            <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" style="font-size: 14px !important;" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($subscriptions as $subscription) : ?>
                            <tr>
                                <td><?= h($subscription->email_id) ?></td>
                                <td><?= h($subscription->email) ?></td>
                                <td><?= h($subscription->created) ?></td>
                                <td class="actions">
                              
                                        <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $subscription->id], ['class' => 'btn-link btn-sm', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'Edit']) ?>
                                        <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $subscription->id], ['data-toggle' => 'tooltip', 'title' => 'Delete', 'class' => 'btn-link btn-sm text-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $subscription->id)]) ?>
                                 </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

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
</div>