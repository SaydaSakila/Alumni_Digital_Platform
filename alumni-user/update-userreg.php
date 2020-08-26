<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;

    if(isset($_POST['update-alu']))
	{
        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $batch = $_POST['batch'];
        $passingyear = $_POST['passingyear'];
        $cname = $_POST['cname'];
        $jposition = $_POST['jposition'];


        if(!empty($name) && !empty($username) && !empty($phone) && !empty($email) && !empty($address) && !empty($password) && !empty($batch) && !empty($passingyear) )
        {
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
                
                if ($file_size > (1024*1024)) {
                    $file_errors[] = "File size should be more than 1MB";
                } 
                
                if (empty($file_errors)) {
                    $file_rename = substr(md5(time()), 0, 10).'.'.$ext;
                    $upload_directory = '../uploads/'. $file_rename;

                    if (!move_uploaded_file($tmp_name, $upload_directory)) {
                        $_SESSION['file_errors'] = ['Faled to upload file'];
                        header('location:edit-userreg.php');
                    }
                } else {
                    $_SESSION['file_errors'] = $file_errors;
                    header('location:edit-userreg.php');
                }
            }

            $password = sha1($_POST['password']);
	        $sql = "UPDATE users SET name='$name', username='$username',phone='$phone', 
                email='$email', address='$address', password='$password' , batch='$batch', cname = '$cname',
                jposition = '$jposition', passingyear='$passingyear', photo='$file_rename' 
                where id='$id'";

            $result = $db->conn->query($sql);
            //var_dump($result) ; die();
            

            if($result){
                $_SESSION['message'] = "Alumni ID $id Name $name Data Updated Successfully!";
                $_SESSION['msg_type'] = "warning";
                $_SESSION['name'] = $name;
            	header('location:edit-userreg.php');
            } 
            else{
                $_SESSION['message'] = "User Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:edit-userreg.php');
            }
            
        }
        else
        {
            if (empty($name)) 
            {
                $errors['name'] = "Name Field Can not be Empty";            
            }
            if (empty($username)) 
            {
                $errors['username'] = "Username Field Can not be Empty";            
            }
            if (empty($email)) 
            {
                $errors['email'] = "Email Field Can not be Empty";            
            }
            if (empty($phone)) 
            {
                $errors['phone'] = "Phone Field Can not be Empty";            
            }
            if (empty($password)) 
            {
                $errors['password'] = "Password Field Can not be Empty";            
            }
            if (empty($address)) 
            {
                $errors['address'] = "Address Field Can not be Empty";            
            }
            if (empty($batch)) 
            {
                $errors['batch'] = "Batch Field Can not be Empty";            
            }
            if (empty($passingyear)) 
            {
                $errors['passingyear'] = "Passing Year Field Can not be Empty";            
            }
            if (empty($_FILES['image']['name'])) {
                $errors['file_error'] = "Please select an image"; 
            }

            $_SESSION['errors'] = $errors;
            header('location:edit-userreg.php');
        }
         
    }
 
?>