
        <?php
        foreach ($cover_banner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['coverage_banner_img']) ?>) ">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['coverage_heading'] ?></h1>
            </section>
        <?php  } ?>
        <!-- bannner end -->

        <!-- our coverage Start -->
        <?php
        foreach ($coverage_mapSec as $value) {
        ?>
            <section id="Our_coverage" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
                <div class="container">
                    <div class="OCS_imghover coverage text-center mt-5">
                    <img class="OCS_img" src="<?php echo base_url('backend_design/uploads/' . $value['map_img']) ?>" alt="" srcset="">
                    </div>
                </div>
            </section>
        <?php  } ?>
        <!-- our Coverage end -->

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
   