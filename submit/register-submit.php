<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];

    if(isset($_POST['register_submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address']; 

        if($name && $email && $username && $password)
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
                header('location:../user-register.php');
            } 
            else 
            {
                $password = sha1($password);
                // store register
                $insert_query = "INSERT INTO users (name, email, username, password, phone, address) VALUES('$name', '$email', '$username', '$password', '$phone', '$address')";
                $run = $db->store($insert_query);
                //var_dump($run);
                if ($run) 
                {
                    $success['success_message'] = "User Registered Successfully";
                } 
                else 
                {
                    $success['error_message'] = "User Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:../user-register.php');
            }
        }
        else 
        {
            if (empty($name)) 
            {
                $errors['name'] = "Name Field Can not be Empty";
            }
            if (empty($email)) 
            {
                $errors['email'] = "Email Field Can not be Empty";
            }
            if (empty($username)) 
            {
                $errors['username'] = "Username Field Can not be Empty";
            }
            if (empty($password)) 
            {
                $errors['password'] = "Password Field Can not be Empty";
            }
            $_SESSION['errors'] = $errors;
            header('location:../user-register.php');
        }
    //var_dump($run);

    }


?>