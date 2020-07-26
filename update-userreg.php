<?php 
    
    //include database 
     include dirname(__FILE__).'/database/database.php';
    session_start();



    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if(isset($_POST['update']))
	{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];


        if(!empty($name) && !empty($username) && !empty($phone) && !empty($email) && !empty($address) && !empty($password) )
        {
            $password = sha1($_POST['password']);
	        $sql = "UPDATE users SET name='$name', username='$username',
            phone='$phone', email='$email', address='$address', password='$password' where id='$id' ";

            $result = $db->conn->query($sql);
            //var_dump($result) ; die();

            if($result){
                $_SESSION['message'] = "User ID $id Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:user-list.php');
            } 
            else{
                $_SESSION['message'] = "User Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:user-list.php');
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
            $_SESSION['errors'] = $errors;
            header('location:edit-userreg.php');
        }
         
    }
 
?>