<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">Menu Form</h4>
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
                                    <!-- <div class="col-md-2"></div> -->
                                    <div class="col-md-6">
                                        <?php
                                        //  $data = $this->db->order_by('id', 'ASC')->get('menu')->result();
                                        //  print("<pre>".print_r($data,true)."</pre>"); exit;
                                        ?>
                                        <h2>Add Menu</h2>
                                        <div class="py-2 ">
                                            <label class="form-label" for="typeahead"> Menu Name </label>
                                            <input type="text" class="form-control" value="<?php echo set_value('menuName', $menuName); ?>" id="menuName" name="menuName" placeholder="e.g Enter your  text ..">
                                            <span class="required text-danger"><?php echo form_error("menuName") ?></span>
                                        </div>

                                        <div class="py-2 ">
                                            <label class="form-label" for="typeahead">Parent Id </label>
                                            <select class="form-select mb-3" aria-label="Default select example" name="parentId">
                                                <option value=" ">None</option>
                                                <?php
                                                $data = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();
                                                // print("<pre>".print_r($submenu,true)."</pre>"); exit;
                                                if (!empty($data)) {
                                                    foreach ($data as $value) {
                                                ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->menuName; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label" for="typeahead">Page Link </label>
                                            <input type="text" class="form-control " value="<?php echo set_value('page_link', $page_link); ?>" id="page_link" name="page_link" placeholder="e.g Enter your text ..">
                                            <span class="required text-danger"><?php echo form_error("page_link") ?></span>

                                        </div>
                                       
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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