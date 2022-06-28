
        <!-- bannner start -->
        <?php
        foreach ($corporateBanner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['corporate_banner']); ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['corporate_heading'] ?></h1>
            </section>
        <?php  } ?>

        <!-- bannner end -->

        <!-- noueish Start -->
        <?php
        foreach ($corporateSec as $value) {
        ?>
        <section id="Nourish" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <div class="nourish text-center mt-4">
                    <div class="CB_img ">
                        <img src="<?php echo base_url('backend_design/uploads/' . $value['corporate_img']) ?>" alt="" srcset="">
                    </div>
                    <div class="nourish_text mt-4">
                        <p class="text-muted nourish_text"><?php echo $value['corporate_contant'] ?></p>
                    </div>
                    <div class="nourish_button">
                        <a class="btn btn-primary mb-5 text-light" href="<?php echo $value['button_link'] ?>"><?php echo $value['button'] ?></a>
                    </div>
                </div>
                <div class="C_buyers_line mt-5"></div>
            </div>
        </section>
        <?php  } ?>

        <!-- nourish End -->



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
   