<div class="col-12 peachPage p-5">
    <div class="row">
    <div class="col-sm-12  m-1" style="margin-top: 30px !important;">
            <div class="d-none d-md-block">
                <br />
                <br />
                <h6 class="align-self-center defaultIntroSize text-left " style="color: #171c60;font-size:55px !important" data-aos="fade-up"
     data-aos-duration="1500">Join the Padwagon<br />
                <hr style="margin-top: 40px" />
                </h6>

            </div>
            <div class="d-lg-none  d-md-none d-sm-block">
                <br />
                <br />
                
                <h6 class="align-self-center defaultIntroSize text-left " style="color: #171c60;font-size:35px !important" data-aos="fade-up"
     data-aos-duration="1500">Join the Padwagon<br />
                <hr style="margin-top: 40px" />
            </h6>

            </div>
            
        </div>

    </div>
    <div class="row">
    <div class="col-sm-5 d-lg-none d-md-none d-sm-block">
            <p class="mt-3" style="color: #171c60;font-size: 15px;" data-aos="fade-up"
     data-aos-duration="1500">
                Please get in touch with our team and
                we will get back to you as soon as
                possible.
            </p>
        </div>
        <div class="col-sm-5 d-none d-md-block">
            <p class="mt-3" style="color: #171c60;font-size: 22px;" data-aos="fade-up"
     data-aos-duration="1500">
                Please get in touch with our team and<br/>
                we will get back to you as soon as
                possible.
            </p>
        </div>
        <div class="col-sm">
            <?=  $this->Flash->render();?>
            <?= $this->Form->create($distributor) ?>
                <div class="row">
                    <div class="col-sm-6 form-group">
           
                        <label>First Name <span class="text-danger">*</span></label>
                        <input class="form-control" name="first_name" id="first_name" />
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Last Name <span class="text-danger">*</span></label>
                        <input class="form-control" name="last_name" id="last_name" />
                    </div>
                </div>
                <div class="form-group">
                    <label>Email<span class="text-danger">*</span></label>
                    <input class="form-control" name="email" id="email" />
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="tel" name="phone" id="phone" required/>
                </div>
                <div class="form-group">
                    <label>Seller Type</label>
                    <select class="form-control" name="seller_type" id="seller_type" required>
                        <option>Choose</option>
                        <option value="Reseller">Reseller </option>
                        <option value="Wholesaler">Wholesaler </option>
                        <option value="Distributor">Distributor </option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Business Name</label>
                    <input class="form-control" type="tel" name="business_name" id="business_name" />
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Business Location (State)</label>
                        <select class="form-control" name="business_location_state" id="business_location_state">
                        <?php 
                            for ($i=0; $i < count($states); $i++) { 
                                echo '<option>'.$states[$i][0].'</option>';
                            }
                        ?>
                        </select>
                       
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Business Location (City)</label>
                        <input class="form-control" name="business_location_city" id="business_location_city" />
                    </div>
                </div>
                <input class="control btn-primary mt-5" type="submit" data-aos="zoom-in"/>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>