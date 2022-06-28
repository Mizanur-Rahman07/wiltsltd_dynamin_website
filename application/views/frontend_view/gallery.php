
        <!-- bannner start -->
        <?php
        foreach ($galleryBanner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['gallery_title']); ?>) ">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['gallery_heading'] ?></h1>
            </section>
        <?php  } ?>
        <!-- bannner end -->


        <section id="our_gallery" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <?php
                foreach ($galleryHead as $value) {
                ?>
                    <div class="gallery_title text-center py-4">
                        <h2><strong class="gallery_title"> <?php echo $value['image_heading'] ?> </strong></h2>
                    </div>
                <?php  } ?>

                <div class="gallery_img text-center">
                    <div class="row">
                        <?php
                        foreach ($gallerySec as $value) {
                        ?>
                            <div class="col-md-3 g_img">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['gallery_img']) ?>" alt="" srcset="">
                            </div>
                        <?php  } ?>

                    </div>
                </div>
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
 