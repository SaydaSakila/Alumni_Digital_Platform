<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if(isset($_POST['update_department']))
	{
        $id = $_POST['id'];
        $name = $_POST['name'];

        if(!empty($name))
        {
	        $sql = "UPDATE departments SET name='$name' where id='$id' ";
            $result = $db->conn->query($sql);

            if($result){
                $_SESSION['message'] = "Department ID $id Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:department.php');
            } 
            else{
                $_SESSION['message'] = "Department Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:department.php');
            }
            
        }
        else
        {
            if (empty($name)) 
            {
                $errors['name'] = "Department Name Field Can not be Empty";            
            }
            
            $_SESSION['errors'] = $errors;
            header('location:edit-department.php');
        }
         
    }
 
?>