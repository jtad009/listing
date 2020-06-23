<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" >
    
<div class="row">
    <div class="col-lg-10 col-md-10 mx-auto">
        <div class="col-lg-12 mt-3">
                
                <?php $this->Html->addCrumb('Dashboard', ['controller'=>'articles','action'=>'index','prefix'=>false,'plugin'=>'Blog']); ?> 
                <?php $this->Html->addCrumb('Author ',null); ?>
                <?php $this->Html->addCrumb('Edit', null); ?>
                
                <?=  $this->Html->getCrumbList();?>
                <?= $this->Flash->render() ?>
      

<div class="users card bg-dark">
    <?= $this->Form->create($user, ['type'=>'file']) ?>
    <fieldset class="card-body">
        <h4 class="card-title text-center text-white"><?= __('Edit User') ?><hr/></h4>
        <?php
            
            echo $this->Form->input('first_name',['class'=>'form-control']);
            echo $this->Form->input('last_name',['class'=>'form-control']);
           echo $this->Form->input('last_name',['class'=>'form-control']);
           echo $this->Form->input('email',['class'=>'form-control']);
           echo $this->Form->input('image',['type'=>'file', 'class'=>'form-control']);
           echo $this->Form->input('username',['class'=>'form-control']);
           echo $this->Form->input('password',['class'=>'form-control']);
            echo $this->Form->input('bio',['class'=>'form-control']);

        ?>
        <?= $this->Form->button(__('UPDATE USER'), ['class'=>'btn btn-block btn-primary']) ?>
    </fieldset>

    <?= $this->Form->end() ?>
      </div>
</div>
</div>
</div>
</div>