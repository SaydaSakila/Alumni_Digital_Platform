<?php 
    
    //include database 
     include dirname(__FILE__).'/database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        
        $sql = "DELETE FROM users where id='$id'";
        $result = $db->conn->query($sql);
        //var_dump($result);
        if($result)
        {
            $_SESSION['message'] = "User ID $id Data Deleted Successfully!!";
            $_SESSION['msg_type'] = "danger";
            header('location:user-list.php');
            
        }
     
    }
?>
