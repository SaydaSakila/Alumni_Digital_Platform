<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['image_submit'])) {
        $title = htmlspecialchars(trim($_POST['title']));
         $file_rename = ''; 
         $status = 1;

        if ($title) {
            $user_id = $_SESSION['id'];
            //$file_rename = ''; 
            
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
                
                if ($file_size > (1024*6240)) {
                    $file_errors[] = "File size should be more than 4MB";
                } 
                
                if (empty($file_errors)) {
                    $file_rename = substr(md5(time()), 0, 10).'.'.$ext;
                    $upload_directory = '../../uploads/'. $file_rename;

                    if (!move_uploaded_file($tmp_name, $upload_directory)) {
                        $_SESSION['file_errors'] = ['Faled to upload file'];
                        header('location:../image-add.php');
                    }
                } else {
                    $_SESSION['file_errors'] = $file_errors;
                    header('location:../image-add.php');
                }
            }

            // store Post
            $query = "INSERT INTO `images` (title, user_id, image, status) VALUES('$title', $user_id, '$file_rename', $status)";
            
            $run = $db->store($query);
            
            if ($run) {
                $success['success_message'] = "Photo Added Successfully";
            } else {
                $success['error_message'] = "Failed to Add Photo ".$db->error;
            }

            $_SESSION['success'] = $success;
            header('location:../image-add.php');
            
            
        } else {
            if (empty($title)) {
                $errors['title'] = "Title Field Can not be Empty";            
            }
            if (empty($_FILES['image']['name'])) {
                $errors['file_error'] = "Please select an image"; 
            }



            $_SESSION['errors'] = $errors;
            header('location:../image-add.php');
        }
        
    } else {
        header('location:../image-add.php');
    }
    ?>