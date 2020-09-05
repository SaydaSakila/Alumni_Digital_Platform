<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if(isset($_POST['update_event']))
	{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $date = $_POST['date'];
        //$batch = $_POST['batch'];
        //$department = $_POST['department'];
        $status = $_POST['status'];

        if(!empty($name) && !empty($content) && !empty($date))
        {
	        $sql = "UPDATE events SET name='$name', content='$content',
                        date='$date', status='$status' where id='$id' ";
            $result = $db->conn->query($sql);

            if($result){
                $_SESSION['message'] = "Event ID $id Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:events.php');
            } 
            else{
                $_SESSION['message'] = "Event Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:events.php');
            }
            
        }
        else
        {
            if (empty($name)) 
            {
                $errors['name'] = "Event Name Field Can not be Empty";            
            }
            
            if (empty($content)) {
                $errors['content'] = "Event Details Field can not be Empty";            
            }

            if (empty($date)) {
                $errors['date'] = "Date Field can not be Empty";            
            }
            
            $_SESSION['errors'] = $errors;
            header('location:edit-event.php');
        }
         
    }
 
?>