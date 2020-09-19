<?php
    $page_title = 'Admin Profile';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM admins";
    $users = $db->getData($query); 
    
?>
    <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:00vh;">
        <div class="container" >
                        
            <div class="row" >
                    <div class="col-md-2"></div>
                <div class="col-md-9 " >
                    
                    <?php 
                    if ($users) {
                        while($user = $users->fetch_assoc()) {
                            if($user['id']==$id){
                                //var_dump($user);

                ?>
                    <div class="col-md-9 "  >
                        <h3 style="text-align:center;"><b><?php echo $user['name'] ?>'s Profile</b></h3>
                        <div class="card" style="width:100%;height:auto;padding:50px;">
                                                                                                                              
                            <h1>Name : <?php echo $user['name'] ?></h1>
                            
                            <p class="title">Username : <?php echo $user['username'] ?></p>
                            <p>
                            Password: <?php echo $user['password'] ?><br>
                                
                                
                                <div class="text" style="background-color:#000;color:#fff;padding:5px">Email Address : <?php echo $user['email'] ?></div><br>
                                
                                
                            
                            <button><a href="edit-admin.php?edit=<?php echo $user['id']; ?>" class="btn btn-success btn-block"><i class="fas fa-user-edit"></i>UPDATE PROFILE</a></button></p>
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