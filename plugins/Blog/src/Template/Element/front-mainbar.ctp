<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container">
        <?= $this->Html->link($this->Html->image(LOGO_PATH,['alt'=>APP_NAME,' height'=>'40']),['controller'=>'Pages','action'=>'home','plugin'=>false],['escape'=>false,'class'=>'navbar-brand'])?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <?= $this->Html->link('All Articles',['controller'=>'articles','action'=>'index'],['class'=>'nav-link'])?>
              
            </li>
            <?php if(isset($_SESSION['Auth']['User'])):?>
             <?php if($_SESSION['Auth']['User']['canWrite'] == 1):?>
            <li class="nav-item"> <?= $this->Html->link('My Profile',['controller'=>'users','action'=>'view', $_SESSION['Auth']['User']['id']],['class'=>'nav-link'])?></li>
            <li class="nav-item"> <?= $this->Html->link('New Article',['controller'=>'articles','action'=>'add'],['class'=>'nav-link'])?></li>
            <li class="nav-item"> <?= $this->Html->link('Categories',['controller'=>'categories','action'=>'index'],['class'=>'nav-link'])?></li>
           
            <li class="nav-item"> <?= $this->Html->link('Tags',['controller'=>'Tags','action'=>'index'],['class'=>'nav-link'])?></li>
             <?php endif;?>
             <!-- <li class="nav-item"> <?php $this->Html->link('Distributors',['controller'=>'distributors','action'=>'index'],['class'=>'nav-link'])?></li> -->
            <li class="nav-item"> <?= $this->Html->link('MailList',['controller'=>'subscriptions','action'=>'index'],['class'=>'nav-link'])?></li>
            <li class="nav-item"> <?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout'],['class'=>'nav-link'])?></li>
            <?php else:?>
             <li class="nav-item"> <?= $this->Html->link('AUTHOR SIGN IN',['controller'=>'users','action'=>'login'],['class'=>'nav-link'])?></li>
            <?php endif;?>
           
          </ul>
        </div>
      </div>
    </nav>
