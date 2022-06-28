<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">About Form</h4>
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/company/About_us/about_us_list') ?>" class="text-black"> Back to List-></a></h4>
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
                                    <!-- <div class="col-md-2"></div> -->
                                    <div class="col-md-6">
                                        <h2>About Us</h2>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Heading Title</label>
                                            <input type="text" value="<?php echo set_value('about_us_title', $about_us_title); ?>" name="about_us_title" class="form-control" id="fullnameInput" placeholder="Enter your about ">
                                        </div>

                                        <div class="py-2 ">
                                            <label for="VertimeassageInput" class="form-label">About Contant</label>
                                            <textarea class="form-control"  value="<?php echo set_value('about_contant', $about_contant); ?>" name="about_contant" id="VertimeassageInput" rows="3" placeholder="Enter your image contant"><?php echo set_value('about_contant',$about_contant)?></textarea>
                                        </div>

                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Video Link</label>
                                            <input type="text" value="<?php echo set_value('video_link', $video_link); ?>" name="video_link" class="form-control" id="fullnameInput" placeholder="Enter your about ">
                                        </div>

                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Icon</label>
                                            <input type="text" value="<?php echo set_value('phone_icon', $phone_icon); ?>" name="phone_icon" class="form-control" id="fullnameInput" placeholder="Enter your about ">
                                        </div>

                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Phone No</label>
                                            <input type="text" value="<?php echo set_value('phone_no', $phone_no); ?>" name="phone_no" class="form-control" id="fullnameInput" placeholder="Enter your about ">
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