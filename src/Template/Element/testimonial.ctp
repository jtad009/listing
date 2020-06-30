<div class="row seven">
    <div class="col-md-12 col-lg-6 p-0">
        <?= $this->Html->image($image, ['class'=>"w-100 h-100 img img-fluid", 'style'=>"object-fit: cover;"]) ?>
        <!-- <img src="img/homepage/testimonial.png" class="w-100 h-100 img img-fluid" style="object-fit: cover;" /> -->
    </div>

    <div class="col-md-12 col-lg-6 my-auto p-4 details" style="box-sizing: border-box;">
        <br /><br />
        <p class="testimonial text-justify <?= $addClass ?? '' ?>" data-aos="zoom-in" style="box-sizing: border-box;margin-top: 30px;padding-right:80px; padding-left:50px">
            <?= $testimonial ?></p>
        <div class="d-flex" style="box-sizing: border-box;padding-right:50px; padding-left:50px">
            <span class=" text-left " style="color:var(--primary-color)" data-aos="zoom-in"> -  <?= $client ?> </span>
            <a href="#" class=" d-none text-right mt-3" style="position: absolute;right: 90px;color:var(--theme-three);" data-aos="zoom-in">Read
                More</a>
        </div>



    </div>

</div>