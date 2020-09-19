<?php 
    //include database 
    include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;

    if(isset($_GET['edit']))
    {
        $event_id = $_GET['edit'];

        $status = $_GET['status'];

        $u_status = 0;

        if ($status == 0) {
            $u_status = 1;
        }
        
        $sql = "UPDATE events SET `status`= '$u_status' where `id`='$event_id' ";
        $result = $db->conn->query($sql);
        
        if($result){
            header('location:events.php');
        }
        else{
            echo $db->error;
        }
    }
?>