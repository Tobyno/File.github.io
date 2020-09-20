<?php 
    include 'includes/header.php';
?>
<div class="container-fluid">
    <h1 class="mt-4">Settings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../dashboard/">Dashboard</a></li>
        <li class="breadcrumb-item active">Settings</li>
    </ol>
    <div class="row">
        <div class="col-md-6">
            <p>Edit Account details</p>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="includes/process.php" method="POST">
                        <?php
                            // Retrieve user details
                            $response = get_user_details($user_id,$email,$user_type);
                        ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">First Name</label>
                            <input class="form-control form-control-sm py-4" name="email" id="inputEmailAddress" value="<?php echo $response['first_name'];?>" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Last Name</label>
                            <input class="form-control form-control-sm py-4" name="email" id="inputEmailAddress" value="<?php echo $response['last_name']?>" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Phone</label>
                            <input class="form-control form-control-sm py-4" name="email" id="inputEmailAddress" value="<?php echo $response['phone']?>" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control form-control-sm py-4" name="email" id="inputEmailAddress" type="email" value="<?php echo $response['email']?>" placeholder="Enter email address" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" name="update_user" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>            
        <div class="col-md-6">
            <p>Update Social media details (Optional)</p>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="includes/process.php" method="POST">
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Facebook Link</label>
                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" value="<?php echo $response['facebook']?>" placeholder="Enter facebook account url" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Instagram Link</label>
                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" value="<?php echo $response['instagram']?>" placeholder="Enter instagrma account url" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Twitter Link</label>
                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" value="<?php echo $response['twitter']?>" placeholder="Enter twitter account url" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" name="update_social" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Change password -->
            <p>Change Password</p>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="includes/process.php" method="POST">
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">New Password</label>
                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" placeholder="Enter New Password" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Confirm Password</label>
                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" placeholder="Confirm New Password" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" name="change_password" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>            
    </div>
</div>
<?php include 'includes/footer.php';?>