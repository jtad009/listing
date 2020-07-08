<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listing
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $listing
 */
?>
<div class="row">
    <div class="col-md-10 mx-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link(__('Categories'), ['action' => 'index']) ?></li>
                <li class="breadcrumb-item"><?= 'Edit Listing' ?></li>
            </ol>
        </nav>

<div class="card">
    <?= $this->Form->create($listing) ?>
    <div class="card-body">
        <legend class="card-title title"><?= __('Add Listing') ?></legend>
        <?php
            echo $this->Form->control('business_name',['class'=>'form-control']);
            echo $this->Form->control('description',['class'=>'form-control']);
            echo $this->Form->control('url',['class'=>'form-control']);
            echo $this->Form->control('email',['class'=>'form-control']);
            echo $this->Form->control('phone',['class'=>'form-control']);
            echo $this->Form->control('address',['class'=>'form-control']);
            echo $this->Form->control('state_id', ['options' => $states]);
           
        ?>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    </div>
    
    <?= $this->Form->end() ?>
</div>
</div>
</div>

