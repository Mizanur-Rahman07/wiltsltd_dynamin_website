        <!-- slide start -->
        <section id="First_slide">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $i = 1;
                    foreach ($slideSection as $value) {
                        $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item';
                    ?>
                        <div class="<?php echo $item_class; ?>">
                            <div class="slider">
                                <div class="slide_img">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['slide_img']) ?>" class="" alt="...">
                                </div>
                                <div class="slider-text align-middle">
                                    <div class="slider-title">
                                        <h4 class="first_title ">
                                            <?php echo $value['slide_heading_title'] ?></h4>
                                        <h3 class="secnd_last_title py-2"><?php echo $value['slide_title'] ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; } ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- slide end -->
        <!-- contant start -->
        <?php
        foreach ($celSection as $value) {
        ?>
            <section id="Celebrate" class=" background-res background-ats py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?> ">
                <div class="container">
                    <div class="celebrate_part mt-5">
                        <div class="row">
                            <div class="col-md-8 paragraph">
                                <h2 class="mb-5 fw-light pCel"><?php echo $value['celebrating_title'] ?></h2>
                                <p class="celPeragraph text-muted "> <?php echo $value['celebrating_paragraph'] ?>
                                <p>
                                    <a <button href="<?php echo $value['celebrating_button_link'] ?>" class="btn btn-primary mt-2 text-white"><?php echo $value['celebrating_button'] ?></button> </a>
                            </div>
                            <div class="col-md-4 celebrat_img">
                                <img style="width: 368px; height: auto;" src="<?php echo base_url('backend_design/uploads/' . $value['celebrating_img']) ?>" class="d-block " alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php  } ?>

        <!-- contant end -->

        <!-- Product line start -->

        <section id="Our_Product_Line" class=" background-res py-5" style="background-image:url(<?php echo base_url('frontend_design/assets/images/Opacity-Image-02-1.jpg'); ?>)">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="pline mb-1 mt-3"></div>
                        <div class="pline"></div>
                    </div>
                    <?php
                    foreach ($productHeading as $value) {
                    ?>
                        <div class="col-md-4">
                            <h2 class=" text-center mb-3 text-white "><strong class="proFont"><?php echo $value['product_title'] ?></strong> </h2>
                        </div>
                    <?php  } ?>

                    <div class="col-md-4">
                        <div class="pline mb-1 mt-3"></div>
                        <div class="pline"></div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($productSection as $value) {
                    ?>
                        <div class="col-md-4">
                            <div class="product_img text-center mt-4">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['product_img']) ?>" alt="" srcset="">
                            </div>
                            <div class="product_text">
                                <h2 class="text-center text-white mt-3 "><strong class="proFont"><?php echo $value['product_img_title'] ?></strong></h2>
                            </div>
                        </div>
                    <?php  } ?>

                </div>
            </div>
        </section>

        <!-- product line end  -->
        <!-- features start -->
        <section id="features" class=" background-res background-ats text-center py-5 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="cline mb-1 mt-3"></div>
                        <div class="cline"></div>
                    </div>
                    <?php
                    foreach ($capabilHeading as $value) {
                    ?>
                        <div class="col-md-4 mt">
                            <h2><strong><?php echo $value['capabilities_title'] ?></strong></h2>
                            <p class="CS_style mt-3"></p>
                        </div>
                    <?php  } ?>

                    <div class="col-md-4">
                        <div class="cline mb-1 mt-3"></div>
                        <div class="cline"></div>
                    </div>
                </div>
                <div class="capabilities mt-5">
                    <div class="row">

                        <?php
                        foreach ($capabilSec as $value) {
                        ?>
                            <div class="col-lg-4  d-block d-lg-flex">
                                <div class="features-col">
                                    <i class="<?php echo $value['capabilities_icon'] ?> fa-3x icon-style  "></i>
                                    <div class="fusion_text">
                                        <p><?php echo $value['capabilities_icon_paragraph'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php  } ?>


                    </div>
                </div>
            </div>
        </section>
        <!-- features end -->

        <!-- current offer start -->
        <section id="Current_offer" class=" background-res py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Opacity-Image-01-1.jpg'); ?>)">
            <div class="container">
                <?php
                foreach ($currentHeading as $value) {
                ?>
                    <h2 class="fw-bold text-center mt-3 text-white currentFont"><?php echo $value['current_title'] ?></h2>
                <?php  } ?>

                <p class="OCO_style mt-3 mb-5"></p>
                <div class="row">

                    <?php
                    foreach ($currentSec as $value) {
                    ?>
                        <div class="col-md-3">
                            <div class="CO_img text-center ">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['current_img']) ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="CO_text mt-1 py-3">
                                <p class="card-title text-center text-white"><?php echo $value['current_img_paragraph'] ?>
                                </p>
                            </div>
                        </div>
                    <?php  } ?>

                </div>
            </div>
        </section>
        <!-- current offer end -->

        <!-- our partnet start -->
        <section id="our_partner" class=" background-res background-ats text-center py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="cline mb-1 mt-3"></div>
                        <div class="cline"></div>
                    </div>
                    <?php
                    foreach ($partnerHeading as $value) {
                    ?>
                        <div class="col-md-4 ">
                            <h2 class="fw-bold text-center mb-5 currentFont"><?php echo $value['partner_title'] ?></h2>
                        </div>
                    <?php  } ?>

                    <div class="col-md-4">
                        <div class="cline mb-1 mt-3"></div>
                        <div class="cline"></div>
                    </div>
                </div>
            </div>

            <div class="our_partner_slide ">
                <div class="OPS_img">
                    <div class="responsive">

                        <?php
                        foreach ($partnerSec as $value) {
                        ?>
                            <div class="slick_slide ">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['partner_slide_img']) ?>" alt="" srcset="">
                            </div>
                        <?php  } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- our partner end -->

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
