<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $_SESSION['old_data'] = $_POST;
    if (isset($_POST['login_submit'])) 
    {
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));

        if (empty($email)) 
        {
            $errors['email'] = "Email Field Can not be Empty";            
        }

        if (empty($password)) 
        {
            $errors['password'] = "Password Field Can not be Empty";            
        }

        if ($email  && $password) 
        {
            $password = sha1($password);
            // attempt for login
            $query = "SELECT * FROM admins WHERE (email='$email' OR username='$email') AND password='$password'";
            $run  = $db->conn->query($query);
            
            if ($run->num_rows > 0) 
            {
                $user = $run->fetch_assoc();
                $_SESSION['username'] = $user['username'];
                $_SESSION['actor'] = "admins";

                $_SESSION['admin_id'] = $user['id'];

                header('location:../index.php');
            } 
            else 
            {
               // echo "<script>alert('Wrong Username or password!')</script>";
                $errors['email'] = "Invalid Email or Password";
                //$errors['email'] = "<script>alert('Wrong Email or password!')</script>";
                $_SESSION['errors'] = $errors;
                header('location:../login.php');
            }
            
        } 
        else 
        {
            $_SESSION['errors'] = $errors;
            header('location:../login.php');
        }
        
    } 
    else 
    {
        header('location:../login.php');
    }
?>

