<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    if(isset($_POST['eventstatus']))
	{
        $id = $_POST['id'];

        $status = $_POST['status'];

	        $sql = "UPDATE events SET status='$status' where id='$id' ";
            $result = $db->conn->query($sql);
            header('location:events.php');
    }
?>