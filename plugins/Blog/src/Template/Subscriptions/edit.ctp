<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $subscription
 */
?>
<div class="container-fluid">
<br />
            <br />
            <br />
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><?= $this->Html->link(__('New Distributor'), ['action' => 'add']) ?></li>
                </ol>
            </nav>
            <?= $this->Flash->render() ?>
<div class="col-md-12 mx-auto">
<div class="card">
    <?= $this->Form->create($subscription) ?>
    <div class="card-body">
        <div class="card-title"><?= __('Edit Subscription email') ?></div>
        <?php
            echo $this->Form->control('email', ['class'=>'form-control']);
        ?>
        <br/>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary btn-block']) ?>
    </div>
    
    <?= $this->Form->end() ?>
</div>
</div>
</div>

