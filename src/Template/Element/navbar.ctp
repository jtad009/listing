
<nav class="navbar navbar-expand-lg navbar-light header" id="header">
    <a class="navbar-brand " href="/">
       <span class="logo" style="color:var(--primary-color)">Business</span>
        <p class="logo-sub" >by Skole</p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <?= $this->Html->link('Users', ['controller' => 'users', 'action' => 'index', 'plugin' => 'Users'], ['class' => isset($page) && $page === 'users' ? ' nav-link active' :  'nav-link']) ?>

            </li>
            
            <li class="nav-item">
                <?= $this->Html->link('Listings', ['controller' => 'listings', 'action' => 'index', 'plugin' => 'Directory'], ['class' => isset($page) && $page === 'listing' ? 'nav-link active' :  'nav-link']) ?>
            </li>
        </ul>
           
    </div>
    
</nav>