<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if(isset($_POST['updateadmin']))
	{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        //$file_rename = $_POST['photo'];


        if(!empty($name) && !empty($username) && !empty($email) && !empty($password))
        {
             
            $password = sha1($_POST['password']);
	        $sql = "UPDATE admins SET name='$name', username='$username',
            email='$email', password='$password' where id='$id' ";

            $result = $db->conn->query($sql);
            //var_dump($result) ; die();

            if($result){
                $_SESSION['message'] = "Admin ID $id Name $name Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:profile.php');
            } 
            else{
                $_SESSION['message'] = "User Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:Profile.php');
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
            
            if (empty($password)) 
            {
                $errors['password'] = "Password Field Can not be Empty";            
            }
            
            $_SESSION['errors'] = $errors;
            header('location:edit-admin.php');
        }
         
    }
 
?>