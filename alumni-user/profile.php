<?php
    $page_title = 'Alumni Profile';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT users.*, departments.name as department_name, `batches`.name as batch_name FROM `users` 
        LEFT JOIN departments ON users.dept_id=departments.id 
        LEFT JOIN `batches` ON users.batch_id=`batches`.id";
    $users = $db->getData($query); 
    
?>
    <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container" style="margin-top:100px;margin-bottom:70px;
                                        border-radius:10px;">
                        
            <div class="row" >
                        <?php
                            // contents include
                            include dirname(__FILE__). '/includes/dashsidebar.php';
                        ?>
                <div class="col-md-9 " >
                    
                    <?php 
                    if ($users) {
                        while($user = $users->fetch_assoc()) {
                            if($user['id']==$id){
                                //var_dump($user);

                ?>
                <div class="col-md-9 "  >
                <h3 style="text-align:center;"><b><?php echo $user['name'] ?>'s Profile</b></h3>
                    <div class="card" style="width:100%;height:auto">
                        <img src="../uploads/<?php echo $user['photo']; ?>" alt="Avater" class="rounded-circle" 
                            style="width:100px;height:100px; display: block;margin-top:20px;margin-left: auto;margin-right: auto;">
                             <?php  ?>                                                                                                       
                        <h1><?php echo $user['name'] ?></h1>
                        
                        <p class="title">Works at: <?php echo $user['cname'] ?>(<?php echo $user['jposition'] ?>)</p>
                        <p>University ID<?php echo $user['username'] ?><br>
                        Phone: <?php echo $user['phone'] ?><br>
                            Batch: <?php echo $user['batch_name']; ?><br>
                            Passing Year: <?php echo $user['passingyear'] ?><br>
                            <a  href="<?php echo $user['fb']; ?>" target="_blank" class="fa fa-facebook"></a>
                            <div class="text" style="background-color:#000;color:#fff;padding:5px"><?php echo $user['email'] ?></div>
                            
                            
                        
                        <button><a href="edit-userreg.php?edit=<?php echo $user['id']; ?>" class="btn btn-success btn-block"><i class="fas fa-user-edit"></i>UPDATE PROFILE</a></button></p>
                    </div>
                </div>    
                <?php
                            }
                            }
                        }
                        ?>
                            <!-- table -->
                            
                </div>
            </div>
        </div>
    </div>

<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>