<?= $this->Html->css('target.css') ?>
<?php 
    $this->assign('title', 'Doubble Fixed- See our investment plans and start investing today');
    $this->assign('pageDescription', 'A wide array of choices to suit your financial capability and your goals. Doubble gives you investment options and products that help you build wealth');
?>
<?= $this->element('productHeader', [
    'title' => 'Doubble Fixed',
    'subtitle' => 'Invest for your future in Naira & Dollars.',
    'image' => '/img/fixed-investment/bg.png',
    'description' => 'The fixed investment plan allows you to invest or save a fixed amount of money for a minimum of
    30 days and earn up to 5% per annum interest rate at maturity.
    You can invest in Naira or US dollars and you get all your funds plus interest at maturity.'
]) ?>
<div class="row ">
    <div class="five col-md-12 p-0">

        <?= $this->element('product-section-blue-top', [
            'title' => 'Fixed Investment Products',
            'subtitle' => 'Naira Fixed investments',
            'description' => 'The Naira fixed investment product is for everyone who wants
                            to get more returns on their existing Naira savings. Many times, you get the
                            exact same amount or sometimes even less than your initial deposit in your
                            saving account from deductions and charges to your account.
                            <br />
                            Our fixed Naira product takes care of such losses and guarantees that your
                            savings account becomes an investment with no added risk.
                            <br />You can earn up to 5% interest per annum with a minimum tenure of 30 days and a
                            minimum deposit of N50,000.',
            'image' => 'fixed-investment/Naira-fixed-investments-animation.gif'
        ]) ?>

        <?= $this->element('product-section-wh', [

            'subtitle' => 'Dollar Fixed Investments',
            'description' => 'The Dollar fixed investment product is for everyone who wants to
                            get more returns on their existing Dollar savings. Many times, you get the exact
                            same amount or sometimes even less than your initial deposit in your regular
                            domiciliary account from deductions and charges to your account.<br />
                            Our fixed Dollar product takes care of such losses and guarantees that your savings
                            account becomes an investment with no risk whatsoever.<br />
                            You can earn up to 2.5% per annum in interest with a minimum tenure of 30 days and a
                            minimum amount of US$500.',
            'image' => 'fixed-investment/Dollar-fixed-investments-animation.gif'
        ]) ?>
    </div>




</div>

<div class="row " id="calculator" style="background-color: var(--secondary-color);">
    <div class="col-md-12 mb-4">
        <br />
        <br />
        <h2 class="title  text-center mt-3">Fixed Investment Calculator</h2>
        <p class="text-center small"><small class="subtitle ">Calculate your fixed investment now Enter your
                Target
                Amount & select your options.</small></p>
    </div>
    <div class="col-md-10 mx-auto  ">
        <div class="row details">
            <div class="col-md-12 col-lg-8" style="padding: 0px 70px;">
                <form class="form-horizontal fixedForm">
                    <div class="form-group d-flex">
                        <label for="FixedAmount" class="control-label col-sm-4">Amount to Fix is:</label>
                        <div class="col-sm-8">
                            <input type="text" onkeypress="validate(event)" id="fixedAmount" class="form-control mx-sm-12" aria-describedby="FixedAmount" placeholder="Fixed amount" onkeyup="addCommas($(this))">
                        </div>


                    </div>

                    <div class="form-group d-flex">
                        <label for="FixedCurrency " class="control-label col-sm-4">I want it in:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="fixedCurrency" name="currency">
                                <option>Select prefered currency</option>
                                <option value="NGN">Naira currency</option>
                                <option value="USD">Dollar currency</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label for="duration" class="control-label col-sm-4">I want my returns
                            in:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="duration">
                                <option selected="" disabled="" value="Select an Option">Select an Option
                                </option>
                                <option value="30" class="forUSD">30 Days</option>
                                <option value="60" class="forUSD">60 Days</option>
                                <option value="90" class="forUSD">90 Days</option>
                                <option value="180">180 Days</option>
                                <option value="360">360 Days</option>
                            </select>

                            <small id="passwordHelpBlock" class="form-text text-danger">
                                Enter a value not less than 6 months
                            </small>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-12 col-lg-4 mb-3">
                <h6 class="center-vertical-28 text-center mb-3" style="color:var(--primary-color);font-size:var(--font-small-16); ">Your return is
                </h6>
                <h4 id="fixedReturns" class="center-vertical-28 text-center" style="font-size:var(--font-title-3); color:var(--primary-color); font-weight: bold; line-height:48px">
                    NGN 0
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <p class="text-center">

            <a href="https://apply.doubble.ng/" target="_blank" class="btn btn-primary text-center" data-aos="zoom-in">START INVESTING</a>
            <br />
            <br />
        </p>
    </div>
</div>
<!-- Callout section  -->
<?= $this->element('callout') ?>
<!-- End Callou section  -->
<!-- Testimonial section  -->
<?= $this->element('testimonial', [
    'image' => 'fixed-investment/testimonial.png',
    'testimonial' => 'Before I discovered Doubble, I always thought investing in forex was complicated. I am now able to save, invest and earn interests in dollars. Doubble Fixed Investment has made it super easy for me to grow my money.',
    'client' => 'Nkoyo Andrews'
]) ?>
<!-- End Testimonial section  -->


<?= $this->Html->script('script') ?>