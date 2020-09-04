
<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;
    if (isset($_POST['recover_submit'])) 
    {
        $id = $_SESSION['id'];
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];
        if ($password && $confpassword)
        {       

            if(strlen($password)<8)
            {
                $errors['password']='Your Password must contain at least 8 or more characters';
                $_SESSION['errors'] = $errors;
                header('location:../recoverpass.php');
            }
            else if($password==$confpassword)
            {
                $password = sha1($_POST['password']);
                
                // store register
                $sql = "UPDATE users SET password='$password' where id='$id'";
               // $run = $db->conn->query($sql);
                $run = $db->store($sql);
                 var_dump($run);die();
                if ($run) 
                {
                    $success['success_message'] = "Password Recovered Successfully";
                } 
                else 
                {
                    $success['error_message'] = "Password Recovered Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:../recoverpass.php');

            }
            else
            {
                
                $errors['password']='Your Password Does not match';
                $_SESSION['errors'] = $errors;
                header('location:../recoverpass.php');
            }
        }
        else
        {
           
            if (empty($password)) 
            {
                $errors['password'] = "Password Field Can not be Empty";            
            }
            if (empty($confpassword)) 
            {
                $errors['confpassword'] = "Confirm Password Field Can not be Empty";            
            }
           
            $_SESSION['errors'] = $errors;
            header('location:../recoverpass.php');
        }
    } 

?>

