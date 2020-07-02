<div class="col-md-12 col-lg-4  mb-2" data-aos="zoom-in">

  <div class="card border-0 secondary-color blogCard h-100 last-card" style="">
  <?= $this->Html->image('passport/blogs/'.$image, ['alt' => $slug, 'class' => 'card-img-top']) ?>
   
    <div class="card-body">
      <h4 class="card-title d-none"></h4>
      <p class="card-text"><?= $title ?></p>
      <br />
      <span class="position-absolute readTime"><?= strtoupper($readTime) ?></span>
      <?= $this->Html->link(strtoupper('Read More'), ['controller' => 'articles', 'action' => 'view', $slug], ['rel'=>"canonical",'class' => 'position-absolute float-right']) ?>
    </div>
  </div>
</div>