<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">Nsaid Solution Form</h4>
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/produtcs/Poultry/poultry_nsaid_list') ?>" class="text-black"> Back to List-></a></h4>
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
                                        <h2> Nsaid Solution</h2>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Heading Title</label>
                                            <input type="text" value="<?php echo set_value('nsaid_heading', $nsaid_heading); ?>" name="nsaid_heading" class="form-control" id="fullnameInput" placeholder="Enter here Title ">
                                        </div>


                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Nsaid Solution Image</label>
                                            <?php if (!empty($nsaid_img)) { ?>
                                                <img src="<?php echo base_url('backend_design/uploads/') . $nsaid_img; ?>" style="width:100px; height: 100px;">
                                            <?php } ?>
                                            <input type="file" value="<?php echo set_value('nsaid_img', $nsaid_img); ?>" name="nsaid_img" class="input-file uniform_on" id="fullnameInput" placeholder="Enter your name">
                                        </div>

                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Image Title</label>
                                            <input type="text" value="<?php echo set_value('nsaid_img_title', $nsaid_img_title); ?>" name="nsaid_img_title" class="form-control" id="fullnameInput" placeholder="Enter here Image Title ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Button</label>
                                            <input type="text" value="<?php echo set_value('nsaid_button', $nsaid_button); ?>" name="nsaid_button" class="form-control" id="fullnameInput" placeholder="Enter here Button ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label"> Button Link</label>
                                            <input type="text" value="<?php echo set_value('nsaid_button_link', $nsaid_button_link); ?>" name="nsaid_button_link" class="form-control" id="fullnameInput" placeholder="Enter here Button Link ">
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