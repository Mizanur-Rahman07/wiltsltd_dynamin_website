<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">Footer Form</h4>
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/Footer/footer_list') ?>" class="text-black"> Back to List-></a></h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <label for="vertical-form-showcode" class="form-label text-muted">Show
                                        Code</label>
                                    <input class="form-check-input code-switcher" type="checkbox" id="vertical-form-showcode">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-muted">Example of vertical form using <code>form-control</code>
                                class. No need to specify row and col class to create vertical form.</p>
                            <div class="live-preview">
                                <form action="" method="POST" class="row g-3" enctype="multipart/form-data">
                                    <div class="col-md-4">
                                        <h2>About</h2>

                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Footer Image</label>
                                           <?php if(!empty($footer_img)){ ?>
                                                <img src="<?php echo base_url('backend_design/uploads/').$footer_img; ?>"  style="width:100px; height: 100px;">
                                            <?php }?>
                                            <input type="file" value="<?php echo set_value('footer_img', $footer_img); ?>" name="footer_img" class="input-file uniform_on" id="fullnameInput" placeholder="Enter your name">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="VertimeassageInput" class="form-label">Image contant</label>
                                            <textarea class="form-control"  value="<?php echo set_value('left_contant', $left_contant); ?>" name="left_contant" id="VertimeassageInput" rows="3" placeholder="Enter your image contant"><?php echo set_value('left_contant',$left_contant)?></textarea>
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">About Us</label>
                                            <input type="text"  value="<?php echo set_value('left_about_us', $left_about_us); ?>" name="left_about_us" class="form-control" id="fullnameInput" placeholder="Enter your about ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Facebook Icon</label>
                                            <input type="text"  value="<?php echo set_value('fb_icon', $fb_icon); ?>" name="fb_icon" class="form-control" id="fullnameInput" placeholder="Enter your Fb icon">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Facebook Icon Link</label>
                                            <input type="text"  value="<?php echo set_value('fb_icon_link', $fb_icon_link); ?>" name="fb_icon_link" class="form-control" id="fullnameInput" placeholder="Enter your fb icon link">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Twiter Icon</label>
                                            <input type="text"  value="<?php echo set_value('twit_icon', $twit_icon); ?>" name="twit_icon" class="form-control" id="fullnameInput" placeholder="Enter your twiter icon">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Twiter Icon Link</label>
                                            <input type="text"  value="<?php echo set_value('twit_icon_link', $twit_icon_link); ?>" name="twit_icon_link" class="form-control" id="fullnameInput" placeholder="Enter your twiter icon link ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Instragram Icon</label>
                                            <input type="text"  value="<?php echo set_value('insta_icon', $insta_icon); ?>" name="insta_icon" class="form-control" id="fullnameInput" placeholder="Enter your insta icon">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Instragram Icon Link</label>
                                            <input type="text"  value="<?php echo set_value('insta_icon_link', $insta_icon_link); ?>" name="insta_icon_link" class="form-control" id="fullnameInput" placeholder="Enter your insta icon link ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Youtube Icon</label>
                                            <input type="text"  value="<?php echo set_value('ytube_icon', $ytube_icon); ?>" name="ytube_icon" class="form-control" id="fullnameInput" placeholder="Enter your youtube icon">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="inputEmail4" class="form-label">Youtube icon link</label>
                                            <input type="text"  value="<?php echo set_value('ytube_icon_link', $ytube_icon_link); ?>" name="ytube_icon_link" class="form-control" id="inputEmail4" placeholder="Enter your youtube icon link">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h2>Company</h2>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Company Heading</label>
                                            <input type="text"  value="<?php echo set_value('company', $company); ?>" name="company" class="form-control" id="fullnameInput" placeholder="Enter your COMPANY heading">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">About Us</label>
                                            <input type="text"  value="<?php echo set_value('about_us', $about_us); ?>" name="about_us" class="form-control" id="fullnameInput" placeholder="Enter your About us">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Team Organogram</label>
                                            <input type="text"  value="<?php echo set_value('team_organogram', $team_organogram); ?>" name="team_organogram" class="form-control" id="fullnameInput" placeholder="Enter your team organogram">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Our Team</label>
                                            <input type="text"  value="<?php echo set_value('our_team', $our_team); ?>" name="our_team" class="form-control" id="fullnameInput" placeholder="Enter our team">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Our Mileston</label>
                                            <input type="text"  value="<?php echo set_value('our_milestone', $our_milestone); ?>" name="our_milestone" class="form-control" id="fullnameInput" placeholder="Enter our team">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Our Coverage</label>
                                            <input type="text"  value="<?php echo set_value('our_coverage', $our_coverage); ?>" name="our_coverage" class="form-control" id="fullnameInput" placeholder="Enter our coverage">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <h2>Contact</h2>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Contact Us</label>
                                            <input type="text"  value="<?php echo set_value('contact_us', $contact_us); ?>" name="contact_us" class="form-control" id="fullnameInput" placeholder="Enter your contact us">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="VertimeassageInput" class="form-label">Contant</label>
                                            <textarea class="form-control"  value="<?php echo set_value('right_contant', $right_contant); ?>" name="right_contant" id="VertimeassageInput" rows="3" placeholder="Enter your Contact"><?php echo set_value('right_contant',$right_contant)?></textarea>
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Phone No</label>
                                            <input type="text"  value="<?php echo set_value('phone_no', $phone_no); ?>" name="phone_no" class="form-control" id="fullnameInput" placeholder="Enter your phone no ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Mobile No</label>
                                            <input type="text"  value="<?php echo set_value('mobile_no', $mobile_no); ?>" name="mobile_no" class="form-control" id="fullnameInput" placeholder="Enter your mobile no ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Email</label>
                                            <input type="text"  value="<?php echo set_value('email', $email); ?>" name="email" class="form-control" id="fullnameInput" placeholder="Enter your Email">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>
                            <div class="d-none code-view">
                                <pre class="language-markup" style="height: 375px;">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end row-->
<?php $this->load->view('footer'); ?>









