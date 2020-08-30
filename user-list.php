<?php
    $page_title = 'User List - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
     $query = "SELECT users.*, departments.name as department_name, `batches`.name as batch_name FROM `users` 
        LEFT JOIN departments ON users.dept_id=departments.id 
        LEFT JOIN `batches` ON users.batch_id=`batches`.id 
        ORDER BY id DESC";
    $users = $db->getData($query);
    

?>

<div class="row" style="background-image: url('img/12.jpg');background-repeat: no-repeat;width:100%;height:100%;background-size: cover;
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
                         <img src="uploads/<?php if($user['photo']!= NULL){ echo $user['photo'];}else{ ?>avater.png <?php  } ?>" alt="Avater" class="rounded-circle"
                                    style="width:100px;height:100px;; display: block;margin-top:20px;margin-left: auto;margin-right: auto;">
                             <?php /* echo $user['photo'] */ ?>                                                                                                       
                        <h1><?php echo $user['name'] ?></h1>
                        <p class="title">Works at: <?php echo $user['cname'] ?></p>
                        <p>Position: <?php echo $user['jposition']; ?></p>
                                <p>Department: <?php echo $user['department_name']; ?><br>
                                Batch: <?php echo $user['batch_name']; ?></p></p> 
                                <a href="<?php echo $user['fb']; ?>" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Facebook Profile <i class="fa fa-facebook"></i></a> 
                                <p><button><?php echo $user['email']; ?></button></p>
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