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
        $department = htmlspecialchars(trim($_POST['department']));
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];
        $batch = $_POST['batch'];
        if ($name && $username && $department  && $password && $confpassword && $batch)
        {
            // unique validation
            $email_exists_query = "SELECT * FROM users WHERE email = '$email'";
            $email_exists = $db->getData($email_exists_query);
            if ($email_exists) 
            {
                $errors['email'] = "Email Already Exist";
            }
            $username_exists_query = "SELECT * FROM users WHERE username = '$username'";
            $username_exists = $db->getData($username_exists_query);
            if ($username_exists) 
            {
                $errors['username'] = "Username Already Exist";
            }
            if ($email_exists || $username_exists) 
            {
                $_SESSION['errors'] = $errors;
                header('location:../sturegistration.php');
            }
            if(strlen($password)<8)
            {
                $errors['password']='Your Password must contain at least 8 or more characters';
                $_SESSION['errors'] = $errors;
                header('location:../sturegistration.php');
            }
            if($password==$confpassword)
            {
                $password = sha1($_POST['password']);
                
                // store register
                $insert_query = "INSERT into students (`name`, `username`, `email`, `dept_id`, `password`, `batch`) 
                    VALUES('$name', '$username', '$email', $department, '$password', '$batch' )";
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
            if (empty($department)) {
                $errors['department'] = "Department Field can not be Empty";            
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

