<div class="col-md-12 col-lg-4 mb-2" data-aos="zoom-in">
    <div class="card  blogCard" >
        
        <?= $this->Html->image($image, ['alt'=>$id, 'class'=>'card-img-top']) ?>
        <div class="card-body">
            <h5 class="card-title small">User-Type: <?= $role ?></h5>
            <p class="card-text "><?= $fullname ?></p>
            <?= $this->Html->link(strtoupper('View'), ['controller'=>'users', 'action'=>'view', $id ], ['rel'=>"canonical",'class'=>'float-right'])?>
            
        </div>
    </div>
</div>
