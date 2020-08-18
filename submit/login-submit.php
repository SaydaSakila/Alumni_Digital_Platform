<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $_SESSION['old_data'] = $_POST;

    if (isset($_POST['ialulogin_submit'])) 
    {
        $username = htmlspecialchars(trim($_POST['username']));
        $password = htmlspecialchars(trim($_POST['password']));

        if (empty($username)) 
        {
            $errors['username'] = "University ID Field Can not be Empty";            
        }

        if (empty($password)) 
        {
            $errors['password'] = "Password Field Can not be Empty";            
        }

        if ($username  && $password) 
        {
            $password = sha1($password);
            // attempt for login
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $run  = $db->conn->query($query);
            
            if ($run->num_rows > 0) 
            {
                $user = $run->fetch_assoc();
                $_SESSION['username'] = $user['username'];
                $_SESSION['actor'] = "users";
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];


                header('location:../alumni-user/index.php');
            } 
            else 
            {
                $errors['username'] = "Invalid University ID or Password"; 
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
