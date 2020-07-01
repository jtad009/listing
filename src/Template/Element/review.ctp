<div class="col-md-8 mx-auto d-none d-lg-block">
    <p class="" style="color:var(--font-color-three); font-size: var(--font-small-16);line-height:17px"><?= $published ?></p>
    <div>
        <span style="color:var(--primary-color); font-size: 20px;line-height:24px">
            <a href="<?= $link ?>" style="color:var(--primary-color);" target="_blank">
                <?= $title ?>
            </a>
        </span>
        <?= $this->Html->image($logo, ['class' => "float-right", 'style' => $logo == "/img/review/this-day.svg" ?: "margin-top: -28px;"]) ?>
        <!-- <img src="img/review/y-naija.svg" class="float-right" style="margin-top: -40px;"/> -->
    </div>
    <br />
    <hr />
</div>

<div class="col-md-10 mx-auto d-block d-lg-none">
    <p class="" style="color:var(--font-color-three); font-size: var(--font-small-16);line-height:17px"><?= $published ?></p>
    <div>
        <span style="color:var(--primary-color); font-size: var(--font-small-24);line-height:24px">
            <a style="color:var(--primary-color);" target="_blank" href="<?= $link ?>"><?= $title ?></a>
        </span>
        <?= $this->Html->image($logo, ['class' => "float-right"]) ?>
        <!-- <img src="img/review/this-day.svg" class="float-right" height="50"/> -->
    </div>
    <br />
    <hr />
</div>