
    <!-- Pre-loader end -->
    <?php foreach ($website_info as $row) :
        $site_name=$row->site_name;
        $about=$row->about;
        $contact=$row->contact;
        $email=$row->email;
        $location=$row->location;
        endforeach;
    ?>


            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="<?=base_url();?>/assets/backend/plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?=base_url();?>/assets/backend/plugins/images/users/1.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2"><?= $this->session->userdata('fullname');?></h4>
                                        <h5 class="text-white mt-2"><?= $this->session->userdata('email');?></h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h3 class="box-title">Website Settings</h3>
                            <p class="text-muted">Chnage website information</p>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <label style="color: red; " ><?= $this->session->flashdata('msg_settings_error');?></label>
                                        <label style="color: green;" ><?= $this->session->flashdata('msg_settings');?></label>
                                    </div>
                                </div>
                                <form class="form-horizontal form-material" method="post" action="<?= base_url();?>index.php/insertFromSettings">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Website Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="site_info" value="<?php echo isset($site_name) ? $site_name : ''; ?>"value="<?php echo isset($site_name) ? $site_name : ''; ?>" type="text" placeholder="Johnathan Doe"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">About us</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea name="about_info" rows="5" class="form-control p-0 border-0" ><?php echo isset($about) ? $about : ''; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Contact No.</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="contact_info" value="<?php echo isset($contact) ? $contact : ''; ?>" type="number" placeholder="093 456 7890"
                                                class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="email_info" value="<?php echo isset($email) ? $email : ''; ?>"  type="email" placeholder="johnathan@admin.com"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Location</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="location_info" value="<?php echo isset($location) ? $location : ''; ?>"  type="text" placeholder="San Isidro Calape Bohol"
                                                class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button name="settings_btn" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

   