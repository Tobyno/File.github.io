<?php 
    require("connection.php");
    
    $user_id = "";
    $user_email = "";
    
    if (isset($_SESSION['user']['id'])) {
        # code...
        $user_id = @$_SESSION['user']['id'];
        $user_email = @$_SESSION['user']['email'];
    }
    
    $get_user = $connection->query("SELECT * FROM `users` WHERE (email = '{$user_email}')");
    if ($get_user->num_rows == 1) {
        # code...
        $get = $get_user->fetch_assoc();
        $id = $get['ID'];
        $user = $get['first_name'];
    }
 ?>