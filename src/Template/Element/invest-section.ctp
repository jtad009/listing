<div class="col-md-12 col-lg-4 p-4 mt-4 mb-4">
    <div class="row">
        <div class="col-md-12" <?= $setBG ?? '' ?>>
            <?= $this->Html->image($image, ['alt' => $title, 'class' => 'img w-100 img-fluid']) ?>

        </div>
        <div class="col-md-12">
            <div class=" b-card3 details">
                <h6 class=" d-none d-lg-block mt-3" style="font-size: 20px;color: var(--primary-color);font-weight: bold;"> <?= $title ?> </h6>
                <h6 class="title-sm d-block d-lg-none " style="font-size: 40px;"><?= $title ?> </h6>

                <p class="subtitle d-none d-lg-block text-justify" style="line-height:28px; font-size: 14px;color: var(--primary-color);font-weight: lighter;">
                    <?= $description ?>
                </p>
                <p class="subtitle d-block d-lg-none " style="font-size: 42px;">
                    <?= $description ?>
                </p>

            </div>
        </div>
    </div>
</div>