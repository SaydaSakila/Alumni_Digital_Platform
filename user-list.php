<?php
    $page_title = 'User List - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
    $users = $db->getData($query); 

?>

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
                ?>
                <div class="col-sm-4 "  >
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
                </div>    
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

<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>