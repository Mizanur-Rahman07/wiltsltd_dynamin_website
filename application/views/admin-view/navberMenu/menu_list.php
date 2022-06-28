<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">All Menu</h4>
                            <!-- <a href="#">all</a> -->
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/Menu/add_menu/') ?>" class="text-black"> Add Menu</a></h4>
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
                                <div class="table-responsive table-card mt-3 mb-1 ">
                                    <table class="table align-middle table-nowrap " id="postsList" id="customerTable">
                                        <thead class="table-light">
                                            <tr>

                                                <th class="sort" data-sort="title">Name</th>
                                                <th class="sort" data-sort="start_date">Parent Id </th>
                                                <th class="sort" data-sort="end_date"> Button Text</th> 
                                                <th class="sort" data-sort="end_date">Button Icon</th> 
                                                <th class="sort" data-sort="end_date">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            foreach ($result as $value) {
                                            ?>
                                                <tr>
                                                    <!-- <td> <img style="width: 50px; height: 50px; border-radius: 100%;" src="<?php echo base_url('backend_design/uploads/' . $value['celebrating_img']) ?>" alt=""></td> -->
                                                    <td><?php echo $value['menuName'] ?></td>
                                                    <td><?php echo $value['parentId'] ?></td>
                                                    <td><?php echo $value['btn_txt'] ?></td>
                                                    <td><?php echo $value['btn_icon'] ?></td>
                                                    <td><a href="<?php echo base_url() . 'admin/Menu/edit_menu/' . $value['id']; ?>" class="btn btn-info">Edit</a>
                                                        <a href="<?php echo base_url() . 'admin/Menu/delete/' . $value['id']; ?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
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