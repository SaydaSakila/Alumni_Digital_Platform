<?php
    $page_title = 'User List - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
    $users = $db->getData($query); 

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">
        <div class="container" style="margin-top:150px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
                <div class="card-header">
                    <h2 style="border:2px solid #fff;color:#fff; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Alumni List</b></h2>   
                </div>
            <div class="row ">
                
                <?php 
                    if ($users) {
                        while($user = $users->fetch_assoc()) {
                ?><br>
                    <div class="card" style="width:100%;">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="John" class="rounded-circle" 
                            style="width:50%; display: block;margin-top:20px;margin-left: auto;margin-right: auto;">
                             <?php /* echo $user['photo'] */ ?>                                                                                                       
                        <h1><?php echo $user['name'] ?></h1>
                        <p class="title">Works at: <?php echo $user['address'] ?></p>
                        <p>Position: </p>
                            <div style="margin: 24px 0;">
                                
                                <a href="#"><i class="fa fa-twitter"></i></a>  
                                <a href="#"><i class="fa fa-linkedin"></i></a>  
                                <a href="#"><i class="fa fa-facebook"></i></a> 
                            </div>
                        <p><button><?php echo $user['email'] ?></button></p>
                    </div><br>
                    
                <?php
                            }
                        } else {
                            ?>
                                <tr>
                                    <td colspan="11">No User Found</td>
                                </tr>
                            <?php
                        }
                ?>
               
            </div>
        </div>
    </div>
</body>
</html>
<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>