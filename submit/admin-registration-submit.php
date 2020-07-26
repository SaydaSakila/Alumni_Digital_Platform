
<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    if (isset($_POST['registration_submit'])) 
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];
        if ($name && $email  && $password && $confpassword)
        {
            if($password==$confpassword)
            {
                $password = sha1($_POST['password']);
                
                // store register
                $insert_query = "INSERT into admins (`name`, `username`, `email`, `password`) 
                    VALUES('$name', '$username', '$email', '$password' )";
                $run = $db->store($insert_query);
                 //var_dump($run);
                if ($run) 
                {
                    $success['success_message'] = "Admin Registered Successfully";
                } 
                else 
                {
                    $success['error_message'] = "Admin Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:../admin-registration.php');

            }
            else
            {
                
                $errors['password']='Your Password Does not match';
                $_SESSION['errors'] = $errors;
                header('location:../admin-registration.php');
            }
        }
        else
        {
            if (empty($name)) 
            {
                $errors['name'] = "Name Field Can not be Empty";            
            }
            if (empty($username)) 
            {
                $errors['username'] = "Username Field Can not be Empty";            
            }
            if (empty($email)) 
            {
                $errors['email'] = "Email Field Can not be Empty";            
            }
            if (empty($password)) 
            {
                $errors['password'] = "Password Field Can not be Empty";            
            }
            if (empty($confpassword)) 
            {
                $errors['confpassword'] = "Confirm Password Field Can not be Empty";            
            }
            $_SESSION['errors'] = $errors;
            header('location:../admin-registration.php');
        }
    } 

?>

