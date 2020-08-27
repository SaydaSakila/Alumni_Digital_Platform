<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if(isset($_POST['job-update_post']))
	{
        $id = $_POST['id'];
        $title = $_POST['title'];
        $experience = $_POST['experience'];
        $cname = $_POST['cname'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $hour = $_POST['hour'];
        $info = $_POST['info'];
        $education = $_POST['education'];
        $deadline = $_POST['deadline'];
        $department = $_POST['department'];


        if(!empty($title) && !empty($experience) && !empty($department) && !empty($cname) && !empty($address) 
            && !empty($salary) && !empty($info) && !empty($hour) &&  !empty($education) && !empty($deadline))
        {
            if (date('Y-m-d') > $deadline) {
                $errors['deadline'] = "Deadline Cannot be previous date";
                $_SESSION['errors'] = $errors;

                header('location:edit-job.php');
            }
	       else{
                $sql = "UPDATE `jobs` SET `dept_id`='$department',`title`='$title',
                `experience`='$experience',`cname`='$cname',`address`='$address',`salary`='$salary',`hour`='$hour',
                `info`='$info',`education`='$education',`deadline`='$deadline' WHERE id='$id'";
            $result = $db->conn->query($sql);

            if($result){
                $_SESSION['message'] = "Job ID $id Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:jobboard.php');
            } 
            else{
                $_SESSION['message'] = "Job Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:jobboard.php');
            }
           }
            
        }
        else
        {
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
            header('location:edit-job.php');
        }
         
    }
 
?>