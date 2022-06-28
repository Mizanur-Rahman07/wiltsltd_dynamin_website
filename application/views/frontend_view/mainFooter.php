<!-- footer -->
<?php
$this->db->order_by('id', 'DESC');
$data['dyFooter'] = $this->db->get_where('footer', array('type' => 'about'), 1)->result_array();
$this->db->order_by('id', 'DESC');
$data['comFooter'] = $this->db->get_where('footer', array('type' => 'company'), 1)->result_array();
$this->db->order_by('id', 'DESC');
$data['contFooter'] = $this->db->get_where('footer', array('type' => 'contact'), 1)->result_array();
// return $data;
?>


<footer id="footer" class=" background-res py-5" style="background-image: url(<?php echo base_url('frontend_design/assets/images/Footer-opacity-Image.png'); ?>)">
    <div class="container">
        <div class="row">


            <div class="col-md-3">
                <?php
                foreach ($dyFooter as $value) {
                ?>
                    <div class="footer_img">
                        <img src="<?php echo base_url('backend_design/uploads/' . $value['footer_img']) ?>" alt="" srcset="">
                    </div>
                <?php  } ?>

                <div class="footer_text mt-4">
                    <p class="text-white"><?php echo $value['left_contant'] ?> <a href="<?php echo base_url('public/Fontend/about_us') ?>"><span class="TO"><?php echo $value['left_about_us'] ?></span></a></p>
                </div>
                <div class="footer_icon mt-5">
                    <div class="icon">
                        <a href="<?php echo $value['fb_icon_link'] ?>" <i class="<?php echo $value['fb_icon'] ?> toHov"></i>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="<?php echo $value['twit_icon_link'] ?>" <i class="<?php echo $value['twit_icon'] ?> toHov"></i>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="<?php echo $value['insta_icon_link'] ?>" <i class="<?php echo $value['insta_icon'] ?> toHov"></i>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="<?php echo $value['ytube_icon_link'] ?>" <i class="<?php echo $value['ytube_icon'] ?> toHov"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <?php
                foreach ($comFooter as $value) {
                ?>
                    <div class="company">
                        <p class="fw-bold text-white mb-3 fs-5"> <?php echo $value['company'] ?></p>
                    </div>
                    <div class="about_us">
                        <p><a href="<?php echo base_url('public/Fontend/about_us') ?>" class="TO mb-2"> <?php echo $value['about_us'] ?>
                            </a></p>
                        <div class="line"></div>
                    </div>
                    <div class="team_organogram">
                        <p> <a href="<?php echo base_url('public/Fontend/team_organogram') ?>" class="TO mb-2 TO"><?php echo $value['team_organogram'] ?>
                            </a></p>
                        <div class="line"></div>
                    </div>
                    <div class="our_team">
                        <p><a href="<?php echo base_url('public/Fontend/our_team') ?>" class="TO mb-2"> <?php echo $value['our_team'] ?>
                            </a></p>
                        <div class="line"></div>
                    </div>
                    <div class="our_mileston">
                        <p><a href="<?php echo base_url('public/Fontend/our_milestone') ?>" class="TO mb-2"> <?php echo $value['our_milestone'] ?>
                            </a></p>
                        <div class="line"></div>
                    </div>
                    <div class="our_coverage">
                        <p> <a href="<?php echo base_url('public/Fontend/our_coverage') ?>" class="TO mb-2"> <?php echo $value['our_coverage'] ?>
                            </a></p>
                    </div>
                <?php  } ?>

            </div>

            <div class="col-md-3">
                <?php
                foreach ($contFooter as $value) {
                ?>
                    <div class="contact">
                        <p class="fw-bold text-white mb-3 fs-5"><?php echo $value['contact_us'] ?></p>
                    </div>
                    <div class="address">
                        <p class="text-white"><?php echo $value['right_contant'] ?></p>
                        <p class="text-white"> Phone: <a href="tel:+8801755463304 " class="TO"><?php echo $value['phone_no'] ?></a>
                        </p>
                        <p class="text-white"> Mobile:<a href="tel:+8801755463304 " class="TO">
                        <?php echo $value['mobile_no'] ?></a></p>
                        <p class="text-white">Email: <a href="mailto:mzrahman075@gmail.com" class="TO">
                        <?php echo $value['email'] ?> </a></p>
                    </div>
                <?php  } ?>

            </div>

            <div class="col-md-3">
                <div class="map">
                    <p class="fw-bold text-white mb-3 fs-5">VISIT US IN PERSON </p>
                </div>
                <div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.575793415566!2d90.41693871498092!3d23.72683818460098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a788b0c23%3A0x4fd2e638e2d63d3e!2sTower%20(8th%20Floor%2C%2019%20Dilkusha%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1616560890980!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- <div style="clear:both;"></div> -->
            </div>

        </div>

    </div>


</footer>
<div class="p-3 bgColor text-white text-center">
    <small>&copy;Copyright 2022 by Refsnes Data. All Rights Reserved.</small>
</div>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- slick slide cdn -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slide cdn -->
<script src="<?php echo base_url() ?>frontend_design/assets/js/main.js"></script>
</body>

</html>