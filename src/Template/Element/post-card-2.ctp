<div class="col-md-12 col-lg-4 mb-2" data-aos="zoom-in">
    <div class="card border-0 blogCard">
        <?= $this->Html->image('passport/blogs/400/'.$image, ['alt' => $slug, 'class' => 'card-img-top']) ?>
        <div class="card-body">
            <h4 class="card-title d-none"></h4>
            <p class="card-text"><?= $title ?> </p>
            <p class="  <?= $showRead == false ? 'd-none' : 'd-flex justify-content-between' ?>" style="margin-bottom:0px">
                <span class="readTime"><?= strtoupper($readTime) ?></span>

                <?= $this->Html->link(strtoupper('Read More'), ['controller' => 'articles', 'action' => 'view', $slug], ['rel'=>"canonical",'class' => 'float-right']) ?>
            </p>
            <?= $showRead == true  ? '' :$this->Html->link(strtoupper('Read More'), ['controller'=>'articles', 'action'=>'view', $slug ], ['rel'=>"canonical",'class'=>'float-right'])?>
        </div>
    </div>
</div>