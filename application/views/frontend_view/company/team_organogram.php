
        <?php
        foreach ($orga_banner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['organogram_banner_img']) ?>) ">

                <h1 class="entry_title text-white fw-bold "><?php echo $value['organogram_heading'] ?></h1>
            </section>
        <?php  } ?>
        <!-- bannner end -->
        <!-- Manage System Start -->
        <?php
        foreach ($plan_chartSec as $value) {
        ?>
            <section id="Manage_system" class=" background-res background-ats" style="background-image:url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
                <div class="container">
                    <div class="manage_img py-5">
                        <img class="imghover" src="<?php echo base_url('backend_design/uploads/' . $value['member_plan_img']) ?>" alt="" srcset="">
                    </div>
                </div>
            </section>
        <?php  } ?>
        <!-- Manage System end -->


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
  