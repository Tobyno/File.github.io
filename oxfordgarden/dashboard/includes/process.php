<?php
    // Start session
    require 'session.php';
    // Require functions
    include 'function.php';
?>
<?php
    // Register user
    if(isset($_POST['register'])){
        $first_name = test_input($_POST['first_name']);
        $last_name = test_input($_POST['last_name']);
        $phone_number = test_input($_POST['phone_number']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $cpassword = test_input($_POST['cpassword']);
        $account_type = test_input($_POST['account_type']);
        
        // Avoid duplicate email addresses
        $query = "SELECT * FROM users";
        $result= mysqli_query($connection,$query);
        while ($db=mysqli_fetch_row($result)){
            // Check if email exists
            if ($email == $db[4] && $account_type == $db[9]){
                die('name exists');
                $_SESSION['msg'] = '
                <div class="mt-5">
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> User already exists
                    </div>
                </div>
                ';
                header("Location: ../?action=register");
                exit;
            }
        }
        // Makes sure the password fields are equal
        if ($password == $cpassword){
            //Success
            $hash_password = md5($password); // MD5 Hashing technique
            $query = "INSERT INTO users (ID, first_name, last_name, phone, email, facebook, instagram, twitter, photo, user_type, password) 
            VALUES ('','{$first_name}','{$last_name}','{$phone_number}','{$email}', '', '', '', '', '{$account_type}', '{$hash_password}')";

            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed: ");
            }else{
                //More Success
                $_SESSION['msg'] = '
                <div class="mt-5">
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Registration succesfull
                    </div>
                </div>
                ';
                header("Location: ../?action=login");
                exit;
            }
        } else{
            //Failed
            $_SESSION['msg'] = '
            <div class="mt-5">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong> Password Mismatch
                </div>
            </div>
            ';
            header("Location: ../?action=register");
            exit;
        }
    }

    // Login user
    if(isset($_POST['login'])){
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $hash_password = md5($password);

        $query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$hash_password}' LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed ");
        }

        if(mysqli_num_rows($result)==1){
            //Grabs ID of user to use for session
            while ($db=mysqli_fetch_row($result)){
                $user_id = $db[0];
                $user_email = $db[4];
                $user_type = $db[9];
            }

            // Set sessions
            $_SESSION['user']['id'] = $user_id;
            $_SESSION['user']['email'] = $user_email;
            $_SESSION['user']['type'] = $user_type;

            // for the login
            if (mysqli_num_rows($result) == 1){
                header("Location: ../");
                exit;
            }else{
                //Failed
                $_SESSION['msg'] = '
                    <div class="mt-5">
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Error!</strong> Wrong Email or password
                        </div>
                    </div>
                ';
                header("Location: ../?action=login");
                exit;
            }
        }
    }

    // Add property
    if(isset($_POST['add_property'])){
        $property_id = test_input($_POST['property_id']);
        $property_title = test_input($_POST['property_title']);
        $property_description = test_input($_POST['property_description']);
        $property_address = test_input($_POST['property_address']);
        $property_country = test_input($_POST['property_country']);
        $property_state = test_input($_POST['property_state']);
        $property_city = test_input($_POST['property_city']);
        $property_price = test_input($_POST['property_price']);
        $property_category = test_input($_POST['property_category']);
        $transaction_type = test_input($_POST['transaction_type']);
        $no_of_beds = test_input($_POST['no_of_beds']);
        $no_of_bathrooms = test_input($_POST['no_of_bathrooms']);
        $no_of_parking_spaces = test_input($_POST['no_of_parking_spaces']);
        $market_status = test_input($_POST['market_status']);
        $user_id = test_input($_POST['user_id']);
        $date_posted = date('Y-m-d');

        // Insert into database
        $query = "INSERT INTO property_listing (ID, property_id, title, description, address, city, state, country, price, property_category, no_of_beds, no_of_bathrooms, no_of_parking_spaces, transaction_type, market_status, date_posted, user_id) 
            VALUES ('','{$property_id}','{$property_title}','{$property_description}','{$property_address}', '{$property_city}', '{$property_state}', '{$property_country}', '{$property_price}', '{$property_category}', '{$no_of_beds}', '{$no_of_bathrooms}', '{$no_of_parking_spaces}', '{$transaction_type}', '{$market_status}', '{$date_posted}', '{$user_id}')";

        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            //More Success
            $_SESSION['msg'] = '
            <div class="mt-5">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your Property Has successfully been added, You can upload images of the property here.
                </div>
            </div>
            ';
            header("Location: ../?show=upload&id=".$property_id);
            exit;
        }
    }

    // Upload file
    if(isset($_POST['upload_file'])){
        $property_id = trim($_POST['property_id']);

        $target_dir = "../uploads/";
        $file_name = basename($_FILES["photo"]["name"]);
        $target_file = $target_dir.basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $_SESSION['msg'] = "
                <div class='alert alert-danger alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!!</strong>File is not an image.
                </div>
            ";
            header('Location: ../?show=upload&id='.$property_id);
            exit();
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["photo"]["size"] > 5000000) {
            $_SESSION['msg'] = "
                <div class='alert alert-danger alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!!</strong>Sorry, your file is too large.
                </div>
            ";
            header('Location: ../?show=upload&id='.$property_id);
            exit();
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $_SESSION['msg'] = "
                <div class='alert alert-danger alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!!</strong>Sorry, only JPG, JPEG, PNG & GIF files are allowed.
                </div>
            ";
            header('Location: ../?show=upload&id='.$property_id);
            exit();
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $_SESSION['msg'] = "
                <div class='alert alert-danger alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!!</strong>Sorry, there was an error uploading your file.
                </div>
            ";
            header('Location: ../?show=upload&id='.$property_id);
            exit();
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $query = "INSERT INTO property_images (ID, property_id, image)
                    VALUES ('','{$property_id}','{$file_name}')";
                $result = mysqli_query($connection,$query);
                if($result){
                    $_SESSION['msg'] = "
                        <div class='alert alert-success alert-dismissible'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Success!!</strong>File uploaded successfully
                        </div>
                    ";
                    header('Location: ../?show=upload&id='.$property_id);
                    exit();
                }
            } else {
                $_SESSION['msg'] = "
                    <div class='alert alert-danger alert-dismissible'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Error!!</strong>Sorry, there was an error uploading your file.
                    </div>
                ";
                header('Location: ../?show=upload&id='.$property_id);
                exit();
            }
        }
    }

    // Promote property
    if(isset($_POST['promote_property'])){
        $property_id = test_input($_POST['property_id']);
        $start_date = test_input($_POST['start_date']);
        $end_date = test_input($_POST['end_date']);
        $status = 'Active';

        $query = "INSERT INTO promotions (ID, property_id, start_date, end_date, status) 
            VALUES ('','{$property_id}','{$start_date}','{$end_date}','{$status}')";

        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            //More Success
            $_SESSION['msg'] = '
            <div class="mt-5">
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Property Has successfully been added to sponsored properties.
                </div>
            </div>
            ';
            header("Location: ../?show=advert_services");
            exit;
        }
    }
?>
<?php require_once("close_connection.php");?>