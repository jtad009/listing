<div class="col-md-12 col-lg-4 mb-2" data-aos="zoom-in">
    <div class="card border-dark blogCard">
        <?= $this->Html->image($image, ['alt' => $fullname, 'class' => 'card-img-top']) ?>
        <div class="card-body">
            <h4 class="card-title"><?= $fullname ?></h4>
            <div class="card-body">
                
                <p class="card-text"><?= $description ?></p>
                <div  class="card-text">
                <p >Website: <?= $url ?></p>
                <p  >Email: <?= $email ?></p>
                </div>
                
             </div>
             <div class="float-left d-flex" style="width:60%">
                <p class="views"><?= $views ?> </p>
                <p class="ratings"><?= $ratings ?>  </p>
             </div>
            <p>
                <?= $this->Html->link(strtoupper('More'), ['controller'=>'listings', 'action'=>'view', $id ], ['rel'=>"canonical",'class'=>'float-right ','style'=>'font-size:1rem']) ?>
            </p>
           
        </div>
    </div>
</div>