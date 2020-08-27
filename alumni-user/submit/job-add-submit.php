<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['job-post_submit'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $experience = $_POST['experience'];
        $cname = $_POST['cname'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $hour = $_POST['hour'];
        $info = $_POST['info'];
        $education = $_POST['education'];
        $deadline = $_POST['deadline'];
        $department = htmlspecialchars(trim($_POST['department']));

        if ($title && $experience && $department && $cname && $address && $salary && $hour && $info && $education && $deadline) {
            
            if (date('Y-m-d') > $deadline) {
                $errors['deadline'] = "Deadline Cannot be previous date";
                $_SESSION['errors'] = $errors;

                header('location:../job-add.php');
            }            
            else {
                //$admin_id = $_SESSION['admin_id'];
                $user_id = $_SESSION['id'];
            
                // store Post
                $query = "INSERT INTO jobs (dept_id, user_id, title, experience, cname, address, salary, 
                            hour, info, education, deadline) VALUES('$department', '$user_id', '$title', 
                            '$experience', '$cname', '$address', '$salary', '$hour', '$info', '$education', '$deadline')";
                //$query = "INSERT INTO posts (category_id, admin_id, title, content) VALUES('$category', '$admin_id', '$title', '$content')";
                $run = $db->store($query);
                
                if ($run) {
                    $success['success_message'] = "Job Post Added Successfully";
                } else {
                    $success['error_message'] = "Failed to Add Post ".$db->error;
                }

                $_SESSION['success'] = $success;
                header('location:../job-add.php');
            }
            
            
        } else {
            if (empty($title)) {
                $errors['title'] = "Title Field Can not be Empty";            
            }

            if (empty($experience)) {
                $errors['experience'] = "Experience Field can not be Empty";            
            }

            if (empty($cname)) {
                $errors['cname'] = "Company Name Field can not be Empty";            
            }
            if (empty($address)) {
                $errors['address'] = "Company address Field can not be Empty";            
            }

            if (empty($salary)) {
                $errors['salary'] = "Salary Field can not be Empty";            
            }
            if (empty($hour)) {
                $errors['hour'] = "Working Hour Field can not be Empty";            
            }

            if (empty($info)) {
                $errors['info'] = "Information Field can not be Empty";            
            }
            if (empty($education)) {
                $errors['education'] = "Education Field can not be Empty";            
            }

            if (empty($deadline)) {
                $errors['deadline'] = "Deadline Field can not be Empty";            
            }

            if (empty($department)) {
                $errors['department'] = "Department Field can not be Empty";            
            }


            $_SESSION['errors'] = $errors;
            header('location:../job-add.php');
        }
        
    } else {
        header('location:../job-add.php');
    }
    ?>