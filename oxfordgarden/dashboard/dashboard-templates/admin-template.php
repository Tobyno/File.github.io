<?php 
    include 'includes/header.php';
?>
    <div class="container">
        <h1 class="mt-4 txt-md mb-3">Admin Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item txt-sm active">Dashboard</li>
        </ol>
        <div class="row">
            <?php
                // Display content by user type
                if($user_type == '001'){
                    $u_type = 'Admin';
            ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Notifications <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=notifications">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Saved Properties <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=saved_properties">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Appointments <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=appointments">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Sell Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=sell_property">Sell</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Manage Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=manage_property">Manage</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Advert Services</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=advert_services">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Manage Users</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=manage_users">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Account Settings</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=settings">Open</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
            <?php
                }elseif($user_type == '002'){
                    $u_type = 'Property Owner';
            ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Notifications <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=notifications">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Saved Properties <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=saved_properties">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Appointments <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=appointments">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Sell Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=sell_property">Sell</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Manage Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=manage_property">Manage</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Advert Services</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=advert_services">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Account Settings</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=settings">Open</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
            <?php
                }elseif($user_type == '003'){
                    $u_type = 'Property Developer';
            ?>
                        <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Notifications <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=notifications">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Saved Properties <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=saved_properties">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Appointments <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=appointments">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Sell Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=sell_property">Sell</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Manage Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=manage_property">Manage</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Advert Services</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=advert_services">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Account Settings</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=settings">Open</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
            <?php
                }elseif($user_type == '004'){
                    $u_type = 'Agent';
            ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Notifications <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=notifications">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Saved Properties <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=saved_properties">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Appointments <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=appointments">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Sell Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=sell_property">Sell</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Manage Property</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=manage_property">Manage</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Advert Services</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=advert_services">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Account Settings</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=settings">Open</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
            <?php
                }else{
                    $u_type = 'Client';
            ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Notifications <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=notifications">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Saved Properties <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=saved_properties">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Appointments <span class="badge badge-primary">20</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=appointments">View</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">Account Settings</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="../dashboard/?show=settings">Open</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
            
        </div>
    </div>
<?php include 'includes/footer.php';?>