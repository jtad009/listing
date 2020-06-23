<?php
/**
  * @var \App\View\AppView $this
  */
?>
 <div class="container-fluid" >
        <div class="row">
 <div class="col-lg-8 col-md-10 mx-auto">
                 <div class="col-lg-12 mt-3">
                   <br/>
                   <br/>
                   <br/>
                    <?= $this->Flash->render() ?>
<div class="tags card bg-dark">
    <?= $this->Form->create($tag) ?>
    <fieldset class="card-body">
        <h4 class="card-title text-center text-white"><?= __('Edit Tag') ?><hr/></h4>
        <?php
             echo $this->Form->input('tag', ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],'class'=>'form-control']);
            echo $this->Form->input('articles._ids', ['options' => $articles, 'class'=>'form-control','style'=>'height:200px !important']);
        ?>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-block btn-primary']) ?>
    </fieldset>

    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
</div>

