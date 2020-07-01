<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="col-lg-12 mt-3">
        <br />
        <br />
        <br />
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><?= $this->Html->link(__('Dashboard'), ['controller' => 'categories','action'=>'index','plugin'=>'blog']) ?></li>
            <li class="breadcrumb-item"><?= $this->Html->link(__('Reviews'), ['action' => 'index']) ?></li>
            <li class="breadcrumb-item active"><?= $this->Html->link(__('Add'), ['action' => 'add']) ?></li>
          </ol>
        </nav>
        <div class="articles card <?= BG ?>">
    <?= $this->Form->create($review) ?>
    <fieldset class="card-body">
        <legend class="card-title text-center text-white"><?= __('Add Review') ?></legend>
        <?php
            echo $this->Form->control('title' ,['placeholder'=>'title','templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);
            echo $this->Form->control('link',['placeholder'=>'Link to publication','templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);
            echo $this->Form->control('publish_date',['placeholder'=>'EXAMPLE FORMAT JULY 3, 2019','templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);
            echo $this->Form->control('logo',['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);
        ?>
        <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary btn-block']) ?>
    </fieldset>
    
    <?= $this->Form->end() ?>
        </div>
</div>
    </div>
  </div>
</div>

