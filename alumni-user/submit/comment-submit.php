<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['comment_submit'])) {
        $user_id = $_POST['user_id'];
        $user_type = 'users';
        $comment = $_POST['comment'];
        $post_id = $_POST['post_id'];
        

        if ($name) {
           
                // store category
                $query = "INSERT INTO comments(user_id, users, comment, post_id ) VALUES('$user_id', '$user_type', '$comment', '$post_id')";
                $run = $db->store($query);
                
                if ($run) {
                    $success['success_message'] = "Comments Added Successfully";
                } else {
                    $success['error_message'] = "Failed to Add comments ".$db->error;
                }

                $_SESSION['success'] = $success;
                header('location:../blog.php');  
            
        } else {
            if (empty($name)) {
                $errors['name'] = "Name field can not be empty";            
            }
            $_SESSION['errors'] = $errors;
            header('location:../blog.php');
        }
        
    } else {
        header('location:../blog.php');
    }
    ?>