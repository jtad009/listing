<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
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
<div class="card mb-4">
    <?= $this->Form->create($category) ?>
    <div class="card-body">
        <legend class="card-title title"><?= __('Edit Category') ?></legend>
        <?php
            echo $this->Form->control('category' ,['class'=>'form-control']);
            echo $this->Form->control('listing_count', ['class'=>'form-control']);
            echo $this->Form->control('unpublished');
        ?>
         <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
    </div>
   
    <?= $this->Form->end() ?>
</div>
    </div>
</div>
