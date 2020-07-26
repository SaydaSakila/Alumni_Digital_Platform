<?php 
    //$page_title = 'Delete User';
    // include header file
    //include dirname(__FILE__). '/includes/header.php';
    //include database 
     include dirname(__FILE__).'/../database/database.php';

    //$db = new Database();

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        
        $sql = "DELETE FROM users where id='$id'";
        $result = $this->conn->query($sql);
        //var_dump($result);
        if($result)
        {
            header('location:user-list.php');
        }
     
    }
?>
