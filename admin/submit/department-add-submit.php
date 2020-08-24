<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['department_submit'])) {
        $name = htmlspecialchars(trim($_POST['name']));

        if ($name) {
            // check exists department
            $department_exists_query = "SELECT * FROM departments WHERE name='$name'";
            $department_exists = $db->getData($department_exists_query);

            if ($department_exists) {
                $errors['name'] = "$name already taken";

                $_SESSION['errors'] = $errors;
                header('location:../department-add.php');
            } else {
                // store department
                $query = "INSERT INTO departments(name) VALUES('$name')";
                $run = $db->store($query);
                
                if ($run) {
                    $success['success_message'] = "Department Added Successfully";
                } else {
                    $success['error_message'] = "Failed to Add Department ".$db->error;
                }

                $_SESSION['success'] = $success;
                header('location:../department-add.php');
            }
            
            
        } else {
            if (empty($name)) {
                $errors['name'] = "Name field can not be empty";            
            }


            $_SESSION['errors'] = $errors;
            header('location:../department-add.php');
        }
        
    } else {
        header('location:../department-add.php');
    }