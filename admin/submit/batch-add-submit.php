<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['batch_submit'])) {
        $name = htmlspecialchars(trim($_POST['name']));

        if ($name) {
            // check exists department
            $batch_exists_query = "SELECT * FROM `batches` WHERE name='$name'";
            $batch_exists = $db->getData($batch_exists_query);

            if ($batch_exists) {
                $errors['name'] = "$name already taken";

                $_SESSION['errors'] = $errors;
                header('location:../batch-add.php');
            } else {
                // store department
                $query = "INSERT INTO `batches`(name) VALUES('$name')";
                $run = $db->store($query);
                
                if ($run) {
                    $success['success_message'] = "Batch Added Successfully";
                } else {
                    $success['error_message'] = "Failed to Add Batch ".$db->error;
                }

                $_SESSION['success'] = $success;
                header('location:../batch-add.php');
            }
            
            
        } else {
            if (empty($name)) {
                $errors['name'] = "Name field can not be empty";            
            }


            $_SESSION['errors'] = $errors;
            header('location:../batch-add.php');
        }
        
    } else {
        header('location:../batch-add.php');
    }