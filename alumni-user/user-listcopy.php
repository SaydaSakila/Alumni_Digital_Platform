<?php
    $page_title = 'User List - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    //$query = "SELECT * FROM users";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $query = "SELECT users.*, departments.name as department_name, `batches`.name as batch_name FROM `users` 
        LEFT JOIN departments ON users.dept_id=departments.id 
        LEFT JOIN `batches` ON users.batch_id=`batches`.id 
         WHERE users.`dept_id` = '$id'
         ORDER BY id DESC";
    $users = $db->getData($query);

    $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
        $id= $_SESSION['id'];

?>

<div class="row" >
        <div class="container" >
                
            <div class="row " style="margin-top:100px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
                <div class="col-md-10">
                <div class="card-header">
                    <h2 style="border:2px solid #333;color:#333; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Alumni List</b></h2>   
                </div>
                    <div class="row ">
                        <?php 
                            if ($users) {
                                while($user = $users->fetch_assoc()) {
                        ?>
                        <div class="col-sm-4 "  ><br>
                            <div class="card" style="width:100%;height:auto">
                                <img src="uploads/<?php echo $user['photo']; ?>" alt="Avater" class="rounded-circle"
                                    style="width:100px;height:100px;; display: block;margin-top:20px;margin-left: auto;margin-right: auto;">
                                    <?php /* echo $user['photo'] */ ?>                                                                                                       
                                <h3><?php echo $user['name']; ?></h3>
                                <p class="title">Works at: <?php echo $user['cname']; ?></p>
                                   <p>Position: <?php echo $user['jposition']; ?><br>
                                Department: <?php echo $user['department_name']; ?> <br>
                                Batch: <?php echo $user['batch_name']; ?></p>
                                 
                                      
                                    
                                <a href="<?php echo $user['fb']; ?>" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Facebook Profile <i class="fa fa-facebook"></i></a>
                                
                                <p><button><?php echo $user['email']; ?></button></p>
                            </div>
                        </div>    
                        <?php
                                    }
                                } else {
                                    ?>
                                        <div class="card text-center" style="margin-top:170px;margin-bottom:120px;"><h3>No Alumni found</h3></div>
                                    <?php
                                }
                        ?>
                    </div>
                </div>
                 <div class="col-md-2">
                    <div class="dashboard-sidebar" style="width: 220px;padding:10px;position:fixed;">
                        <h3><b>Department List</b></h3>
                        <ul class="dashboard-nav block" >
                            <?php 
                            if ($departments) {
                                while($department = $departments->fetch_assoc()) 
                            {
                                    
                            ?>
                                   <li> <a class="dropdown-item" href="user-listcopy.php?id=<?php echo $department['id']; ?>" style="color:#1e90ff"><?php echo $department['name'] ?></a></li>
                        <?php
                                }
                            }
                        ?>
                            
                        </ul>
                    </div>        
                </div>
            </div>
        </div>
    </div>

<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>