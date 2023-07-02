
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Admin List</h3>
                            <p class="text-muted">List of admins</p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Full Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Password</th>
                                            <th class="border-top-0">Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                                            foreach ($admin as $row) :?>
                                                        <tr class="table-active">
                                                            <td><?php echo $row->id; ?></td>
                                                            <td><?php echo $row->fullname; ?></td>
                                                            <td><?php echo $row->email; ?></td>
                                                            <td><?php echo $row->password; ?></td>
                                                            <td><?php echo $row->type; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
           