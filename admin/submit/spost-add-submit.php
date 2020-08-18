<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['s-post_submit'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $content = $_POST['content'];
        $category = htmlspecialchars(trim($_POST['category']));

        if ($title && $content && $category) {
            //$admin_id = $_SESSION['admin_id'];
            $student_id = $_SESSION['id'];
           
            // store Post
            $query = "INSERT INTO sposts (category_id, student_id, title, content) VALUES('$category', '$student_id', '$title', '$content')";
            //$query = "INSERT INTO posts (category_id, admin_id, title, content) VALUES('$category', '$admin_id', '$title', '$content')";
            $run = $db->store($query);
            
            if ($run) {
                $success['success_message'] = "Blog Added Successfully";
            } else {
                $success['error_message'] = "Failed to Add Blog ".$db->error;
            }

            $_SESSION['success'] = $success;
            header('location:../spost-add.php');
            
            
        } else {
            if (empty($title)) {
                $errors['title'] = "Title Field Can not be Empty";            
            }

            if (empty($content)) {
                $errors['content'] = "Content Field can not be Empty";            
            }

            if (empty($category)) {
                $errors['category'] = "Category Field can not be Empty";            
            }


            $_SESSION['errors'] = $errors;
            header('location:../spost-add.php');
        }
        
    } else {
        header('location:../spost-add.php');
    }
    ?>