<?= $this->Html->css('blog.css') ?>
<?= $this->Html->css('faq.css') ?>
<?php 
$this->assign('title', 'Frequently Asked Questions - Doubble by Sterling Bank Plc');
$this->assign('pageDescription', 'Answers to all your questions about the Doubble platform, wealth, savings and investments to help you build wealth and attain financial freedom'); 
?>
<div class="row one">
    <div class="col-md-6 primary-color-bg">

        <div style="padding-left:20px; padding-right:20px; height: 100%">
            <h6 class="text-white  my-auto mx-auto  center-vertical" style="font-size: 29px; width:80%">
                How can we help you?
            </h6>
            <div class="input-icons center-vertical mt-3 mx-auto ">
                <i class="fa fa-search icon"></i>
                <input type="text" class="input-field  border-0" placeholder="search for answers" />

            </div>
        </div>

    </div>
    <div class="col-md-6 secondary-color">
        <?= $this->Html->image('faq/faq-header.png', ['class' => 'img img-fluid']) ?>
    </div>
</div>

<div class="row ">
    <div class="col-md-10 col-lg-8 mx-auto my-auto d-flex p-4">

        <div class="mb-4 mt-4" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card  border-0 p-0">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed accordion-toggle">Can I pre-terminate my Investment? </a>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body details"> Yes. The investment plan can be pre-terminated. However, if
                        terminated before the end of the tenure, you will get your full contributions forfeiting
                        50% of the accrued earnings. </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed accordion-toggle">How do I know my balance? </a>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-body details">You can view your balance on your profile page using your
                        log-in details.</div>
                </div>
            </div>

            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed accordion-toggle">Can I purchase multiple plans? </a>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-body details">Yes, you can purchase multiple plans for your benefit or
                        other beneficiaries.</div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingFour">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed accordion-toggle">Can I opt for a lump-sum payout instead of
                            monthly payout? </a>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="card-body details"> Lump sum payment option exists on Doubble Target Option
                        while the monthly payment options are available for the Doubble Reward option. </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingFive">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed accordion-toggle">Is the beneficiary transferable? </a>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="card-body details"> Yes, you can select or nominate a new beneficiary for the
                        pay-out period. </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="heading6">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed accordion-toggle">Can I just transfer any loose cash into my
                            Doubble plan? </a>
                    </h5>
                </div>

                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                    <div class="card-body details"> Yes, under the Doubble Target option but it is not possible
                        under the Doubble Reward option. </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingSix">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="collapsed accordion-toggle">What is the minimum monthly contribution amount?
                        </a>
                    </h5>
                </div>

                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="card-body details"> The minimum monthly contribution amount is N5,000 for
                        Doubble Reward Option </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingSeven">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="collapsed accordion-toggle">What is the minimum lump sum amount? </a>
                    </h5>
                </div>

                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="card-body details"> The minimum lump-sum contribution amount is N100,000 for
                        Doubble Reward Option </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingEight">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="collapsed accordion-toggle">What is the maximum amount to contribute on
                            Doubble? </a>
                    </h5>
                </div>

                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="card-body details"> We are glad to say, there is no maximum amount to invest on
                        Doubble. </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingNine">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" class="collapsed accordion-toggle">When will my account be debited and my Doubble
                            Account funded? </a>
                    </h5>
                </div>

                <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
                    <div class="card-body details">
                        <p>This will be on the day the first contribution was made for every month. Example: If
                            your first contribution was made August 30th, your account will be debited and
                            funded on the 30th of every month. </p>
                        <p>However, if the contribution pattern is not on a monthly basis, the contribution
                            would be based on the contribution pattern selected.</p>
                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingTen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen" class="collapsed accordion-toggle">When do I get my monthly payout from the Bank?
                        </a>
                    </h5>
                </div>

                <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen">
                    <div class="card-body details">
                        <p>
                            Payouts are credited on the same date the first contribution was made each month for
                            Rewards Variants. Example: If your Doubble account was funded on the 30th day of
                            every month, your payouts will also be on the 30th of every month.

                        </p>
                        <p>However, the lump sum target amount is paid fully once the contribution period has
                            been completed.</p>
                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingEleven">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="collapsed accordion-toggle">When do I get my monthly payout from the Bank?
                        </a>
                    </h5>
                </div>

                <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven">
                    <div class="card-body details">
                        <p>
                            Payouts are credited on the same date the first contribution was made each month for
                            Rewards Variants. Example: If your Doubble account was funded on the 30th day of
                            every month, your payouts will also be on the 30th of every month.

                        </p>
                        <p>However, the lump sum target amount is paid fully once the contribution period has
                            been completed.</p>
                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingTwelve">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve" class="collapsed accordion-toggle">Is Doubble open to only customers of Sterling
                            Bank? </a>
                    </h5>
                </div>

                <div id="collapseTwelve" class="collapse" role="tabpanel" aria-labelledby="headingTwelve">
                    <div class="card-body details">
                        <p>
                            No, Doubble is open to everyone. While applying, an account will be opened for you
                            and your account details sent to your email immediately to enable you invest.

                        </p>
                        <p>However, the lump sum target amount is paid fully once the contribution period has
                            been completed.</p>
                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingThirteen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen" class="collapsed accordion-toggle">How do I fund my account? </a>
                    </h5>
                </div>

                <div id="collapseThirteen" class="collapse" role="tabpanel" aria-labelledby="headingThirteen">
                    <div class="card-body details">
                        <p>Funding your Doubble account is automated. If you are a Sterling Bank customer, you
                            simply state the account to be debited. </p>
                        <p>If you are not a Sterling Bank customer, you will have to transfer funds into your
                            new Sterling Bank account opened for you. This account will then be debited
                            automatically on the expected date of contribution.</p>
                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingFourteen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen" class="collapsed accordion-toggle">How long is my savings period before I start
                            getting my payouts? </a>
                    </h5>
                </div>

                <div id="collapseFourteen" class="collapse" role="tabpanel" aria-labelledby="headingFourteen">
                    <div class="card-body details">
                        <p>This depends on the Doubble Investment Option selected. Click on Products at the top
                            of the page to read the options available.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingFifteen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen" class="collapsed accordion-toggle">How can I know my expected earnings before
                            investing? </a>
                    </h5>
                </div>

                <div id="collapseFifteen" class="collapse" role="tabpanel" aria-labelledby="headingFifteen">
                    <div class="card-body details">
                        <p>We have Calculators that show all the information you need. Try them by clicking on
                            Calculate at the top of the page.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingSixteen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen" class="collapsed accordion-toggle">Can I choose a future start date when I apply
                            now? </a>
                    </h5>
                </div>

                <div id="collapseSixteen" class="collapse" role="tabpanel" aria-labelledby="headingSixteen">
                    <div class="card-body details">
                        <p>Yes, you can apply now and choose a convenient start date.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingSeventeen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen" class="collapsed accordion-toggle">What is the minimum Naira Target amount? </a>
                    </h5>
                </div>

                <div id="collapseSeventeen" class="collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                    <div class="card-body details">
                        <p>The minimum Naira target amount is N250,000.00.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingEighteen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen" class="collapsed accordion-toggle">What is the minimum USD Target amount? </a>
                    </h5>
                </div>

                <div id="collapseEighteen" class="collapse" role="tabpanel" aria-labelledby="headingEighteen">
                    <div class="card-body details">
                        <p>The minimum USD target amount is USD1,000.00.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingNineteen">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen" class="collapsed accordion-toggle">How do I subscribe for target savings in US
                            dollars? </a>
                    </h5>
                </div>

                <div id="collapseNineteen" class="collapse" role="tabpanel" aria-labelledby="headingNineteen">
                    <div class="card-body details">
                        <p>You will need to have a USD domiciliary account to be able to save in US dollars. You
                            can open one from your dashboard if you do not have one already.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="headingTwenty">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty" class="collapsed accordion-toggle">How do I fund my domiciliary account? </a>
                    </h5>
                </div>

                <div id="collapseTwenty" class="collapse" role="tabpanel" aria-labelledby="headingTwenty">
                    <div class="card-body details">
                        <p>You can fund your domiciliary account by paying cash directly into the account or use
                            the correspondent bank details below: <br /><br />Beneficiary Bank Name: Sterling
                            Bank Plc. <br />Beneficiary Bank Account Number: 36145519. <br />Beneficiary Bank
                            SWIFT Code: NAMENGLA. <br />Correspondent Bank Name: Citibank N.A. New York.
                            <br />Correspondent Bank Routing Number: 021000089. <br />Correspondent Bank SWIFT
                            Code: CITIUS33. <br />Beneficiary Name (Your account name): ###########.
                            <br />Beneficiary Account Number (Your account number): ##########.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="heading21">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapse21" class="collapsed accordion-toggle">How can I invest a bulk sum for a short term and
                            get my returns in bulk? </a>
                    </h5>
                </div>

                <div id="collapse21" class="collapse" role="tabpanel" aria-labelledby="heading21">
                    <div class="card-body details">
                        <p>Select Bi-annually as frequency and 6 months as tenure, or Annually as frequency and
                            12 months as tenure.</p>

                    </div>
                </div>
            </div>
            <div class="card border-0   p-0">
                <div class="card-header" role="tab" id="heading21">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapse22" class="collapsed accordion-toggle">My questions have not been answered. Who can I
                            talk to? </a>
                    </h5>
                </div>

                <div id="collapse22" class="collapse" role="tabpanel" aria-labelledby="heading22">
                    <div class="card-body details">
                        <p>Please send a mail to customercare@sterling.ng or call us on +234 700 STERLING (+234
                            700 7837 5464).</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-10 mx-auto my-auto  d-none d-lg-block mt-4 mb-4 rounded" style="background-color: var(--theme-three);">
        <div class="row">
            <div class="col-sm-12 col-lg-7 my-auto">
                <div class="b-card3  p-5 my-auto" style="height: inherit !important;font-size: 40px;font-weight: bold;line-height:43px; background-color: transparent!important ;">
                    <p class="p-3 text-left text-white"> Didn't find an answer to your question?<br /> Contact us. </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5 ">
                <p class=" text-left center-vertical" style="font-size: 16px; color:var(--primary-color); line-height: 24px; ">
                    <?= $this->Html->image('social/envelope.svg', ['class' => 'mr-2']) ?>customercare@sterling.ng
                </p>
                <p class=" text-left center-vertical" style="font-size: 16px;color:var(--primary-color);line-height: 24px;">

                    <?= $this->Html->image('social/call-us.svg', ['class' => 'mr-2']) ?>+234 700 STERLING (+234 700 7837 5464)
                </p>
            </div>
        </div>
    </div>

    <div class="d-block d-lg-none col-md-10 mx-auto   my-auto  mt-4 mb-4 rounded" style="background-color: var(--theme-three);">
        <div class="row">
            <div class="col-md-12 ">
                <div class="b-card3  p-5 my-auto" style="height: inherit !important;font-size: 40px;font-weight: bold;line-height:43px; background-color: transparent!important ;">
                    <p class="p-3 text-center text-white"> Didn't find an answer to your question? Contact us. </p>
                </div>
            </div>
            <div class="col-md-12 mx-auto mb-4">
                <p class=" text-center" style="font-size: 25px; color:var(--primary-color); line-height: 24px; ">
                    <?= $this->Html->image('social/envelope.svg', ['class' => 'mr-2']) ?>
                    customercare@sterling.ng
                </p>
                <p class=" text-center " style="font-size: 25px;color:var(--primary-color);line-height: 24px;">
                    <?= $this->Html->image('social/call-us.svg', ['class' => 'mr-2']) ?>
                    +234 700 STERLING (+234 700 7837 5464)
                </p>


            </div>
        </div>
    </div>
    <div class="col-md-10 " style="min-height: 70px;">
        &nbsp;
    </div>
</div>
