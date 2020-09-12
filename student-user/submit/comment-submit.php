<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];
    if (isset($_POST['comment_submit'])) {
        $user_id = $_POST['user_id'];
        $user_type = 'students';
        $comment = $_POST['comments'];
        $post_id = $_POST['post_id'];
        

        if ($comment) {
           
                // store category
                $sql = "INSERT INTO `comments`(`user_id`, `user_type`, `comment`, `post_id`) 
                        VALUES ('$user_id', '$user_type', '$comment', '$post_id')";
                        
                        
                $run = $db->store($sql);
                
                if ($run) {
                    $success['success_message'] = "Comments Added Successfully";
                } else {
                    $success['error_message'] = "Failed to Add comments ".$db->error;
                }

                $_SESSION['success'] = $success;
                header('location:../blog.php?id='.$post_id);  
            
        } else {
            if (empty($comment)) {
                $errors['comment'] = "Comment field can not be empty";            
            }
            $_SESSION['errors'] = $errors;
            header('location:../blog.php?id='.$post_id); 
        }
        
    } else {
        header('location:../blog.php?id='.$post_id); 
    }
    ?>