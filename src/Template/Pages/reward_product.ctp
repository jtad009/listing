<?= $this->Html->css('target.css') ?>

<?= $this->element('productHeader', [
    'title' => 'Doubble Reward',
    'subtitle' => 'Save towards your future goals.',
    'image' => 'img/rewards-investment/bg.png',
    'description' => 'Either you are saving up for a future mortgage, your education or that big purchase, Doubble rewards suit your future needs.'
]) ?>

<div class="row ">
    <div class="five col-md-12 p-0">

        <?=
            $this->element('product-section-blue-top', [
                'title' => 'Rewards Investment Products',
                'subtitle' => 'Doubble 3',
                'description' => 'Doubble 3 is a 6 - year investment contract that offers a 25% return on invested funds. 
                                    Monthly contributions are made by you for the first 3 years and your invested amount 
                                    plus returns are paid to you every month for the next 3 years. 
                                    For example, If you invest N 1,000,000 over the span of 3 years, 
                                    you make N250,000 plus your savings in returns spread over the duration of the next 3 years.',
                'image' => 'rewards-investment/Doubble-3-animation.gif',
                'width'=>'75'
            ])
        ?>

        <?= $this->element('product-section-wh', [
                            'subtitle' => 'Doubble 5',
                            'description' => 'Doubble 5 is a 10-year investment contract that offers a 50% profit on the money you invest. Monthly contributions are made by you for the first 5 years and your invested amount plus returns are paid to you every month for the next 5 years. This means you make half your investment in returns over the span of 5 years. For example, If you invest N 1,000,000 in the first 5 years, you make N1,500,000 in returns spread over the next 5 years.',
                            'image' => 'rewards-investment/Doubble-5-animation.gif',
                            'width'=>'75'
        ]) ?>
      
        <?=
            $this->element('product-section-blue-in', [
                            'subtitle' => 'Doubble 10',
                            'description' => 'Doubble 10 is a 15-year plan that offers a 100% profit on the money you invest. You make a monthly deposit for 5 years and you get the exact amount that you have saved plus interests paid back to you monthly in another 10 years. This means If your total savings over 5 years is N 300,000, you get N600,000 in returns for the next 10 years.',
                            'image' => 'rewards-investment/Doubble-10-animation.gif',
                            'width'=>'75'
            ])
        ?>


       
        <?= $this->element('product-section-wh', [
                            'subtitle' => 'Doubble Lump Sum',
                            'description' => 'Doubble Lump Sum is a 10-year investment plan that gives you double your money over a 10 year period after a 5 year interval. Contribution is made in one bulk amount and you get 100% returns on your money starting from year 6 to year 10. For example, If you invest N 1,000,000, you wait for a period of 5 years after which you get paid N 2,000,000 over a 5 year period from year 6 to year 10.',
                            'image' => 'rewards-investment/Doubble-lumpsum-animation.gif',
                            'width'=>'75'
                            ]) ?>
    </div>
</div>

<div class="row h-100" style="background-color: var(--secondary-color);">
    <div class="col-md-12 ">
        <br />

        <h2 class="title  text-center mt-3">Doubble Rewards Products</h2>
        <p class="text-center small"><small class="subtitle ">Calculate your Rewards investment now.</small></p>
        <p class="text-center">
            <a href="#" class="btn btn-primary  mr-3" data-aos="zoom-in">MONTHLY REWARDS &nbsp;</a>
            <a href="#" class="btn btn-primary-outline">LUMPSUM REWARDS</a>
        </p>

    </div>
    <div class="row mx-auto" id="calculator">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="row  mb-3">
                <div class="col-md-12 ">
                    <div class="row details mt-4 mb-2">
                        <div class="col-lg-3 col-md-12  ">
                            <label for="target" class="control-label " style="line-height:30px;font-size: var(--font-small-20)">If you save</label>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <input type="text" id="target" onkeyup="calculateReward()" class="form-control mx-sm-12" aria-describedby="target" placeholder="Fixed amount">

                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p class="small mt-3" id="passwordHelpBlock" style="line-height:20px;font-size: var(--font-small-16)">N5000 minimum monthly savings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12 bg-white mx-auto details" style="padding: 20px 20px;">

            <div class="row">
                <div class="col-md-4 text-center" style="border-right:1px solid #D1D1D1">

                    <h4 class="mt-4 mb-4" style="font-size:var(--font-small-24); color:var(--primary-color)">Doubble 3</h4>
                    <p style="font-size:var(--font-small-18);color:var(--primary-color)">N225,000.00<br />
                        <small style="font-size:var(--font-small-20);color:var(--primary-color)"> 25% returns plus total savings</small></p>


                    <p class="mt-2 " style="font-size:var(--font-small-18);color:var(--primary-color)">N6,250.00<br />
                        <small class="mb-2" style="font-size:var(--font-small-20);color:var(--primary-color)"> Receivable for 36 months and</small>
                    </p>

                    <p style="font-size:var(--font-small-18);color:var(--primary-color)" id="total3">N180,000.00<br />
                        <small style="font-size:var(--font-small-20);color:var(--theme-three)"> Total Savings for only 36 months.</small>
                    </p>


                </div>
                <div class="col-md-4 text-center " style="border-right:1px solid #D1D1D1">

                    <h4 class="mt-4 mb-4" style="font-size:var(--font-small-24); color:var(--primary-color)">Doubble 5</h4>
                    <p style="font-size:var(--font-small-18);color:var(--primary-color)">N450,000.00<br />
                        <small style="font-size:var(--font-small-20);color:var(--primary-color)"> 50% returns plus total savings</small></p>


                    <p class="mt-2 " style="font-size:var(--font-small-18);color:var(--primary-color)">N7,500.00<br />
                        <small class="mb-2" style="font-size:var(--font-small-20);color:var(--primary-color)"> Receivable for 60 months and</small>
                    </p>

                    <p style="font-size:var(--font-small-18);color:var(--primary-color)" id="total5">N<span>300,000.00</span><br />
                        <small style="font-size:var(--font-small-20);color:var(--theme-three)"> Total Savings for only 60 months..</small>
                    </p>

                </div>
                <div class="col-md-4 text-center">

                    <h4 class="mt-4 mb-4" style="font-size:var(--font-small-24); color:var(--primary-color)">Doubble 10</h4>
                    <p style="font-size:var(--font-small-18);color:var(--primary-color)">N600,000.00<br />
                        <small style="font-size:var(--font-small-20);color:var(--primary-color)"> 100% returns plus total savings</small></p>


                    <p class="mt-2 " style="font-size:var(--font-small-18);color:var(--primary-color)">N5,000.00<br />
                        <small class="mb-2" style="font-size:var(--font-small-20);color:var(--primary-color)"> Receivable for 120 months and</small>
                    </p>

                    <p style="font-size:var(--font-small-18);color:var(--primary-color)" id="total10">N<span>300,000.00</span><br />
                        <small style="font-size:var(--font-small-20);color:var(--theme-three)"> Total Savings for only 60 months.</small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <p class="text-center mt-3">

                <a href="https://apply.doubble.ng/" target="_blank" class="btn btn-primary text-center" data-aos="zoom-in">START INVESTING</a>
                <br />
                <br />
            </p>
        </div>
    </div>
</div>

<?= $this->element('callout') ?>
<?= $this->element('testimonial', [
    'addClass'=>'t-except',
    'image' => 'rewards-investment/testimonial.png',
    'testimonial' => 'In 2017, I had a goal to complete my Msc in Computer Science at an Ivy league university by 2020. I started saving towards this goal with Doubble rewards. 
    It seemed like a herculean task to save monthly for 3 years but the automated savings feature on Doubble inspired the discipline I needed. 
    Now, I am half way through my Msc program at one of the top universities in the United Kingdom.',
    'client' => 'Seni Ibrahim'
]) ?>


<?= $this->Html->script('reward') ?>