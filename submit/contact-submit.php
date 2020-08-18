<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;

    if(isset($_POST['contact_submit']))
    {
        $name = $_POST['name'];
        $email = htmlspecialchars(trim($_POST['email']));
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        if ($name && $email  && $subject && $message)
        {
                
                // store register
                $insert_query = "INSERT into contacts (`name`, `email`, `subject`, `message`) 
                    VALUES('$name', '$email', '$subject', '$message' )";
                $run = $db->store($insert_query);
                 //var_dump($run);
               /* if ($run) 
                {
                    $success['success_message'] = "Message Sent Successfully";
                } 
                else 
                {
                    $success['error_message'] = "Message Sent Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:../index.php');*/

            
           
        }
        
    } 

?>

