<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['alu-post_submit'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $content = $_POST['content'];
        $category = htmlspecialchars(trim($_POST['category']));
        //$file_rename = $_POST['photo'];

        if ($title && $content && $category) {
            //$admin_id = $_SESSION['admin_id'];
            $user_id = $_SESSION['id'];

            $file_rename = ''; 
            
            if (isset($_FILES['image'])) {
                $file_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $allow = ['jpg', 'png', 'jpeg', 'gif'];
        
                //extension
                $div = explode('.', $file_name);
                $ext = strtolower(end($div));

            
               //check extension
                if (!in_array($ext, $allow)) {
                    $file_errors[] = 'File must be the following type: '. implode(', ', $allow);
                }
                
                if ($file_size > (1024*1240)) {
                    $file_errors[] = "File size should be more than 1MB";
                } 
                
                if (empty($file_errors)) {
                    $file_rename = substr(md5(time()), 0, 10).'.'.$ext;
                    $upload_directory = '../uploads/'. $file_rename;

                    if (!move_uploaded_file($tmp_name, $upload_directory)) {
                        $_SESSION['file_errors'] = ['Faled to upload file'];
                        header('location:../post-add.php');
                    }
                } else {
                    $_SESSION['file_errors'] = $file_errors;
                    header('location:../post-add.php');
                }
            }

            // store Post
            $query = "INSERT INTO uposts (category_id, user_id, title, content, photo) VALUES('$category', '$user_id', '$title', '$content', '$file_rename')";
            //$query = "INSERT INTO posts (category_id, admin_id, title, content) VALUES('$category', '$admin_id', '$title', '$content')";
            $run = $db->store($query);
            
            if ($run) {
                $success['success_message'] = "Blog Added Successfully";
            } else {
                $success['error_message'] = "Failed to Add Blog ".$db->error;
            }

            $_SESSION['success'] = $success;
            header('location:../post-add.php');
            
            
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
            if (empty($_FILES['image']['name'])) {
                $errors['file_error'] = "Please select an image"; 
            }



            $_SESSION['errors'] = $errors;
            header('location:../post-add.php');
        }
        
    } else {
        header('location:../post-add.php');
    }
    ?>