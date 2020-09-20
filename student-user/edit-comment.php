<?php
    $page_title = 'Update comment ';
    // include header file
    ob_start();
    include dirname(__FILE__). '/includes/header.php';
    
   $db = new Database();

    
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        $comment= $_POST['comments'];
        $post_id = $_POST['post_id'];

        $sql = "UPDATE comments SET `comment`='$comment' where id='$id'";
       
        $run  = $db->conn->query($sql);
       
        if($run){  
            header('location:blog.php?id='.$post_id);   
        }
        else{
            echo $db->error;
        } 
    }
   ob_end_flush();
   
?>
