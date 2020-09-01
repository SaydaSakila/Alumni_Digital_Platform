<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;


    if(isset($_POST['studentregister_submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $department = htmlspecialchars(trim($_POST['department']));
        //$universityid = $_POST['universityid'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address']; 
        $batch = $_POST['batch'];

        if($name && $email && $username && $department && $password && $batch /*&& $universityid*/)
        {
            // unique validation
            $email_exists_query = "SELECT * FROM students WHERE email = '$email'";
            $email_exists = $db->getData($email_exists_query);
            if ($email_exists) 
            {
                $errors['email'] = "Email Already Exist";
            }
            $username_exists_query = "SELECT * FROM students WHERE username = '$username'";
            $username_exists = $db->getData($username_exists_query);
            if ($username_exists) 
            {
                $errors['username'] = "Username Already Exist";
            }
           /* $universityid_exists_query = "SELECT * FROM students WHERE universityid = '$universityid'";
            $universityid_exists = $db->getData($universityid_exists_query);
            if ($universityid_exists) 
            {
                $errors['universityid'] = "University ID Already Exist";
            }*/
            if ($email_exists || $username_exists /*|| $universityid_exists*/) 
            {
                $_SESSION['errors'] = $errors;
                header('location:../student-register.php');
            } 
            else 
            {
                $password = sha1($password);
                // store register
                $insert_query = "INSERT INTO students (name, email, username, dept_id/*, universityid*/, password, phone, address, batch_id) 
                    VALUES('$name', '$email', '$username', '$department', '$password', '$phone', '$address', '$batch')";
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
                header('location:../student-register.php');
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
            if (empty($department)) {
                $errors['department'] = "Department Field can not be Empty";            
            }
            if (empty($password)) 
            {
                $errors['password'] = "Password Field Can not be Empty";
            }
            if (empty($batch)) 
            {
                $errors['batch'] = "batch Field Can not be Empty";
            }
           /* if (empty($universityid)) 
            {
                $errors['universityid'] = "University ID Field Can not be Empty";
            }*/
            $_SESSION['errors'] = $errors;
            header('location:../student-register.php');
        }
    //var_dump($run);

    }


?>