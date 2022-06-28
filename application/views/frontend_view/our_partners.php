
        <!-- bannner start -->
        <?php
        foreach ($partnerBanner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['partner_banner']) ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['partner_heading'] ?></h1>
            </section>
        <?php } ?>
        <!-- bannner end -->

        <!-- DONG_BANG start -->
        <?php
        foreach ($contantSec as $value) {
        ?>
        <section id="DONG_BANG" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
            <div class="container">
                <div class="dong mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dong_img text-center">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['contant_img']) ?>" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="dong_text">
                                <div class="dong_title mb-4">
                                    <h2 class="dong_title"><?php echo $value['contant_title'] ?></h2>
                                </div>
                                <p class="lh-lg"><?php echo $value['contant'] ?></p>
                                <div class="dong_button">
                                    <a class="btn btn-warning mb-2 text-light" href="<?php echo $value['button_link'] ?>"><?php echo $value['button'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="dong dong_right mt-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="dong_text text-end">
                                <div class="dong_title mb-4">
                                    <h2 class="dong_title"><?php echo $value['contant_title'] ?></h2>
                                </div>
                                <p class="lh-lg"><?php echo $value['contant'] ?></p>
                                <div class="dong_button">
                                    <a class="btn btn-warning mb-2 text-light" href="<?php echo $value['button_link'] ?>"><?php echo $value['button'] ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dong_img text-center">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['contant_img']) ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>

        <!-- DONG_BANG end -->

        <!-- DA_ONE start -->
        <?php
        foreach ($contantSec as $value) {
        ?>
        <section id="DONG_BANG" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
            <div class="container">
                <div class="dong mt-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="dong_text text-end">
                                <div class="dong_title mb-4">
                                    <h2><?php echo $value['contant_title'] ?></h2>
                                </div>
                                <p class="lh-lg"><?php echo $value['contant'] ?></p>
                                <div class="dong_button">
                                    <a class="btn btn-warning mb-2 text-light" href="<?php echo $value['button_link'] ?>"><?php echo $value['button'] ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dong_img text-center">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['contant_img']) ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>

        <!-- DA_ONE end -->

        <!-- home page banner start -->
        <section id="home_page_banner" class=" background-res background-ats" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <?php
            foreach ($banner as $value) {
            ?>
                <div class="banner_page background-res" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['banner_img']) ?>) ">
                </div>
            <?php  } ?>

        </section>
        <!-- home page banner end -->
   