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
        $img_id = $_GET['edit'];

        $status = $_GET['status'];

        $u_status = 0;

        if ($status == 0) {
            $u_status = 1;
        }
        
        $sql = "UPDATE images SET `status`= '$u_status' where `id`='$img_id' ";
        $result = $db->conn->query($sql);
        
        if($result){
            header('location:gallery.php');
        }
        else{
            echo $db->error;
        }
    }
?>