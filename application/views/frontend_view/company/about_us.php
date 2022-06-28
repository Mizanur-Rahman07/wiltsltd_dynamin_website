
        <?php
        foreach ($bannerTop as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo base_url('backend_design/uploads/' . $value['about_banner_img']) ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['about_heding'] ?></h1>

            </section>
        <?php  } ?>

        <!-- bannner end -->

        <!-- post content start -->
        <section id="post_content" class=" background-res background-ats  py-5" style="background-image:url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        foreach ($about as $value) {
                        ?>
                            <h5 class="about_title text-primary mt-5 mb-5"><?php echo $value['about_us_title'] ?></h5>
                            <p class="text-muted L_height"><?php echo $value['about_contant'] ?></p>
                            <div class="area8-icon  rounded-circle mr-4 d-flex justify-content-center align-items-center">
                                <i class="<?php echo $value['phone_icon'] ?> text-white"></i>
                                <p>
                            </div>
                            <div class="no py-3">
                                <p class=""><a href="tel:+8801755463304 " class="">
                                        +88<?php echo $value['phone_no'] ?></a></p>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <iframe class="about_video" src="<?php echo $value['video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php  } ?>

                </div>
            </div>
        </section>
        <!-- post content end -->

        <!-- features start -->
        <section id="features" class="text-center py-5" style="background-image:url(<?php echo base_url('frontend_design/assets/images/Opacity-Image-02-1.jpg'); ?>)">
            <div class="container">
                <div class="OMV mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cline mb-1 mt-3"></div>
                            <div class="cline"></div>
                        </div>
                        <?php
                        foreach ($missionHead as $value) {
                        ?>
                            <div class="col-md-4 text-white">
                                <h2><strong><?php echo $value['mission_heading'] ?></strong></h2>
                                <p class="CS_style mt-4 mb-5"></p>
                            </div>
                        <?php  } ?>

                        <div class="col-md-4">
                            <div class="cline mb-1 mt-3"></div>
                            <div class="cline"></div>
                        </div>
                    </div>
                </div>
                <div class="sep_solid"></div>
                <div class="row">
                    <?php
                    foreach ($missionSec as $value) {
                    ?>
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features_col_change ">
                                <i class="<?php echo $value['mission_icon'] ?> fa-3x py-3 Iclor  "></i>
                                <div class="fusion_text mt-3 text-white ">
                                    <p><?php echo $value['icon_contant'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </section>
        <!-- features end -->

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

   