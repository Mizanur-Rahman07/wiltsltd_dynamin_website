
        <?php
        foreach ($teamBannerTop as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo base_url('backend_design/uploads/' . $value['team_banner_img']) ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['team_heading'] ?></h1>
            </section>
        <?php  } ?>

        <!-- bannner end -->

        <!-- our team start -->
        <section id="Our_team" class=" background-res background-ats py-5" style="background-image: url('./assets/images/Background-Image-1.png'); ">
            <div class="container">
                <div class="team mt-4">
                    <div class="row">
                        <?php
                        foreach ($team_memberSec as $value) {
                        ?>
                            <div class="col-md-3 ">
                                <div class=" bg-white py-3 m-2 Oteam">
                                    <div class="text-center py-4">
                                        <img class="team_img" src="<?php echo base_url('backend_design/uploads/' . $value['team_member_img']) ?>" alt="" srcset="">
                                    </div>
                                    <div class="team_text text-center mt-3">
                                        <h2 class="fs-2"><?php echo $value['member_name'] ?></h2>
                                        <p><?php echo $value['member_surname'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php  } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- our team End -->

        <!-- total_person start -->
        <section id="total_person" class=" background-res background-ats py-5" style="background-image: url('./assets/images/Background-Image-1.png'); ">
            <div class="container">
                <div class="tp_title text-center">
                    <h2><strong>Total number of Employee: 236 persons</strong></h2>
                </div>
                <div class="row">
                    <div class="col-md-3 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Head Office</h5>
                        </div>
                    </div>
                    <div class="col-md-3 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Depot Staff</h5>
                        </div>
                    </div>
                    <div class="col-md-3 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Trainee</h5>
                        </div>
                    </div>
                    <div class="col-md-3 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Area Manager</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Regional Sales Manager</h5>
                        </div>
                    </div>
                    <div class="col-md-4 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Marketing Representative</h5>
                        </div>
                    </div>
                    <div class="col-md-4 py-5">
                        <div class="person text-center">
                            <h5 class="fs-3">Depot Manager</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- total_person end -->

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
  