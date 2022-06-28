
        <!-- bannner start -->
        <?php
        foreach ($contactBanner as $value) {
        ?>
            <section id="about_us" class=" background-res py-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('backend_design/uploads/' . $value['contact_banner']) ?>)">
                <h1 class="entry_title text-white fw-bold "><?php echo $value['contact_heading'] ?></h1><br>
                <div class="per">
                    <!-- <p class="entry_title text-white ">We will be glad to assist you</p> -->
                </div>
            </section>
        <?php  } ?>

        <!-- bannner end -->

        <!-- contact satrt -->

        <section id="Contact" class="py-5">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($contactSec as $value) {
                    ?>
                        <div class="col-md-4">
                            <div class="opening_hours text-center mt-5">
                                <div class="C_icon">
                                    <i class="<?php echo $value['icon'] ?>"></i>
                                </div>
                                <div class="C_heading py-2">
                                    <h2 class="C_heading"><?php echo $value['icon_heading'] ?></h2>
                                </div>
                                <div class="C_text mt-3 text-muted">
                                    <p class="C_text"><?php echo $value['icon_contant'] ?></p>
                                </div>
                                <div class="C_text text-muted">
                                    <p class=""><?php echo $value['sub_contant'] ?></p>
                                </div>

                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </section>


        <!-- contact end -->

        <!-- Sent_Info start -->

        <section id="Sent_info" class="mt-5 background-res py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Opacity-Image-02-1.jpg'); ?>)">
            <div class="container">
                <div class="sent text-center text-white mt-4">
                    <h2><strong>Get In Touch</strong></h2>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 ">
                        <p class="hr-style mb-3"></p>
                        <div class="Cont_text text-center text-white py-4">
                            <p>Do you have any questions regarding any of our products or services? Please send us an
                                email and we’ll be glad to assist you.</p>
                        </div>
                        <form action="mailto:mzrahman075@gmail.com" method="post" enctype="text/plain" class="was-validated">
                            <div class="form-group">
                                <label for="fullname" class="text-white">Name</label>
                                <input type="text" class="form-control" name="fullname" required>
                                <div class="valid-feedback" style="color:green;">valid</div>
                                <div class="invalid-feedback" style="color:red;">Enter Fullname before submitting the
                                    form</div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="text-white">E-mail</label>
                                <input type="email" class="form-control" name="email" required>
                                <div class="valid-feedback" style="color:green;">valid</div>
                                <div class="invalid-feedback " style="color:red;">Enter Email before submitting the
                                    form</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Subject</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label text-white">Your message
                                    (optional)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group py-3">
                                <input type="submit" class="btn btn-primary mr-3" value="Sent">
                            </div>

                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>
        </section>

        <!-- sent info end -->

        <section id="google map">
            <div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.575793415566!2d90.41693871498092!3d23.72683818460098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a788b0c23%3A0x4fd2e638e2d63d3e!2sTower%20(8th%20Floor%2C%2019%20Dilkusha%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1616560890980!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

