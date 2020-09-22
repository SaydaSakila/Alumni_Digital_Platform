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
        $comment_id = $_GET['edit'];

        $status = $_GET['hide'];

        $u_status = 0;

        if ($status == 0) {
            $u_status = 1;
        }
        
        $sql = "UPDATE comments SET `hide`= '$u_status' where `id`='$comment_id' ";
        $result = $db->conn->query($sql);
        
        if($result){
            header('location:comments.php');
        }
        else{
            echo $db->error;
        }
    }
?>