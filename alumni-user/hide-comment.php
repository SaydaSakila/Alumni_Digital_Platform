<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    if(isset($_GET['hide']))
    {
        $comment_id=$_GET['hide'];
        $post_id = $_GET['post_id'];
        
        $sql = "UPDATE comments set hide=1 where id='$comment_id'  ";
        $result = $db->conn->query($sql);
        //var_dump($comment_id);die();
        if($result)
        {
            
            header('location:blog.php?id='.$post_id);
            
            
        }
     
    }
?>
