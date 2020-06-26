<!-- <div class="justify-content-xl-center"> -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 one  ">
    <div class="row">
       <!-- mobile screen -->
       <?= $this->Element('div-one-m') ?>
        <!-- end mobile -->
         <!-- medium screen -->
       <?= $this->Element('div-one-md') ?>
        <!-- end medium -->
        <!-- desktop screen -->
       <?= $this->Element('div-one-d') ?>
        <!-- end desktop -->
        
    </div>
</div>
<!-- Start div 2 -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 two ">
    <div class="row">
        <div class="col-sm-6 p-1 ">
            <div class="text-center d-lg-block d-xl-block mt-5 d-md-none d-sm-none d-none mt-2 p-5" style="padding-bottom: 74px !important;">
                <?= $this->Html->Image('img2.png', ["data-aos"=>"zoom-in-left",'class' => 'img img-fluid ', 'style' => 'max-height:500px;']) ?>
                <!-- <img src="images/img2.png" class="img h-100 img-fluid " /> -->
            </div>
            <div class="text-center mt-2  d-sm-block d-md-block d-lg-none d-xl-none p-3" style="padding-bottom: 10px !important">
                <?= $this->Html->Image('img2.png', ["data-aos"=>"zoom-in-left",'class' => 'img img-fluid ', 'style' => 'max-height:250px;']) ?>
                <!-- <img src="images/img2.png" class="img h-100 img-fluid " /> -->
            </div>
        </div>
        <!-- DESKTOP VIEW -->
        <div class="col-sm-5    d-lg-block d-xl-block d-md-none d-sm-none d-none" style="margin-top: 150px">
            <h5 class="align-self-center mt-5 mb-5 ml-5 defaultIntroSize2 " data-aos="fade-left" style="color: #171c60;">Long Slims
            </h5>
            <p class="desc ml-2 small text-justify" style="color: #171c60;font-size:18px" data-aos="fade-left">
                Our pads are a perfect fit for the active woman. Worried about odour and leakages? Don’t – our pads have you protected for up to 8 hours.

            </p>
            <p class="desc mt-5 headerText d-none" style="font-size:25px">
                <span class="gradientOne"> BE A DIVA</span> <span class="gradientTwo"> - FEEL GOOD</span>,
                <span class="gradientThree">LIVE FREE</span>
            </p>
        </div>
        <!-- END DESKTOP VIEW -->
        <!-- BEGIN mobile VIEW -->
        <div class="col-sm-5  d-sm-block d-md-block d-lg-none d-xl-none p-2" style="margin-top: 10px">
            <h5 class="align-self-center mt-2 mb-3 defaultIntroSize2 text-center " style="color: #171c60;" data-aos="fade-left">Long Slims
            </h5>
            <p class="small text-center" style="color: #171c60;font-size:15px" data-aos="fade-left">
                Our pads are a perfect fit for the active woman. Worried about odour and leakages? Don’t – our pads have you protected for up to 8 hours.

            </p>
            <p class="desc mt-5 headerText d-none" style="font-size:25px">
                <span class="gradientOne"> BE A DIVA</span> <span class="gradientTwo"> - FEEL GOOD</span>,
                <span class="gradientThree">LIVE FREE</span>
            </p>
        </div>
        <!-- end mobile view -->
    </div>
</div>
<!-- end DIV 2 -->
<!-- BEGIN DIV 3 -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 threeSmall d-sm-block d-lg-none d-xl-none">
    <!-- BIG SCREENS -->
    <div class="row d-lg-block d-xl-block d-md-none d-sm-none d-xs-none d-none p-4 ml-4 ">
        <div class="col-sm-12">
            <h6 data-aos="zoom-in" class="align-self-center mt-5 ml-4 defaultIntroSize2  mb-5 pb-3" style="color: #171c60;">Why Diva?
            </h6>

        </div>
        <div class="col-sm-6 mt-3 mb-5">
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon3.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon3.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60; font-size: 15px; font-weight: lighter;">
                    <p class="headerText headerText3">Cotton Feel</p>
                    Our pad's cotton soft surface<br /> gives you a relaxed, comfortable
                    feel and<br /> keeps you dry daily.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon2.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon2.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">Sensitivity</p>
                    Made with high quality materials that are<br /> gentle on your skin and prevent rashes
                    <br /> for all day comfort.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon1.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon1.png" class="img-fluid img" width="80" />  -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">No Leaks</p>
                    Our pads are designed with "wings"<br /> and with efficient adhesives to give
                    <br /> you protection all day.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon4.png', ['class' => 'img img-fluid']) ?>
                    <!-- <img src="images/icon4.png" class="img-fluid img"  /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">Odour Control</p>
                    Our pads are high-quality hygiene<br /> products, with odour control.

                </div>
            </div>
        </div>

    </div>
    <!-- END BIG SCREENS -->
    <!-- SMALL SCREENS -->
    <div class="row d-sm-block d-md-block d-lg-none d-xl-none ">
        <div class="col-sm-12">
            <h6 data-aos="zoom-in" class="align-self-center mt-5  text-center defaultIntroSize2 mt-5" style="color: #171c60;">Why Diva?
            </h6>

        </div>
        <div class="col-sm-12 col-md-12 mt-3 mb-5 text-center">
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-12 col-lg-3 col-xs-12" style="text-align: center">
                    <?= $this->Html->Image('icon3.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon3.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-12 col-lg-9 col-xs-12" style="color: #171c60; font-size: 15px; font-weight: lighter;">
                    <p class="headerText headerText3">Cotton Feel</p>
                    Our pad's cotton soft surface gives you a relaxed, comfortable
                    feel and keeps you dry daily.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-12 col-lg-3 col-xs-12" style="text-align: center">
                    <?= $this->Html->Image('icon2.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon2.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-12 col-lg-9 col-xs-12" style="color: #171c60;">
                    <p class="headerText headerText3">Sensitivity</p>
                    Made with high quality materials that are gentle on your skin and prevent rashes
                    for all day comfort.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-12 col-lg-3 col-xs-12" style="text-align: center">
                    <?= $this->Html->Image('icon1.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon1.png" class="img-fluid img" width="80" />  -->
                </div>
                <div class="col-sm-12 col-lg-9 col-xs-12" style="color: #171c60;">
                    <p class="headerText headerText3">No Leaks</p>
                    Our pads are designed with "wings" and with efficient adhesives to give
                    you protection all day.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-12 col-lg-3 col-xs-12" style="text-align: center">
                    <?= $this->Html->Image('icon4.png', ['class' => 'img img-fluid']) ?>
                    <!-- <img src="images/icon4.png" class="img-fluid img"  /> -->
                </div>
                <div class="col-sm-12 col-lg-9 col-xs-12" style="color: #171c60;">
                    <p class="headerText headerText3">Odour Control</p>
                    Our pads are high-quality hygiene products, with odour control.

                </div>
            </div>
        </div>

    </div>
    <!-- END SMALL SCREENS -->
</div>
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 three d-none d-lg-block">
    <!-- BIG SCREENS -->
    <div class="row d-lg-block d-xl-block d-md-none d-sm-none d-xs-none d-none p-4 ml-4 ">
        <div class="col-sm-12">
            <h6 class="align-self-center mt-5 ml-4 defaultIntroSize2  mb-5 pb-3" style="color: #171c60;" data-aos="zoom-in">Why Diva?
            </h6>

        </div>
        <div class="col-sm-6 mt-3 mb-5">
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon3.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon3.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60; font-size: 15px; font-weight: lighter;">
                    <p class="headerText headerText3">Cotton Feel</p>
                    Our pad's cotton soft surface<br /> gives you a relaxed, comfortable
                    feel and<br /> keeps you dry daily.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon2.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon2.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">Sensitivity</p>
                    Made with high quality materials that are<br /> gentle on your skin and prevent rashes
                    <br /> for all day comfort.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon1.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon1.png" class="img-fluid img" width="80" />  -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">No Leaks</p>
                    Our pads are designed with "wings"<br /> and with efficient adhesives to give
                    <br /> you protection all day.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon4.png', ['class' => 'img img-fluid']) ?>
                    <!-- <img src="images/icon4.png" class="img-fluid img"  /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">Odour Control</p>
                    Our pads are high-quality hygiene<br /> products, with odour control.

                </div>
            </div>
        </div>

    </div>
    <!-- END BIG SCREENS -->
    <!-- SMALL SCREENS -->
    <div class="row d-sm-block d-md-block d-lg-none d-xl-none ">
        <div class="col-sm-12">
            <h6 class="align-self-center mt-5  text-center defaultIntroSize2 mt-5" style="color: #171c60;" data-aos="zoom-in">Why Diva?
            </h6>

        </div>
        <div class="col-sm-12 col-md-12 mt-3 mb-5 text-center">
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon3.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon3.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60; font-size: 15px; font-weight: lighter;">
                    <p class="headerText headerText3">Cotton Feel</p>
                    Our pad's cotton soft surfacegives you a relaxed, comfortable
                    feel and keeps you dry daily.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon2.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon2.png" class="img-fluid img" width="80" /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">Sensitivity</p>
                    Made with high quality materials that aregentle on your skin and prevent rashes
                    for all day comfort.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon1.png', ['class' => 'img img-fluid ']) ?>
                    <!-- <img src="images/icon1.png" class="img-fluid img" width="80" />  -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">No Leaks</p>
                    Our pads are designed with "wings" and with efficient adhesives to give
                    you protection all day.
                </div>
            </div>
            <div class="row mt-3" data-aos="zoom-in">
                <div class="col-sm-3" style="text-align: center">
                    <?= $this->Html->Image('icon4.png', ['class' => 'img img-fluid']) ?>
                    <!-- <img src="images/icon4.png" class="img-fluid img"  /> -->
                </div>
                <div class="col-sm-9" style="color: #171c60;">
                    <p class="headerText headerText3">Odour Control</p>
                    Our pads are high-quality hygiene products, with odour control.

                </div>
            </div>
        </div>

    </div>
    <!-- END SMALL SCREENS -->
</div>
<!-- END DIV 3 -->
<!-- BEGIN DIV 4 -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 four">
    <div class="row">
        <!-- DESKTOP -->
        <div class="col-sm-6 p-2 mt-3 d-none d-md-block d-xl-block">
            <div class="text-center mt-5 p-5" style="margin-bottom:80px" >
                <?= $this->Html->Image('diva-pads-purse-open.gif', ['class' => 'img img-fluid w-100']) ?>
                <!-- <img src="images/bg3.png" class="img img-fluid " /> -->
            </div>

        </div>
        <div class="col-sm-5 d-none d-lg-block d-xl-block" style="margin-top: 120px;">
            <h6 data-aos="fade-left" class="align-self-center mt-5 ml-5 defaultIntroSize2 " style="color: #171c60; font-size: 50px !important;">Easy-to carry,<br /> anywhere you go
            </h6>


            <p data-aos="fade-left" class="desc ml-3 mt-5 text-justify" style="color: #171c60;font-size: 18px; margin-right: 10px">
                Each DIVA sachet comes with two tri-folded pads which are individually wrapped for a woman's daily need. They are convenient; affordable and portable.
            </p>
        </div>
        <div class="col-sm-5 d-none d-md-block d-lg-none d-xl-none" style="margin-top: 120px;">
            <h6 data-aos="fade-left" class="align-self-center text-center  defaultIntroSize2 " style="color: #171c60; font-size: 40px !important;">Easy-to carry,<br /> anywhere you go
            </h6>


            <p data-aos="fade-left" class=" mt-3 text-center" style="color: #171c60;font-size: 15px;">
                Each DIVA sachet comes with two tri-folded pads which are individually wrapped for a woman's daily need. They are convenient; affordable and portable.
            </p>
        </div>
        <!-- end desktop -->
        <!-- MOBILE -->
        <div class="col-sm-6 p-2 mt-3 d-lg-none d-xl-none d-sm-block d-md-none d-xs-block">
            <div data-aos="zoom-in" class="text-center mt-2 p-1" style="margin-bottom:10px">
                <?= $this->Html->Image('diva-pads-purse-open.gif', ['class' => 'img img-fluid w-100']) ?>
                <!-- <img src="images/bg3.png" class="img img-fluid " /> -->
            </div>

        </div>
        <div class="col-sm-5 d-lg-none d-xl-none d-sm-block d-md-none d-xs-block" style="margin-top: 1px;">
            <h6 data-aos="fade-left" class="align-self-center text-center  defaultIntroSize2 " style="color: #171c60; font-size: 40px !important;">Easy-to carry,<br /> anywhere you go
            </h6>


            <p data-aos="fade-left" class=" mt-3 text-center" style="color: #171c60;font-size: 15px;">
                Each DIVA sachet comes with two tri-folded pads which are individually wrapped for a woman's daily need. They are convenient; affordable and portable.
            </p>
        </div>
        <!-- end MOBILE -->


    </div>
</div>
<!-- END DIV 4 -->
<!-- BEGIN DIV 5 -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 five">
    <div class="row">
        <!-- MOBILE VERSION -->
        <div class="col-sm-12 col-lg-6 col-xs-12 mt-5 mb-5 d-lg-none d-xl-none d-md-none">
            <h6 data-aos="fade-right" class="align-self-center mt-5 ml-3 defaultIntroSize2 " style="color: #171c60;">Calculator
                <hr />
            </h6>


            <p data-aos="fade-right" class=" ml-3 " style="color: #171c60;font-size: 15px;">
                Not sure of your next period date?
                Don't leave your period up to chance. Figure out the beginning of your next cycle with our
                easy to use period calculator.

            </p>
            <br /> <br />
            <a data-aos="zoom-in" class="ml-2 mt-5 trigger" href="#" style="color: #171c60; font-size: 18px;">&nbsp;Track
                <?= $this->Html->image('arrow-2.svg', ['class' => 'imgNoBoxshadow']) ?>
            </a>
        </div>
        <!-- END MOBILE VERSION -->
        <!-- DESKTOP VERSION -->
        <div class="col-sm-12 col-lg-6 col-xs-12 mt-5 mb-5 d-none d-md-block">
            <h6  data-aos="fade-right" class="align-self-center mt-5 ml-5 defaultIntroSize2 p-3" style="color: #171c60;">Calculator
                <hr />
            </h6>


            <p data-aos="fade-left" class="desc ml-3 p-3" style="color: #171c60;font-size: 18px;">
                Not sure of your next period date?
                Don't leave your period up to chance. Figure out the beginning of your next cycle with our
                easy to use period calculator.

            </p>
            <br /> <br />
            <a class="ml-5 mt-5 trigger" href="#" style="color: #171c60; font-size: 18px;">&nbsp;Track <?= $this->Html->image('arrow-2.svg', ['class' => 'imgNoBoxshadow']) ?></a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xs-12 d-none d-md-block text-center p-0">
            <?= $this->Html->Image('bg4.png', ['class' => 'img img-fluid w-100 h-100', 'data-aos'=>'zoom-in']) ?>
            <!-- <img src="images/bg4.png" class="img-fluid w-100 h-100" /> -->
        </div>
        <!-- END DESKTOP VERSION -->
    </div>
</div>
<!-- end DIV 5 -->
<!-- BEGIN DIV 6 -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 six">

    <div class="row mt-5 mb-5">

        <div class="col-sm-5 col-xs-12 "></div>
        <!-- BEGIN DESKTOP SCREEN -->
        <div data-aos="fade-down-left" class="col-sm-6 mt-4 pb-5 ml-5 d-none d-lg-block" style="background-color: #f9f4f4;  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
            <h6 data-aos="fade-left" class="align-self-center mt-5 ml-5 defaultIntroSize2 " style="color: #171c60;font-size: 38px !important;">The Perfect Way to Keep <br />Yourself from <span class="gradientOne">Ovary-acting</span>
            </h6>
            <p data-aos="fade-left" class="desc ml-3 mt-5" style="color: #171c60;font-size: 18px;">
                Get quality tips, hacks and more information about your period. Sign up for our newsletter

            </p>
            <form>


                <input type="text" placeholder="Enter email to stay in touch" class="control ml-5 mt-5 mb-4" style="height: 60px !important;width:80% !important; padding: 22px; border-radius:5px" />
            </form>
            <br />
            <br />
            <a data-aos="fade-left" class="ml-5 mt-5 mb-5" href="#" style="color: #171c60; font-size: 20px;">&nbsp;Subscribe <?= $this->Html->image('arrow-2.svg', ['class' => 'imgNoBoxshadow']) ?></a>
        </div>
        <!-- END DESKTOP SCREEN -->
        <!-- MOBILE SCREEN` -->
        <div  data-aos="zoom-in" class="col-sm-10 mx-auto mt-4 pb-5  d-block d-lg-none" style="background-color: #f9f4f4;  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
            <h6  data-aos="zoom-in"class="align-self-center mt-5 defaultIntroSize2 text-center" style="color: #171c60;font-size: 26px !important;">The Perfect Way to Keep Yourself from <span class="gradientOne" >Ovary-acting</span>
            </h6>
            <p  data-aos="zoom-in"  class=" ml-3 mt-5 text-center" style="color: #171c60;font-size: 15px;">
                Get quality tips, hacks and more information about your period. Sign up for our newsletter

            </p>
            <form>
                <input type="text" placeholder="Enter email to stay in touch" class="control mt-5 mb-4" style=" width:100% !important; padding: 12px; border-radius: 5px !important;" />
            </form>
            <!-- <input type="text" placeholder="Enter email to stay in touch" class="control ml-1 mt-5 mb-4" style="width:80% !important; padding: 12px" /> -->
            <br />

            <a   data-aos="zoom-in" class="ml-1  mb-5" href="#" style="color: #171c60; font-size: 20px;">&nbsp;Subscribe <?= $this->Html->image('arrow-2.svg', ['class' => 'imgNoBoxshadow']) ?></a>
        </div>
        <!-- END MOBILE SCREEN` -->
    </div>
</div>
<!-- END DIV 6 -->
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 seven mb-4">
    <!-- DESKTOP     -->
    <div class="d-none d-lg-block">
        <div class="row ">

            <div class="col-sm-6 col-xs-12 mt-5" style="text-align:center;margin:0 auto; ">
                <br />
                <h6  data-aos="zoom-in"  class="align-self-center mt-5 ml-5 defaultIntroSize2 " style="color: #171c60;font-size: 45px;">We're Social, Join Us</span>
                </h6>


            </div>
        </div>
        <div class="row  row-cols-3 p-5">
            <div class="col"  data-aos="zoom-in" >
                <?= $this->Html->Image('social1.png', ['class' => 'img img-fluid w-100']) ?>

            </div>
            <div class="col"  data-aos="zoom-in" >
                <?= $this->Html->Image('social2.png', ['class' => 'img img-fluid w-100']) ?>

            </div>
            <div class="col"  data-aos="zoom-in" >
                <?= $this->Html->Image('social3.png', ['class' => 'img img-fluid w-100']) ?>

            </div>
        </div>
    </div>

    <!-- END DESKTOP -->
    <!-- MOBILE     -->
    <div class="row d-block d-lg-none d-xl-none">

        <div class="col-sm-6 col-xs-12 mt-5" style="text-align:center;margin:0 auto; ">
            <br />
            <h6  data-aos="zoom-in"  class="align-self-center mt-2 text-center defaultIntroSize2 " style="color: #171c60;font-size: 25px;">We're Social, Join Us</span>
            </h6>


        </div>
    </div>
    <div class="row  p-5 d-block d-lg-none d-xl-none">
        <div  data-aos="zoom-in" class="col-sm-12 col-md-12 p-0 d-sm-block d-md-block d-lg-none d-xl-none">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <?= $this->Html->Image('social1.png', ['class' =>  'd-block w-100 h-100', 'style' => 'object-fit:cover']) ?>

                    </div>
                    <div class="carousel-item">
                        <?= $this->Html->image('social2.png', ['class' => 'd-block w-100 h-100', 'style' => 'object-fit:cover']); ?>

                    </div>
                    <div class="carousel-item">
                        <?= $this->Html->image('social3.png', ['class' => 'd-block w-100 h-100', 'style' => 'object-fit:cover']); ?>

                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <!-- END MOBILE -->
</div>
<div class="col-12 col-md-12 col-xl-12 col-lg-12 col-sm-12 eight">
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-xs-12 " style="background-color: #F5E6EB;">
            <div class="row">
                <div class="col-sm-12 girlWithBook">
                    <h6  data-aos="zoom-in"  class="align-self-center defaultIntroSize2 d-none d-md-block" style="margin: 0 auto; font-size: 28px !important;font-weight: 100;text-align: center;color: #171c60;position: absolute;bottom:5%;left:33%">
                        <?= $this->Html->link('Diva Diaries ', ['controller' => 'articles', 'action' => 'index', 'plugin' => 'blog'], ['escape' => false, 'class' => 'colorBlue']) ?>
                        <?= $this->Html->image('arrow-2.svg', ['class' => 'imgNoBoxshadow']) ?>
                    </h6>
                    <h6  data-aos="zoom-in"  class="align-self-center defaultIntroSize2 d-lg-none d-md-none d-sm-block " style="margin: 0 auto; font-size: 28px !important;font-weight: 100;text-align: center;color: #171c60;position: absolute;bottom:5%;left:25%">
                        <?= $this->Html->link('Diva Diaries ', ['controller' => 'articles', 'action' => 'index', 'plugin' => 'blog'], ['escape' => false, 'class' => 'colorBlue']) ?>
                        <?= $this->Html->image('arrow-2.svg', ['class' => 'imgNoBoxshadow']) ?>
                    </h6>

                </div>
                <div class="col-sm-12 col-xs-12 " style="background-color: #F5E6EB;padding:20px">
                    <h6  data-aos="zoom-in"  class="align-self-center ml-3 defaultIntroSize2 text-center" style="margin-top:88px;font-size:37px!important"><?= $this->Html->link('Join the Padwagon ', ['controller' => 'distributors', 'action' => 'add', 'plugin' => 'blog',], ['escape' => false, 'class' => 'colorBlue']) ?>
                        <?= $this->Html->image('arrow-6.svg', ['class' => 'imgNoBoxshadow']) ?>
                    </h6>
                    <p  data-aos="zoom-in" class="  mt-3 text-center" style="color: #171c60;font-size: 18px;margin-bottom:58px">
                        Be part of our story!<br />
                        Partner with us and apply for distributorship.</p>
                    <br /> <br />

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xs-12 " style="background-color:#e380c1 !important">
            <h6  data-aos="zoom-in"  class="align-self-center defaultIntroSize2 text-center" style="color: #171c60;margin-top:88px;font-size:37px !important"><?= $this->Html->link('We\'d love to hear<br />from
                            you ', ['action' => 'contact'], ['escape' => false, 'class' => 'colorBlue']) ?>
                <?= $this->Html->image('arrow-6.svg', ['class' => 'imgNoBoxshadow']) ?>
            </h6>
            <p  data-aos="zoom-in"  class=" mt-3 text-center d-none d-md-block" style="color: #171c60;font-size: 18px;margin-bottom:58px;margin-left: 1px !important;">
                Contribute or get more information on
                women's hygiene etiquettes for well-being.

            </p>
            <p  data-aos="zoom-in"  class="desc mt-3 text-center d-lg-none d-md-none d-sm-block" style="color: #171c60;font-size: 18px;margin-bottom:58px; margin-left: 0px !important;">
                Contribute or get more information on
                women's hygiene etiquettes for well-being.

            </p>
            <div  data-aos="zoom-in" style="padding: 10px 40px 50px 40px">
                <?= $this->Html->image('c.png', ['class' => 'img-fluid w-100', 'width' => 200]) ?>

            </div>
        </div>
    </div>
</div>

<!-- </div> -->

