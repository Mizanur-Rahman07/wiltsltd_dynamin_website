<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">Celebrate Form</h4>
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/Menu/menu_list') ?>" class="text-black"> Back to List-></a></h4>
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
                                    <div class="col-md-6">
                                        <h2>Edit Menu</h2>
                                        <div class="py-2">
                                            <label class="form-label"><strong>Menu Name</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="<?php echo set_value('menuName', $menuName); ?>" id="menuName" name="menuName" placeholder="e.g Enter your  text ..">
                                            <span class="required text-danger"><?php echo form_error("menuName") ?></span>
                                        </div>

                                        <div class="py-2">
                                            <label class="form-label"><strong>Parent Id</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="<?php echo set_value('parentId', $parentId); ?>" id="parentId" name="parentId" placeholder="e.g Enter your  text ..">
                                            <span class="required text-danger"><?php echo form_error("parentId") ?></span>
                                        </div>

                                        <?php if (!empty($logo)) { ?>
                                            <div class="py-2">
                                                <?php
                                                if (!empty($logo)) { ?>
                                                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $logo; ?>" alt=""><br>
                                                <?php    }
                                                ?>
                                                <label class="form-label"><strong>Logo</strong><span class="text-danger">*</span></label><br>
                                                <input type="file" class="input-xlarge " value="" id="logo" name="logo">
                                                <span class="required text-danger"><?php echo form_error("logo") ?></span>
                                            </div>

                                        <?php   } ?>

                                        <div class="py-2">
                                            <label class="form-label"><strong>Page Link</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="<?php echo set_value('page_link', $page_link); ?>" id="page_link" name="page_link" placeholder="e.g Enter your text..">
                                            <span class="required text-danger"><?php echo form_error("page_link") ?></span>
                                        </div>

                                        <?php if (!empty($btn_txt)) { ?>
                                            <div class="py-2">
                                                <label class="form-label"><strong>Button Text </strong><span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo set_value('btn_txt', $btn_txt); ?>" id="btn_txt" name="btn_txt" placeholder="e.g Enter your text..">
                                                <span class="required text-danger"><?php echo form_error("btn_txt") ?></span>
                                            </div>
                                        <?php  } ?>

                                        <?php if (!empty($btn_icon)) { ?>
                                            <div class="py-2">
                                                <label class="form-label"><strong> Button Icons </strong><span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo set_value('btn_icon', $btn_icon); ?>" id="btn_icon" name="btn_icon" placeholder="e.g Enter your text..">
                                                <span class="required text-danger"><?php echo form_error("btn_icon") ?></span>
                                            </div>
                                        <?php  } ?>
                                        <br>
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
                                    </div>
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