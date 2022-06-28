
        <!-- bannner start -->
        <?php
        foreach ($poul_banner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['poultry_img']) ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['poultry_heading'] ?></h1>
            </section>
        <?php  } ?>
        <!-- bannner end -->

        <!-- Antibiotic Start -->
        <section id="Antibiotic" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <?php
                foreach ($antibioticHead as $value) {
                ?>
                    <div class="anti_title text-center mt-5">
                        <h2><strong><?php echo $value['anti_heading'] ?></strong></h2>
                        <p class="p_style mt-3 mb-4"></p>
                    </div>
                <?php  } ?>

                <div class="row">
                    <?php
                    foreach ($antibioticSec as $value) {
                    ?>
                        <div class="col-md-4">
                            <div class="anti text-center border border-3 rounded-2 m-3">
                                <div class="poultry_Img ">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['anti_img']) ?>" alt="" srcset="">
                                </div>
                                <div class="anti_text ">
                                    <h4 class="fs-2"><?php echo $value['anti_img_title'] ?></h4>
                                </div>
                                <div class="anti_button">
                                    <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['anti_button_link'] ?>"><?php echo $value['anti_button'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                </div>
            </div>
        </section>
        <!-- Antibiotic end -->

        <!-- Probiotic start -->
        <section id="Probiotic" class=" background-res background-ats" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
            <div class="container">
                <?php
                foreach ($probiotic as $value) {
                ?>
                    <div class="prob_title text-center py-4">
                        <h2><strong><?php echo $value['pro_heading'] ?></strong></h2>
                        <p class="p_style mt-3 mb-4"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="prob text-center border border-3 rounded-2 m-3">
                                <div class="poultry_Img ">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['pro_img']) ?>" alt="" srcset="">
                                </div>
                                <div class="prob_text ">
                                    <h4 class="fs-2"><?php echo $value['pro_img_title'] ?></h4>
                                </div>
                                <div class="prob_button">
                                    <a class="btn btn-primary mb-2 text-white " href="<?php echo $value['pro_button_link'] ?>"><?php echo $value['pro_button'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                    <div class="col-md-4"></div>
                    </div>
        </section>
        <!-- Probiotic end -->

        <!-- Water Solution Start -->
        <section id="Antibiotic" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <?php
                foreach ($waterHead as $value) {
                ?>
                    <div class="Wsolution_title text-center py-4">
                        <h2><strong><?php echo $value['water_heading'] ?></strong></h2>
                        <p class="p_style mt-3 mb-4"></p>
                    </div>
                <?php  } ?>
                <div class="row">
                    <?php
                    foreach ($waterSec as $value) {
                    ?>
                        <div class="col-md-4">
                            <div class="anti text-center border border-3 rounded-2 m-3">
                                <div class="poultry_Img ">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['water_img']) ?>" alt="" srcset="">
                                </div>
                                <div class="anti_text ">
                                    <h4 class="fs-2"><?php echo $value['water_img_title'] ?></h4>
                                </div>
                                <div class="anti_button">
                                    <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['water_button_link'] ?>"><?php echo $value['water_img_button'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                </div>
            </div>
        </section>
        <!-- Water Solution end -->

        <!-- NSAID Solution start -->
        <section id="Probiotic" class=" background-res background-ats" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
            <div class="container">
                <?php
                foreach ($nsaidHead as $value) {
                ?>
                    <div class="nsaid_title text-center py-4">
                        <h2><strong><?php echo $value['nsaid_heading'] ?></strong></h2>
                        <p class="p_style mt-3 mb-4"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>

                        <div class="col-md-4">
                            <div class="prob text-center border border-3 rounded-2 m-3">
                                <div class="poultry_Img ">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['nsaid_img']) ?>" alt="" srcset="">
                                </div>
                                <div class="prob_text ">
                                    <h4 class="fs-2"><?php echo $value['nsaid_img_title'] ?></h4>
                                </div>
                                <div class="prob_button">
                                    <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['nsaid_button_link'] ?>"><?php echo $value['nsaid_button'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                    <div class="col-md-4"></div>

                    </div>
            </div>
        </section>
        <!-- NSAID Solution end -->

        <!-- Feed Premix Start -->
        <section id="Antibiotic" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <?php
                foreach ($premixHead as $value) {
                ?>
                    <div class="Fpremix_title text-center py-4">
                        <h2><strong><?php echo $value['premix_heading'] ?></strong></h2>
                        <p class="p_style mt-3 mb-4"></p>
                    </div>
                <?php  } ?>
                <div class="row">
                    <?php
                    foreach ($premixSec as $value) {
                    ?>
                        <div class="col-md-4">
                            <div class="anti text-center border border-3 rounded-2 m-3">
                                <div class="poultry_Img ">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['premix_img']) ?>" alt="" srcset="">
                                </div>
                                <div class="anti_text ">
                                    <h4 class="fs-2"><?php echo $value['premix_img_title'] ?></h4>
                                </div>
                                <div class="anti_button">
                                    <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['premix_button_link'] ?>"><?php echo $value['premix_button'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </section>
        <!-- Feed Premix end -->

        <!-- NSAID Solution start -->
        <section id="Disinfectant" class=" background-res background-ats" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
            <div class="container">
                <?php
                foreach ($disination as $value) {
                ?>
                    <div class="disi_title text-center py-4">
                        <h2><strong><?php echo $value['disi_heading'] ?></strong></h2>
                        <p class="p_style mt-3 mb-4"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>

                        <div class="col-md-4">
                            <div class="prob text-center border border-3 rounded-2 m-3">
                                <div class="poultry_Img ">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['disi_img']) ?>" alt="" srcset="">
                                </div>
                                <div class="prob_text ">
                                    <h4 class="fs-2 mt-3"><?php echo $value['disi_img_title'] ?></h4>
                                </div>
                                <div class="prob_button">
                                    <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['disi_button_link'] ?>"><?php echo $value['disi_button'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                    <div class="col-md-4"></div>
                    </div>
            </div>
        </section>
        <!-- NSAID Solution end -->

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
  