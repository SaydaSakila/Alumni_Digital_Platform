<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
//    $_SESSION['old_data'] = $_POST;
    if(!isset($_POST['contact_submit']))
    {
    //    var_dump($_POST);die();

        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subject =htmlspecialchars(trim( $_POST['subject']));
        $message =htmlspecialchars(trim( $_POST['message']));
    
        if ($name && $email  && $subject && $message)
        {    
      //       var_dump($_POST);die();
   
            // store register
                $insert_query = "INSERT INTO contacts ( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
                    //         var_dump($insert_query);die();

                $run = $db->store($insert_query);
             //    var_dump($db);die();
               if ($run) 
                {
                    $success['success_message'] = "Message Sent Successfully";
                } 
                else 
                {
                    $success['error_message'] = "Message Sent Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:../index.php');
        }
    } 
?>

