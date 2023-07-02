

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
            
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h3 class="box-title">Create Admin</h3>
                            <p class="text-muted">Add admininstrator</p>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <label style="color: red; " ><?= $this->session->flashdata('msg_settings_error');?></label>
                                        <label style="color: green;" ><?= $this->session->flashdata('msg_settings');?></label>
                                    </div>
                                </div>
                                <form class="form-horizontal form-material" method="post" action="<?= base_url();?>index.php/insertFromAdmin" method="post">
                                    <div class="form-group mb-4">
                                        <label class="col-md-3 p-0">Full Name</label>
                                        <div class="col-md-3 border-bottom p-0">
                                            <input name="full_admin" type="text" placeholder="Johnathan Doe"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-3 p-0">Email</label>
                                        <div class="col-md-3 border-bottom p-0">
                                            <input name="email_admin" type="email" placeholder="jonathan@gmail.com"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-3 p-0">Password</label>
                                        <div class="col-md-3 border-bottom p-0">
                                            <input name="pass_admin" type="password" value="" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-3 p-0">Confirm Password</label>
                                        <div class="col-md-3 border-bottom p-0">
                                            <input name="con_pass_admin" type="password" value="" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-sm-1">Type</label>

                                        <div class="col-sm-1 border-bottom">
                                            <select  name="user_type" class="form-select shadow-none p-0 border-0 form-control-line">
                                                <option>admin</option>
                                                <option>user</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button name="create_admin_btn" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
   