<?php
foreach ($dairyBanner as $value) {
?>
    <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['dairy_img']) ?>)">
        <h1 class="entry_title text-white fw-bold "><?php echo $value['dairy_heading'] ?></h1>
    </section>
<?php } ?>
<!-- bannner end -->

<!-- Antibiotic Injection start -->
<section id="Antibiotic Injection" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
    <div class="container">
        <?php
        foreach ($antiInjecHead as $value) {
        ?>
            <div class="disi_title text-center py-4">
                <h2><strong><?php echo $value['antiInjec_heading'] ?></strong></h2>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-md-4"></div>
            <?php
            foreach ($antiInjecSec as $value) {
            ?>
                <div class="col-md-4">
                    <div class="prob text-center border border-3 rounded-2 m-3">
                        <div class="poultry_Img ">
                            <img src="<?php echo base_url('backend_design/uploads/' . $value['antiInjec_img']) ?>" alt="" srcset="">
                        </div>
                        <div class="prob_text ">
                            <h4 class="fs-2 mt-3"><?php echo $value['antiInjec_img_title'] ?></h4>
                        </div>
                        <div class="prob_button">
                            <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['antiInjec_button_link'] ?>"><?php echo $value['antiInjec_button'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<!-- Antibiotic Injection end -->

<!-- Hormone Injection Start -->
<section id="Antibiotic" class=" background-res background-ats" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
    <div class="container">
        <?php
        foreach ($hormonioticHead as $value) {
        ?>
            <div class="anti_title text-center py-4">
                <h2><strong><?php echo $value['hormone_heading'] ?></strong></h2>
            </div>
        <?php } ?>

        <div class="row">
            <?php
            foreach ($hormonioticSec as $value) {
            ?>
                <div class="col-md-4">
                    <div class="anti text-center border border-3 rounded-2 m-3">
                        <div class="poultry_Img ">
                            <img src="<?php echo base_url('backend_design/uploads/' . $value['hormone_img']) ?>" alt="" srcset="">
                        </div>
                        <div class="anti_text ">
                            <h4 class="fs-2"><?php echo $value['hormone_img_title'] ?></h4>
                        </div>
                        <div class="anti_button">
                            <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['hormone_button_link'] ?>"><?php echo $value['hormone_button'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- Hormone Injection end -->

<!-- NSAID Injection start -->
<section id="Antibiotic Injection" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png'); ?>)">
    <div class="container">
        <?php
        foreach ($nsaidInjHead as $value) {
        ?>
            <div class="disi_title text-center py-4">
                <h2><strong><?php echo $value['nsaidInjec_heading'] ?></strong></h2>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-md-4"></div>
            <?php
            foreach ($nsaidInjSec as $value) {
            ?>
                <div class="col-md-4">
                    <div class="prob text-center border border-3 rounded-2 m-3">
                        <div class="poultry_Img ">
                            <img src="<?php echo base_url('backend_design/uploads/' . $value['nsaidInjec_img']) ?>" alt="" srcset="">
                        </div>
                        <div class="prob_text ">
                            <h4 class="fs-2 mt-3"><?php echo $value['nsaidInjec_img_title'] ?></h4>
                        </div>
                        <div class="prob_button">
                            <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['nsaidInjec_button_link'] ?>"><?php echo $value['nsaidInjec_button'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<!-- NSAID Injection end -->

<!-- PPVM Start -->
<section id="PPVM" class=" background-res background-ats" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
    <div class="container">
        <?php
        foreach ($vitaminHead as $value) {
        ?>
            <div class="anti_title text-center py-4">
                <h2><strong><?php echo $value['vitamin_heading'] ?></strong></h2>
            </div>
        <?php } ?>

        <div class="row">
            <?php
            foreach ($vitaminSec as $value) {
            ?>
                <div class="col-md-4">
                    <div class="anti text-center border border-3 rounded-2 m-3">
                        <div class="poultry_Img ">
                            <img src="<?php echo base_url('backend_design/uploads/' . $value['vitamin_img']) ?>" alt="" srcset="">
                        </div>
                        <div class="anti_text ">
                            <h4 class="fs-2"><?php echo $value['vitamin_img_title'] ?></h4>
                        </div>
                        <div class="anti_button">
                            <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['vitamin_button_link'] ?>"><?php echo $value['vitamin_button'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- PPVM end -->

<!-- Feed Premix start -->
<section id="Feed Premix" class=" background-res background-ats py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Background-Image-1.png');  ?>)">
    <div class="container">
        <?php
        foreach ($feedpreHead as $value) {
        ?>
            <div class="disi_title text-center py-4">
                <h2><strong>Feed Premix</strong></h2>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-4"></div>
            <?php
            foreach ($feedpreSec as $value) {
            ?>
                <div class="col-md-4">
                    <div class="prob text-center border border-3 rounded-2 m-3">
                        <div class="poultry_Img ">
                            <img src="<?php echo base_url('backend_design/uploads/' . $value['feedpre_img']) ?>" alt="" srcset="">
                        </div>
                        <div class="prob_text ">
                            <h4 class="fs-2 mt-3"><?php echo $value['feedpre_img_title'] ?></h4>
                        </div>
                        <div class="prob_button">
                            <a class="btn btn-primary mb-2 text-white" href="<?php echo $value['feedpre_button_link'] ?>"><?php echo $value['feedpre_button'] ?></a>
                        </div>
                    </div>
                </div>

            <?php } ?>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<!-- Feed Premix end -->


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