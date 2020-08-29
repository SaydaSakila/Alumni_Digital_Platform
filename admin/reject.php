<?php
      include dirname(__FILE__).'/../database/database.php';
      $db = new Database();
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
    $result = $db->conn->query($query);
        if($result){
            echo "Account has been rejected.";
            
        }else{
            echo "Unknown error occured. Please try again.";
        }
header('location:index.php');
?>
