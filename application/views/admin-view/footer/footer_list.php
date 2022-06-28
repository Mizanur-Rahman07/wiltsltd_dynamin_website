<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">All Footer</h4>
                            <!-- <a href="#">all</a> -->
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/Footer/create_footer/') ?>" class="text-black"> New Footer</a></h4>
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

                                                <th class="sort" data-sort="title">Footer Img</th>
                                                <th class="sort" data-sort="start_date">Image contant</th>
                                                <th class="sort" data-sort="end_date">Company Heading</th>
                                                <th class="sort" data-sort="date">About Us</th>
                                                <th class="sort" data-sort="date">Team Organogram</th>
                                                <th class="sort" data-sort="date">Our Team</th>
                                                <th class="sort" data-sort="date">Our Milestone</th>
                                                <th class="sort" data-sort="date">Our Coverage</th>
                                                <th class="sort" data-sort="date">Contact Us Heding</th>
                                                <th class="sort" data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            foreach ($result as $value) {
                                            ?>
                                                <tr>
                                                    <td> <img style="width: 50px; height: 50px; border-radius: 100%;" src="<?php echo base_url('backend_design/uploads/' . $value['footer_img']) ?>" alt=""></td>
                                                    <td><?php echo $value['left_contant'] ?></td>
                                                    <td><?php echo $value['company'] ?></td>
                                                    <td><?php echo $value['about_us'] ?></td>
                                                    <td><?php echo $value['team_organogram'] ?></td>
                                                    <td><?php echo $value['our_team'] ?></td>
                                                    <td><?php echo $value['our_milestone'] ?></td>
                                                    <td><?php echo $value['our_coverage'] ?></td>
                                                    <td><?php echo $value['contact_us'] ?></td>
                                                    <td><a href="<?php echo base_url() . 'admin/Footer/create_footer/' . $value['id']; ?>" class="btn btn-info">Edit</a>
                                                        <a href="<?php echo base_url() . 'admin/Footer/delete_footer/' . $value['id']; ?>" class="btn btn-danger">Delete</a>
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