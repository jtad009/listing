<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $distributor
 */
?>
<div class="container-fluid">
    <div class="row">
       
        <div class="col-lg-10 col-md-10 mx-auto">
            <br/>
            <br/> <br/>
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><?= $this->Html->link(__('List Distributors'), ['action' => 'index']) ?> </li>s
                <li class="breadcrumb-item"><?= $this->Html->link(__('Edit Distributor'), ['action' => 'edit', $distributor->id]) ?> </li>
                <li class="breadcrumb-item"><?= $this->Form->postLink(__('Delete Distributor'), ['action' => 'delete', $distributor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $distributor->id)]) ?> </li>
                <li class="breadcrumb-item"><?= $this->Html->link(__('List Distributors'), ['action' => 'index']) ?> </li>
                <li class="breadcrumb-item"><?= $this->Html->link(__('New Distributor'), ['action' => 'add']) ?> </li>
            </ol>
        </nav>
        <div class="card " style="margin-top: 17px">
            <h3 class="card-header">Distributor</h3>
            <table class="table table-sm">
               
                <tr>
                    <th scope="row"><?= __('First Name') ?></th>
                    <td><?= h($distributor->first_name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Last Name') ?></th>
                    <td><?= h($distributor->last_name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Email') ?></th>
                    <td><?= h($distributor->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Phone') ?></th>
                    <td><?= h($distributor->phone) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Seller Type') ?></th>
                    <td><?= h($distributor->seller_type) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Business Name') ?></th>
                    <td><?= h($distributor->business_name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Business Location City') ?></th>
                    <td><?= h($distributor->business_location_city) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Business Location State') ?></th>
                    <td><?= h($distributor->business_location_state) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($distributor->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($distributor->modified) ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>