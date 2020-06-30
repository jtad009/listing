<?= $this->Html->css('target.css') ?>
<?php 
    $this->assign('title', 'Doubble Target- See our investment plans and start investing today');
    $this->assign('pageDescription', 'A wide array of choices to suit your financial capability and your goals. Doubble gives you investment options and products that help you build wealth');
?>
<div class="row one d-none">
    <div class="d-none d-lg-block col-md-6 primary-color-bg  my-auto ">
        <div style="padding:60px 90px;" class="">
            <h6 class="title mt-4" style="margin-top:90px"> Doubble target</h6>
            <p style="font-size:16px; color: var(--primary-color); font-weight:bold"> Achieve your financial goals </p>
            <p class="text-justify" style="font-size:14px; color: var(--primary-color)">
                Our target investment plan does exactly what the name implies, helps you meet a financial goal or target without having to come up with the whole cash. Whether you are saving for a big life event like a wedding or you plan to get that MBA, you have the option of voluntary additional contributions, which can help you hit your targets
            </p>
            <p class="d-flex">

                <a href="https://apply.doubble.ng/" target="_blank" class=" btn btn-primary text-center" data-aos="zoom-in">START INVESTING</a>
            </p>
        </div>



    </div>
    <div class="d-block d-lg-none col-md-12 primary-color-bg  my-auto " style="">
        <div style="padding-top:60px; padding-left:40px; padding-right:40px" class="">
            <h6 class="title mt-4" style="margin-top:90px"> Doubble target</h6>
            <p style="font-size:36px; color: var(--primary-color); font-weight:600"> Achieve your short-term financial goals </p>
            <p class="text-justify" style="font-size:39px; color: var(--primary-color)">
                Our target investment plan does exactly what the name implies,
                helps you meet a financial goal or target without having to come up with the whole cash.
                Whether you are saving for a big life event like a wedding or you plan to get that MBA,
                you have the option of voluntary additional contributions, which can help you hit your targets
            </p>
            <br />
            <p class="text-center">

                <a href="https://apply.doubble.ng/" target="_blank" class=" btn btn-primary text-center" data-aos="zoom-in">START INVESTING</a>
            </p>
            <br />
        </div>



    </div>
    <div class="d-none d-lg-block col-md-6 secondary-color" style="background: url(<?= BASE_DOMAIN . 'img/target-investments/bg.png' ?>);background-position: 50% 100%;background-size: cover;">
        <img src="" class="img img-fluid" />
    </div>
</div>
<?= $this->element('productHeader', [
    'title' => 'Doubble target',
    'subtitle' => 'Achieve your financial goals',
    'image' => 'img/target-investments/bg.png',
    'description' => 'Our target investment plan does exactly what the name implies, 
    helps you meet a financial goal or target without having to come up with the whole cash. 
    Whether you are saving for a big life event like a wedding or you plan to get that MBA, 
    you have the option of voluntary additional contributions, which can help you hit your targets'
]) ?>


<div class="row ">
    <div class="five col-md-12 p-0">

        <?=
            $this->element('product-section-blue-top', [
                'title' => 'Target Investment Products',
                'subtitle' => ' Naira Target investments',
                'description' => 'The minimum target amount is N250,000</br>
                                Interest rate breakdown:</br>
                                4% p.a for plans with durations that are below 4 years </br>
                                4.5% p.a for plans whose duration range from 4 to 5 years</br>
                                5% p.a for contracts with a duration above 5 years. </br>
                                The minimum tenure is 1 year.',
                'image' => 'target-investments/Naira-target-investments-animation.gif'
            ])
        ?>

        <?= $this->element('product-section-wh', [

            'subtitle' => 'Dollar Target Investments',
            'description' => 'The minimum target amount is USD 5,000 <br />
                                Interest rate breakdown:<br />
                                4% p.a for plans with durations that are below 4 years <br />
                                4.5% p.a for plans whose duration range from 4 to 5 years<br />
                                5% p.a for contracts with a duration above 5 years. <br />
                                The minimum tenure is 1 year.',
            'image' => 'target-investments/Dollar-target-investments-animation.gif'
        ]) ?>

    </div>
</div>
<div class="row " id="calculator" style="background-color: var(--secondary-color);">
    <div class="col-md-12 mb-4">
        <br />
        <br />
        <h2 class="title  text-center mt-3">Doubble Target Calculator</h2>
        <p class="text-center small"><small class="subtitle ">Calculate your Target investment now</small>
        </p>
    </div>
    <div class="col-md-10 mx-auto  ">
        <div class="row details">
            <div class="col-md-12 col-lg-8" style="padding: 0px 80px;">
                <form class="form-horizontal targetForm">
                    <div class="form-group d-flex">
                        <label for="target" class="control-label col-sm-4">My Target is:</label>
                        <div class="col-sm-8">
                            <input type="text" onkeypress="validate(event)" id="target" class="form-control mx-sm-12" aria-describedby="target" placeholder="Target amount">
                        </div>


                    </div>
                    <div class="form-group d-flex">
                        <label for="reward" class="control-label col-sm-4">I want to make:</label>
                        <div class="col-sm-8">
                            <select onchange="calTarget()" class="form-control" id="rewardDuration" name="reward">
                                <option>Select an option</option>
                                <option value="12">Monthly</option>
                                <option value="4">Quaterly</option>
                                <option value="2">Bi-annually</option>
                                <option value="1">Yearly</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label for="targetCurrency" class="control-label col-sm-4">I want it in:</label>
                        <div class="col-sm-8">
                            <select onchange="calTarget()" class="form-control" id="targetCurrency" name="currency">
                                <option>Select prefered currency</option>
                                <option value="N">Naira currency</option>
                                <option value="USD">Dollar currency</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label for="rewardYear" class="control-label col-sm-4">I want my returns
                            in:</label>
                        <div class="col-sm-8">
                            <input type="text" onkeyup="calTarget()" onkeypress="validate(event)" id="rewardYear" placeholder="Enter a duration in years" class="form-control mx-sm-12" aria-describedby="target">
                            <small id="passwordHelpBlocks" class="durationWarning form-text text-danger">
                                Enter a value not less than 6 months
                            </small>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-12 col-lg-4 mb-3">
                <h6 class="center-vertical-28 text-center mb-3" style="color:var(--primary-color);font-size:var(--font-small-16); ">Your return
                    is
                </h6>
                <h4 id="targetReturns" class="center-vertical-28 text-center" style="font-size:var(--font-title-3); color:var(--primary-color); font-weight: bold; line-height:48px">
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


<?= $this->element('callout') ?>
<?= $this->element('testimonial', [
    'image' => 'target-investments/target-testimonial.png',
    'testimonial' => 'Using Doubble literally prevented me from being homeless last year. Using the Doubble target investments plan, I was able to save the amount for my rent and pay on time.',
    'client' => 'Joshua Atoyebi'
]) ?>
<?= $this->Html->script('target') ?>