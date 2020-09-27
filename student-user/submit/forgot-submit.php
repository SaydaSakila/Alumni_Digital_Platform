<?php
    include dirname(__FILE__).'/../../database/database.php';
  session_start();
    $db = new Database();
    $errors = [];
    $_SESSION['old_data'] = $_POST;
    if (isset($_POST['forgot_submit'])) 
    {
        $email = htmlspecialchars(trim($_POST['email']));

        if (empty($email)) 
        {
            $errors['email'] = "Email Field Can not be Empty";            
        }

        

        if ($email /* && $password*/) 
        {
           
            
            $query = "SELECT * FROM students WHERE email='$email'";
            $run  = $db->conn->query($query);
            
            if ($run->num_rows > 0) 
            {
                $user = $run->fetch_assoc();
                $_SESSION['email'] = $user['email'];
                $_SESSION['actor'] = "users";

                $_SESSION['user_id'] = $user['id'];

                header('location:../recoverpass.php');
            } 
            else 
            {
                $errors['email'] = "Invalid Email Address";
              
                $_SESSION['errors'] = $errors;
                header('location:../forgotpass.php');
            }
            
        } 
        else 
        {
            $_SESSION['errors'] = $errors;
            header('location:../forgotpass.php');
        }
        
    } 
    else 
    {
        header('location:../forgotpass.php');
    }
?>