<div style="background:var(--theme-three)">
    <div class="col-md-12 mb-4">
        <br />
    </div>
    <div class="col-md-10 mx-auto   " data-aos="zoom-in">
        <div class="row">
            <div class="col-md-12 col-lg-6 mt-3 text-center" style="align-items: flex-end;display: flex;">
                <?= $this->Html->image($image, ['style' => "width:" . ($width ?? 65) . "%", 'class' => "ml-auto mr-auto img d-none d-lg-block img-fluid "]) ?>
                <?= $this->Html->image($image, ['class' => "img d-block d-lg-none  w-100 img-fluid"]) ?>
                <!-- <img src="img/rewards-investment/Doubble-10-animation.gif" style="width:75%" class="ml-auto mr-auto img d-none d-lg-block img-fluid " />
                        <img src="img/rewards-investment/Doubble-10-animation.gif" class="img d-block d-lg-none  w-100 img-fluid" /> -->
            </div>
            <div class="col-md-12 col-lg-6 my-auto ">

                <div class=" b-card3  text-justify" style="background: transparent !important;">
                    <h6 class="title mt-4"> <?= !isset($logo) ? $subtitle : $this->Html->image($logo, ['height'=>'60', 'class'=>'d-none d-lg-block']) ?> </h6>
                    <p class="subtitle text-justify lh"> <?= $description ?>


                    </p>
                    <p class="d-flex">
                        <a href="#calculator" class="btn btn-primary-outline text-center mr-3">CALCULATE
                            REWARD</a>
                        <a href="https://apply.doubble.ng/" target="_blank" class="ml-3 btn btn-primary text-center" data-aos="zoom-in">START INVESTING</a>
                    </p>
                </div>
            </div>
            <div class="col-md-12 d-block d-lg-none mb-4">
                <br />
                <br />

            </div>
        </div>
    </div>
</div>