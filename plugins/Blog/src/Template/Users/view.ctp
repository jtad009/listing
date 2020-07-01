<?php
/**
  * @var \App\View\AppView $this
  */

?>
<style>
  .list-group-item{
    border:none !important;
  }
  </style>
<div class="container-fluid" >
<div class="row">
    <div class="col-lg-10 col-md-10 mx-auto">
<div class="col-lg-12 mt-3">
               
                <?= $this->Flash->render() ?>
      
    
  <br/>
  <br/>
  <br/>
  
     
        <div class=" card mt-3 mb-3">
          <div class="row">
             <div class="col-sm-10">
              <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile<?= $this->Html->link('Edit Profile',['controller'=>'users','action'=>'edit',$user->id],['class'=>'btn btn-primary pull-right'])?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name: </strong></span> <?= h($user->fullname)?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Username: </strong></span> <?=$user->username?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Article Count: </strong></span> <?= $this->Number->format($user->article_count) ?></li>
                  <div class="col-sm-12 mt-2">
                        <h4><?= __('Bio') ?></h4>
                        <?= $this->Text->autoParagraph(h($user->bio)); ?>
                    </div>

            </ul>
             </div>
             <div class="col-sm-2">
                  <a href="#" class="pull-right">

                  <!-- <img title="profile image" class="img-circle img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBG685vI07-3MsuqJxjCfzIabfFJJG-8yM-ppvjjNpD5QNtWNE4A"> -->
                   <?= !file_exists(WWW_ROOT.DS.'img/passport/author/'.$user->image) ? $this->Html->image('avatar.png',['class'=>'img  img-fluid img-thumbnail','title'=>'profile image']): $this->Html->image('passport/author/'.$user->image,['class'=>'img  img-fluid img-thumbnail','title'=>'profile image'])?>
              </a>
            </div>
          </div>
           
            
            <br/>
    <!-- <h3 class="card-title">Profile</h3> -->
   
      
</div>
 <div class=" card mt-3 mb-3">
  

   <div class=" card-body">
<h4 class="mb-3">User Articles<hr/></h4>
    <?php foreach ($user->articles as $article) : ?>

        <article class="post-preview">
            <?= $this->Html->link('<h2 class="post-title">'.$article->title.'</h2>',['controller'=>'articles','action'=>"view", $article->slug],['class'=>'text-primary', 'escape'=>false])?>
          
                <p class="post-subtitle text-muted small"><?= $article->extractExcerpt ?></p>

           
            <div class="post-meta">Posted on <?= date('M d, Y', strtotime($article->created)) ?> ·
             <span class="reading-time" title="Estimated read time">

                    <?= $article->readTime?> mins read </span>
                    &nbsp;<span class="reading-time" data-toggle="tooltip" title="Estimated read time"> <i class="fa fa-folder-o"></i>&nbsp; <?= $article->category->category ?></span>
                    &nbsp;<span class="reading-time" data-toggle="tooltip" title="views"> <i class="fa fa-eye"></i>&nbsp; <?= $article->view_count ?> views</span>
                        &nbsp;<span class="reading-time" data-toggle="tooltip" title="Edit post"> <i class="fa fa-edit"></i>&nbsp; <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $article->id]) ?>
                   </span>
                   &nbsp;<span class="reading-time" data-toggle="tooltip"  title="Delete">&nbsp;  <?= $this->Form->postLink(__(' <i class="fa fa-trash"></i>'), ['controller' => 'Articles', 'action' => 'delete', $article->id], ['escape'=>false,'class'=>'text-danger ','confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?></span>
            </div>
        </article>

        <hr>
        <?php endforeach; ?>
      </div>
</div>
</div>
 </div>
</div>


