<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;

    if(isset($_POST['studentregistration_submit']))
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];
        $batch = $_POST['batch'];
        if ($name && $username  && $password && $confpassword && $batch)
        {
            if($password==$confpassword)
            {
                $password = sha1($_POST['password']);
                
                // store register
                $insert_query = "INSERT into students (`name`, `username`, `email`, `password`, `batch`) 
                    VALUES('$name', '$username', '$email', '$password', '$batch' )";
                $run = $db->store($insert_query);
                 //var_dump($run);
                if ($run) 
                {
                    $success['success_message'] = "Student Registered Successfully";
                } 
                else 
                {
                    $success['error_message'] = "Student Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:../sturegistration.php');

            }
            else
            {
                
                $errors['password']='Your Password Does not match';
                $_SESSION['errors'] = $errors;
                header('location:../sturegistration.php');
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
                $errors['username'] = "University ID Field Can not be Empty";            
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
            if (empty($batch)) 
            {
                $errors['batch'] = "Batch Field Can not be Empty";
            }
            
            $_SESSION['errors'] = $errors;
            header('location:../sturegistration.php');
        }
    } 

?>

