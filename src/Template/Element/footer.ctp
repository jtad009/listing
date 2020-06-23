<div class="row footer">

    <div class="col-sm-12 col-lg-3 " style="min-height: inherit;">
        <a class="navbar-brand " href="/">
            <?= $this->Html->image('logo.svg', ['class' => 'logo']) ?>

            <p class="logo-sub">by Sterling Bank</p>
        </a>
    </div>
    <div class="spacer" style="width:60px"></div>
    <div class="d-none d-lg-block col-sm-12 col-lg-2">
        <p class="title mt-3">Product</p>
        <p><?= $this->Html->link('Doubble Rewards', ['controller' => 'pages', 'action' => 'reward-product', 'plugin' => null], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('Doubble Target', ['controller' => 'pages', 'action' => 'target-product', 'plugin' => null,], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('Doubble Fixed', ['controller' => 'pages', 'action' => 'fixed-product', 'plugin' => null], ['class' => 'mt-1']) ?></p>
    </div>
    <div class="d-none d-lg-block col-sm-12 col-lg-2">
        <p class="title mt-3">Resources</p>
        <p><?= $this->Html->link('Blog', ['controller' => 'articles', 'action' => 'index', 'plugin' => 'Blog'], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('Reviews', ['controller' => 'pages', 'action' => 'review', 'plugin' => null,], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('FAQ', ['controller' => 'pages', 'action' => 'faqs', 'plugin' => null], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('T&C', ['controller' => 'pages', 'action' => 'terms', 'plugin' => null], ['class' => 'mt-1']) ?></p>

    </div>
    <!-- mobile view -->
    <div class="d-block d-lg-none col-sm-6 col-lg-2">
        <p class="title mt-3">Product</p>
        <p><?= $this->Html->link('Doubble Rewards', ['controller' => 'pages', 'action' => 'reward-product', 'plugin' => null], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('Doubble Target', ['controller' => 'pages', 'action' => 'target-product', 'plugin' => null,], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('Doubble Fixed', ['controller' => 'pages', 'action' => 'fixed-product', 'plugin' => null], ['class' => 'mt-1']) ?></p>


    </div>
    <div class="d-block d-lg-none col-sm-6 col-lg-2">
        <p class="title mt-3">Resources</p>
        <p><?= $this->Html->link('Blog', ['controller' => 'articles', 'action' => 'index', 'plugin' => 'Blog'], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('Reviews', ['controller' => 'pages', 'action' => 'review', 'plugin' => null,], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('FAQ', ['controller' => 'pages', 'action' => 'faqs', 'plugin' => null], ['class' => 'mt-1']) ?></p>
        <p><?= $this->Html->link('T&C', ['controller' => 'pages', 'action' => 'terms', 'plugin' => null], ['class' => 'mt-1']) ?></p>


    </div>
    <!-- end mobile view -->
    <div class="col-sm-12 col-lg-3 mr-auto d-none d-lg-block">
        <p class="title mt-3">Subcribe To Our Newsletter</p>

        <p class="social mt-2">
            <input class="form-control" placeholder="Enter your email" id="subscribe" name="subscribe"/>
            <a class="btn btn-primary mt-3 subscribe " >Subscribe</a>
            
            <div class="ml-3 spinner-grow colorBlue ml-5" role="status" >
                                <span class="sr-only">Loading...</span>
                            </div>
        </p>
        <!-- <p class="title mt-3">&nbsp;</p>
               <p><a href="#" class=" mt-1">Follow Us</a></p>
               <p class="social">
                   <a href="#" class=" mt-1 mr-2"><img src="img/social/twitter.svg" /></a>
                   <a href="#" class=" mt-1 mr-2"><img src="img/social/fb.svg" /></a>
                   <a href="#" class=" mt-1 mr-2"><img src="img/social/whatsapp.svg" /></a>
                   <a href="#" class=" mt-1 mr-2"><img src="img/social/msg.svg" /></a>
                   <a href="#" class=" mt-1 mr-2"><img src="img/social/ig.svg" /></a>
                   <a href="#" class=" mt-1"><img src="img/social/utube.svg" /></a>
               </p> -->

    </div>

</div>
<?= $this->Html->script('Blog.subscription') ?>