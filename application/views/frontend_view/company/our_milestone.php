
        <?php
        foreach ($mileBannerTop as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo base_url('backend_design/uploads/' . $value['mileston_banner_img']) ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['mileston_heading'] ?></h1>
            </section>
        <?php  } ?>
        <!-- bannner end -->

        <section id="year_calculate" class=" background-res background-ats py-5" style="background-image:url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <?php
                foreach ($mile_calender as $value) {
                ?>
                    <div class="year d-flex mt-5">
                        <div class="Yicon mr-4">
                            <i class="<?php echo $value['year_icon'] ?>"></i>
                        </div>
                        <div class="year_text mt-3">
                            <div class="content_box_heading text-primary">
                                <h3 class="yFont"><?php echo $value['year_title'] ?>:</h3>
                            </div>
                            <p><?php echo $value['year_contant'] ?></p>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </section>

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
  