<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $distributor
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <nav class="mt-5" id="actions-sidebar">

                <br />
                <br />
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><?= $this->Html->link(__('List Distributors'), ['action' => 'index']) ?></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $this->Form->postLink(
                                                                                __('Delete'),
                                                                                ['action' => 'delete', $distributor->id],
                                                                                ['confirm' => __('Are you sure you want to delete # {0}?', $distributor->id)]
                                                                            )
                                                                            ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <div class="card bg-blog">
                <div class="card-body">
                    <?= $this->Form->create($distributor) ?>

                    <legend><?= __('Edit Distributor') ?></legend>

                    <div class="row">
                        <div class="col-sm-6 form-group">

                            <label>First Name <span class="text-danger">*</span></label>
                            <?= $this->Form->control('first_name', ['label' => false, 'class' => 'form-control']) ?>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>last Name <span class="text-danger">*</span></label>
                            <?= $this->Form->control('last_name', ['label' => false, 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span></label>
                        <?= $this->Form->control('email', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <label>Phone<span class="text-danger">*</span></label>
                        <?= $this->Form->control('phone', ['label' => false, 'class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <label>Seller Type<span class="text-danger">*</span></label>
                        <?= $this->Form->control('seller_type', ['label' => false, 'class' => 'form-control', 'options'=>['Reseller'=>'Reseller', 'Wholesaler'=>'Wholesaler', 'Distributor'=>'Distributor']]) ?>
                    </div>
                    <div class="form-group">
                        <label>Business Name<span class="text-danger">*</span></label>
                        <?= $this->Form->control('business_name', ['label' => false, 'class' => 'form-control']) ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">

                            <label>State<span class="text-danger">*</span></label>
                            <?= $this->Form->control('business_location_state', ['label' => false, 'class' => 'form-control','options'=>$states]) ?>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>City<span class="text-danger">*</span></label>
                            <?= $this->Form->control('business_location_city', ['label' => false, 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <?= $this->Form->button(__('Submit'),  ['class' => 'btn btn-primary btn-block']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>