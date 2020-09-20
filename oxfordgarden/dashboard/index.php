<?php
    require 'includes/session.php';
    include 'includes/function.php';
    include 'includes/userinc.php';

    // Check action sent
    if(isset($_GET['action'])){
        if($_GET['action'] == 'login'){
            // Check if user is logged in before displaying login form
            if(is_loggedIn() == 1){
                // Get user sessions
                if(!isset($user_id) || !isset($email) || !isset($user_type)){
                    $user_id = $_SESSION['user']['id'];
                    $email = $_SESSION['user']['email'];
                    $user_type = $_SESSION['user']['type'];
                }   
                if($user_type == '001'){
                    // Display dashboard for admin
                    include 'dashboard-templates/admin-template.php';
                }
            }else{
                include 'login.php';  
            }      
        }
        // display registration page
        if($_GET['action'] == 'register'){
            include 'register.php';
        }
    }else{
        // check if user is logged in
        if(is_loggedIn() == 1){
            // Get user sessions
            if(!isset($user_id) || !isset($email) || !isset($user_type)){
                $user_id = $_SESSION['user']['id'];
                $email = $_SESSION['user']['email'];
                $user_type = $_SESSION['user']['type'];
            }
            
            if($user_type == '001'){
                // Display dashboard for admin
                if(isset($_GET['show'])){
                    if($_GET['show'] == 'notifications'){
                        include 'dashboard-templates/notifications.php';

                    }elseif($_GET['show'] == 'saved_properties'){
                        include 'dashboard-templates/saved_properties.php';

                    }elseif($_GET['show'] == 'appointments'){
                        include 'dashboard-templates/appointments.php';

                    }elseif($_GET['show'] == 'sell_property'){
                        include 'dashboard-templates/sell_property.php';

                    }elseif($_GET['show'] == 'manage_property'){
                        include 'dashboard-templates/manage_property.php';

                    }elseif($_GET['show'] == 'advert_services'){
                        include 'dashboard-templates/advert_services.php';

                    }elseif($_GET['show'] == 'manage_users'){
                        include 'dashboard-templates/manage_users.php';

                    }elseif($_GET['show'] == 'settings'){
                        include 'dashboard-templates/settings.php';

                    }elseif($_GET['show'] == 'upload'){
                        include 'dashboard-templates/upload.php';

                    }elseif($_GET['show'] == 'promote'){
                        include 'dashboard-templates/promote.php';
                    }else{
                        include 'dashboard-templates/admin-template.php';    
                    }
                }else{
                    include 'dashboard-templates/admin-template.php';
                }
            }elseif($user_type == '005'){
                // Display dashboard for individual admin
                if(isset($_GET['show'])){
                    if($_GET['show'] == 'notifications'){
                        include 'dashboard-templates/notifications.php';

                    }elseif($_GET['show'] == 'saved_properties'){
                        include 'dashboard-templates/saved_properties.php';

                    }elseif($_GET['show'] == 'appointments'){
                        include 'dashboard-templates/appointments.php';

                    }elseif($_GET['show'] == 'settings'){
                        include 'dashboard-templates/settings.php';

                    }else{
                        include 'dashboard-templates/admin-template.php';    
                    }
                }else{
                    include 'dashboard-templates/admin-template.php';
                }
            }elseif($user_type == '002'){
                // Display dashboard for property owner admin
                if(isset($_GET['show'])){
                    if($_GET['show'] == 'notifications'){
                        include 'dashboard-templates/notifications.php';

                    }elseif($_GET['show'] == 'saved_properties'){
                        include 'dashboard-templates/saved_properties.php';

                    }elseif($_GET['show'] == 'appointments'){
                        include 'dashboard-templates/appointments.php';

                    }elseif($_GET['show'] == 'sell_property'){
                        include 'dashboard-templates/sell_property.php';

                    }elseif($_GET['show'] == 'manage_property'){
                        include 'dashboard-templates/manage_property.php';

                    }elseif($_GET['show'] == 'advert_services'){
                        include 'dashboard-templates/advert_services.php';

                    }elseif($_GET['show'] == 'settings'){
                        include 'dashboard-templates/settings.php';

                    }elseif($_GET['show'] == 'upload'){
                        include 'dashboard-templates/upload.php';
                    }else{
                        include 'dashboard-templates/admin-template.php';    
                    }
                }else{
                    include 'dashboard-templates/admin-template.php';
                }
            }
        }else{
            include 'login.php';  
        }
    }
?>