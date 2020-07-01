<div class="col-md-12 col-lg-4 mx-auto  " data-aos="zoom-in"" data-aos=" zoom-in">
    <div class="d-block d-lg-none"><br /></div>
    <div class="card border-0 rounded-bottom mb-3">

        <?= $this->Html->image($image, ['alt' => $title, 'class' => 'card-img-top w-100']) ?>
        <div class="card-body ">
            <b class="card-title d-none d-lg-block text-center" style="font-size: 16px;"><?= $title ?></b>
            <b class="card-title d-block d-lg-none pt-2 pb-2 text-center details" style="font-weight: 600; "><?= $title ?></b>

            <p class="card-text d-none d-lg-block text-justify" style="line-height: 33px; font-size: 14px;"><?= $description ?></p>
            <p class="card-text d-block d-lg-none text-justify details" style="line-height: 53px;"><?= $description ?></p>


        </div>
    </div>
    <div class="d-block d-lg-none"><br /></div>
</div>