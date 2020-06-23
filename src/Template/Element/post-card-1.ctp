<div class="col-md-12 col-lg-4 mb-2" data-aos="zoom-in">
    <div class="card border-0 blogCard" >
        
        <?= $this->Html->image($image, ['alt'=>$slug, 'class'=>'card-img-top']) ?>
        <div class="card-body">
            <h4 class="card-title d-none"></h4>
            <p class="card-text"><?= $title ?></p>
            <?= $this->Html->link('Read More', ['controller'=>'articles', 'action'=>'view', $slug ], ['rel'=>"canonical",'class'=>'float-right'])?>
            
        </div>
    </div>
</div>