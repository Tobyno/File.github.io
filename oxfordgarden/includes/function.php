<?php 
    // Initiate database connection
    include 'connection.php';

    // To check if user is logged in
    function is_loggedIn(){
        if(isset($_SESSION['user']['email'])){
            $data = 1;
        }else{
            $data = 0;
        }

        return $data;
        // Return data
        // 0 => User is logged in
        // 1 => User is not logged in
    }

    // Validate form input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Retrieve user details
    function get_user_details($u_id,$e,$u_type){
        global $connection;

        $user_id = $u_id;
        $user_email = $e;
        $user_type = $u_type;
        $get_user = $connection->query("SELECT * FROM `users` WHERE (email = '{$user_email}' && ID = '{$user_id}' && user_type = '{$user_type}' )");
        if ($get_user->num_rows == 1) {
            # code...
            $get = $get_user->fetch_assoc();
            $data['id'] = $get['ID'];
            $data['first_name'] = $get['first_name'];
            $data['last_name'] = $get['last_name'];
            $data['phone'] = $get['phone'];
            $data['facebook'] = $get['facebook'];
            $data['instagram'] = $get['instagram'];
            $data['twitter'] = $get['twitter'];
            $data['email'] = $get['email'];
        }
        return $data;
    }

    // Get last id from properties table
    function get_properties_last_id(){
        global $connection;
        
        $get_property = $connection->query("SELECT * FROM `property_listing` ORDER BY ID DESC LIMIT 1");
        if ($get_property->num_rows >= 1) {
            $get = $get_property->fetch_assoc();
            $data =  $get['ID'];
        }else{
            $data = 0;
        }

        return $data;
    }

    // Get property images
    function get_property_images($p_id){
        global $connection;
        $property_id = $p_id;
        $get_property = $connection->query("SELECT * FROM property_images WHERE (property_id = '{$property_id}')");

        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    // Get properties by user
    function get_properties_by_user($u_id){
        global $connection;
        $user_id = $u_id;
        $get_property = $connection->query("SELECT * FROM property_listing WHERE (user_id = '{$user_id}')");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    // Get all properties
    function get_all_properties(){
        global $connection;
        $get_property = $connection->query("SELECT * FROM property_listing");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    // Get all apartments
    function get_all_apartments(){
        global $connection;
        $get_property = $connection->query("SELECT * FROM property_listing WHERE (property_category = 'Apartment')");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    function get_all_restaurants(){
        global $connection;
        $get_property = $connection->query("SELECT * FROM property_listing WHERE (property_category = 'Restaurant')");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    function get_all_flats(){
        global $connection;
        $get_property = $connection->query("SELECT * FROM property_listing WHERE (property_category = 'House')");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    function get_all_farm(){
        global $connection;
        $get_property = $connection->query("SELECT * FROM property_listing WHERE (property_category = 'Farm')");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    // Get properties by id
    function get_property_by_id($id){
        global $connection;
        $property_id = $id;
        $get_property = $connection->query("SELECT * FROM property_listing WHERE (property_id = '{$property_id}') LIMIT 1");
        if ($get_property->num_rows >= 1) {
            return $get_property;
        }else{
            return NULL;
        }
    }

    // Get all active promotions
    function get_active_promotions(){
        global $connection;
        $get_promotions = $connection->query("SELECT * FROM promotions WHERE (status = 'Active')");
        if($get_promotions->num_rows >= 1){
            return $get_promotions;
        }else{
            return NULL;
        }
    }

    // Check if property is being promoted
    function is_promoted($id){
        global $connection;
        $property_id = $id;
        $get_promotions = $connection->query("SELECT * FROM promotions WHERE (property_id = '{$property_id}' AND status = 'Active') LIMIT 1");
        if($get_promotions->num_rows == 1){
            return 1;
        }else{
            return 0;
        }
    }
?>