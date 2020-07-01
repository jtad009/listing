<?= $this->Html->css('style.css') ?>
<?php 
$this->assign('title','Doubble by Sterling Bank Plc');
?>
<div class=" row one">
    <div class="col-sm-3 d-none d-lg-block">
        <h1 class="title" data-aos="zoom-in" style="font-size: 50px!important;">

            The Wealth you
            want tomorrow,
            Starts Here.
        </h1>
        <p class="subtitle" style="top: 253px !important; font-size:20px !important;" data-aos="zoom-in"> Save and Invest for your future in Naira & Dollars</p>
        <a href="https://apply.doubble.ng/" target="_blank" style="top: 309px !important;" class="btn btn-primary" data-aos="zoom-in">INVEST
            NOW</a>
    </div>
    <div class="col-sm-7 d-block d-lg-none d-xl-none">
        <h1 class="title-sm" data-aos="zoom-in">

            The Wealth you
            want tomorrow,
            Starts Here.
        </h1>
        <p class="subtitle-sm details" data-aos="zoom-in"> Save and Invest for your future in Naira & Dollars</p>
        <br />
        <br />
        <a href="https://apply.doubble.ng/" target="_blank" class="btn btn-primary mt-4 sm-screen" data-aos="zoom-in">INVEST NOW</a>
    </div>


</div>
<div class="row two" style="padding-right: 90px; padding-left: 90px;">
    <div class="col-sm-12 col-lg-10 mx-auto my-auto">
        <div class="row ml-auto my-auto mr-auto mt-3">
            <?= $this->Element('homepage-section-2-card', ['image' => 'homepage/low-risk-returns.png', 'title' => 'Low Risk, High Returns', 'description' => ' You are not just saving, but investing in a guaranteed system that has very little risk but gives very high returns.']) ?>
            <?= $this->Element('homepage-section-2-card', ['image' => 'homepage/save-towards-a-goal.png', 'title' => 'Save towards a Goal', 'description' => "Whether you're saving towards paying your rent, funding your business, education or just saving for the future,
                    there's an investment plan that suits you on Doubble."]) ?>
            <?= $this->Element('homepage-section-2-card', ['image' => 'homepage/bank-grade-security.png', 'title' => 'Bank-Grade Security', 'description' => ' Doubble is backed by a commercial bank that has been in business for about 60 years and whose funds are protected and insured by the NDIC.']) ?>
        </div>
    </div>
</div>

<div class="row three">
    <div class="col-md-12 mb-4">
        <br />
        <br />
        <h2 class="title  text-center mt-4 d-block d-lg-none" style="font-size:48px;">Products</h2>
        <h2 class="title  text-center mt-4 d-none d-lg-block" style="font-size:30px;">Products</h2>
    </div>
    <br />
    <div class="col-md-10 mx-auto mt-4 " data-aos="fade-in-right">
        <div class="row">
            <div class="col-sm-12 col-lg-5 ml-auto rounded" style="align-items: flex-end;display: flex;position:relative;background-color:var(--theme-three);margin-right:30px">
                <?= $this->Html->image(
                    'homepage/products-animation-homepage-2.gif',
                    ['alt' => 'products', 'class' => 'img img-fluid img-m', 'style' => "text-align: center;display: block;min-width: -webkit-fill-available;min-width: -moz-available;"]
                ) ?>

            </div>
            <div class="p-0 col-md-12 col-lg-5  mr-auto accordionDiv" data-aos="fade-in-right">
                <div class=" b-card3 details" style="margin-bottom: 0px; padding-left: 1em; padding-right:1em;">
                    <h6 class=" mb-4 d-none d-lg-block" style="font-size: 24px;color: var(--primary-color);font-weight: bold;"> Rewards Investment</h6>
                    <h6 class="title mb-4 d-block d-lg-none " style="font-size: 40px;"> Rewards Investment </h6>


                    <p class="subtitle d-none d-lg-block text-justify" style="font-size: 14px;color: var(--primary-color);font-weight: 100;">
                        With Doubble rewards investment plans, you can make monthly contributions over a period of time and make as much as twice your money in value.<br /> Explore the Doubble rewards variants below:
                    </p>
                    <p class="subtitle details d-block d-lg-none text-justify">
                        With Doubble rewards investment plans, you can make monthly contributions over a period of time and make as much as twice your money in value. <br />Explore the Doubble rewards variants below:
                    </p>
                    <div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 details">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Doubble 3
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body details text-justify">
                                        This is a 6 - year investment contract that offers a 25% return on invested funds. Monthly contributions are made by you for the first 3 years and your invested amount plus returns are paid to you every month for the next 3 years.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0 details">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Doubble 5
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body details text-justify">
                                        This is a 10-year investment contract that offers a 50% profit on the money you invest. Monthly contributions are made by you for the first 5 years and your invested amount plus returns are paid to you every month for the next 5 years.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0 details">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Doubble 10
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body details text-justify">
                                        This is a 15-year plan that offers a 100% profit on the money you invest.Monthly contributions are made by you for the first 5 years and your invested amount plus returns are paid to you every month for the next 10 years.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 details">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Doubble Lumpsum
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body details text-justify">
                                        is a 10-year investment plan. Contribution is made in one bulk amount and you get double your money starting from year 6 to year 10.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="reward.html" class="btn btn-primary mt-3 mb-3" data-aos="zoom-in">LEARN MORE</a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-10 mx-auto mt-4 " data-aos="fade-in-right">
        <div class="row">
            <div class="col-md-12 col-lg-5 b-card3 details ml-auto" style="margin-right:30px;padding-left: 1em; padding-right:1em;padding-bottom:20px;">
                <h6 class=" mb-4 d-none d-lg-block" style="font-size: 24px;color: var(--primary-color);font-weight: bold;"> Target Investment</h6>
                <h6 class="title mb-4 d-block d-lg-none " style="font-size: 40px;"> Target Investment </h6>
                <p class="subtitle d-none d-lg-block text-justify" style="font-size: 14px;color: var(--primary-color);font-weight: 100;">
                    Save towards a goal or target amount in Naira or USD and earn attractive
                    interest rates towards meeting your goals
                </p>
                <p class="subtitle details d-block d-lg-none text-justify">
                    Save towards a goal or target amount in Naira or USD and earn attractive
                    interest rates towards meeting your goals
                </p>

                <a href="target.html" class="btn btn-primary" data-aos="zoom-in">LEARN MORE</a>
            </div>
            <div class="col-md-12  col-lg-5 b-card3 details  mr-auto" style="padding-left: 1em; padding-right:1em;padding-bottom:20px;">
                <h6 class=" mb-4 d-none d-lg-block" style="font-size: 24px;color: var(--primary-color);font-weight: bold;"> Fixed Investment</h6>
                <h6 class="title mb-4 d-block d-lg-none " style="font-size: 40px;"> Fixed Investment </h6>
                <p class="subtitle d-none d-lg-block text-justify" style="font-size: 14px;color: var(--primary-color);font-weight: 100;">
                    Earn the best interest rates available in Nigeria on your existing Naira
                    and USD savings with the Doubble fixed investemt plan.
                </p>
                <p class="subtitle details d-block d-lg-none text-justify">
                    Earn the best interest rates available in Nigeria on your existing Naira
                    and USD savings with the Doubble fixed investemt plan.
                </p>


                <a href="fixed.html" class="btn btn-primary " data-aos="zoom-in">LEARN MORE</a>
            </div>


        </div>
    </div>
</div>
<?= $this->Element('review-section') ?>

<div class="row five " style="padding-left: 90px; padding-right: 90px;">
    <div class="col-md-12 mb-4">
        <br />
        <br />
        <h2 class="d-none d-lg-block title  text-center mt-3" style="font-size:var(--font-small-24);">Do More Than Just Invest</h2>
        <h2 class="d-block d-lg-none title  text-center mt-3" style="font-size:48px">Do More Than Just Invest</h2>
    </div>
    <div class="col-md-10 mx-auto">


        <div class="row mx-auto">
            <?= $this->Element('invest-section', ['image' => 'homepage/gift-your-investment.png', 'title' => 'Gift Your Investment', 'description' => "You can give the best gift known to man - Money. Simply open an investment plan in the beneficiary’s name and account number and they start earning returns."])?>
            <?= $this->Element('invest-section', ['setBG'=>'style="background: var(--primary-color);"', 'image' => 'homepage/iphonex.png', 'title' => ' Decide Your Payback Plan', 'description' => " We have designed a flexible interest payment schedule that allows you to decide when to receive your interest repayment, either monthly or as a lump sum."])?>
            <?= $this->Element('invest-section', ['image' => 'homepage/self-service.png', 'title' => 'Self Service', 'description' => "You can start your investment process all by yourself on this platform and select a convenient date and time for your investment to commence."])?>
        </div>
    </div>

</div>

<?= $this->element('callout') ?>
<?= $this->element('testimonial', [
    'image' => 'homepage/testimonial.png',
    'testimonial' => 'I am not the most disciplined individual when it comes to my finances. Doubble has proven to be a great savings platform for me since I started using it last year. It makes it easy for me to meet my savings goals and practice financial discipline. I stan Doubble.',
    'client' => 'Elomena Momoh'
]) ?>