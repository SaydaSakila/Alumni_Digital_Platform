<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['eventpost_submit'])) {
        $name = htmlspecialchars(trim($_POST['name']));
        $content = $_POST['content'];
        $date = $_POST['date'];

        if ($name && $content && $date) {
           
            // store Event
            $query = "INSERT INTO `events`( `name`, `content`, `date`) VALUES ('$name','$content','$date')";
            $run = $db->store($query);
            //var_dump($query);
            
            if ($run) {
                $success['success_message'] = "Event Added Successfully";
            } else {
                $success['error_message'] = "Failed to Add Event ".$db->error;
            }

            $_SESSION['success'] = $success;
            header('location:../event-add.php');
            
            
        } else {
            if (empty($name)) {
                $errors['name'] = "Name Field Can not be Empty";            
            }

            if (empty($content)) {
                $errors['content'] = "Event Details Field can not be Empty";            
            }

            if (empty($date)) {
                $errors['date'] = "Date Field can not be Empty";            
            }


            $_SESSION['errors'] = $errors;
            header('location:../event-add.php');
        }
        
    } else {
        header('location:../event-add.php');
    }?>