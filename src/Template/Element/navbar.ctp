
<nav class="navbar navbar-expand-lg navbar-light header" id="header">
    <a class="navbar-brand " href="/">
        <?= $this->Html->image('logo.svg', ['class' => 'logo']) ?>
        <p class="logo-sub">by Sterling Bank</p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <?= $this->Html->link('Home', ['controller' => 'pages', 'action' => 'home', 'plugin' => false], ['class' => isset($page) && $page === 'home' ? ' nav-link active' :  'nav-link']) ?>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown">
                    <?= $this->Html->link('Doubble Rewards', ['controller' => 'pages', 'action' => 'reward-product', 'plugin' => false], ['class' => isset($page) && $page === 'reward' ? ' dropdown-item active' :  'dropdown-item']) ?>
                    <div class="dropdown-divider"></div>
                    <?= $this->Html->link('Doubble Target', ['controller' => 'pages', 'action' => 'target-product', 'plugin' => false], ['class' => isset($page) && $page === 'target' ? ' dropdown-item active' :  'dropdown-item']) ?>
                    <div class="dropdown-divider"></div>
                    <?= $this->Html->link('Doubble Fixed', ['controller' => 'pages', 'action' => 'fixed-product', 'plugin' => false], ['class' => isset($page) && $page === 'fixed' ? ' dropdown-item active' :  'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Blog', ['controller' => 'articles', 'action' => 'index', 'plugin' => 'Blog'], ['class' => isset($page) && $page === 'Blog' ? 'nav-link active' :  'nav-link']) ?>

            </li>
            <li class="nav-item">
                <?= $this->Html->link('Reviews', ['controller' => 'Reviews', 'action' => 'index', 'plugin' => false], ['class' => isset($page) && $page === 'reviews' ? 'nav-link active' :  'nav-link']) ?>

            </li>
            <li class="nav-item">
                <?= $this->Html->link('FAQ', ['controller' => 'pages', 'action' => 'faqs', 'plugin' => false], ['class' => isset($page) && $page === 'faqs' ? 'nav-link active' :  'nav-link']) ?>

            </li>
            <?php if (isset($_SESSION['Auth']['User'])) :  ?>
                    <li class="nav-item ">
                        <?= $this->Html->link('ADMIN', ['controller' => 'users', 'action' => 'view', $_SESSION['Auth']['User']['id'], 'plugin' => 'blog'], ['class' => 'nav-link']) ?>
                        <!-- <a class="nav-link" href="distributor.html">DISTRIBUTOR</a> -->
                    </li>
            <?php endif; ?>

        </ul>
    </div>
</nav>