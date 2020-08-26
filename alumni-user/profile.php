<?php
    $page_title = 'Alumni Profile';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
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
                ?>
                <div class="col-md-9 "  >
                <h3 style="text-align:center;"><b><?php echo $user['name'] ?>'s Profile</b></h3>
                    <div class="card" style="width:100%;height:auto">
                        <img src="../img/avater.png" alt="Avater" class="rounded-circle" 
                            style="width:100px;height:100px; display: block;margin-top:20px;margin-left: auto;margin-right: auto;">
                             <?php /* echo $user['photo'] */ ?>                                                                                                       
                        <h1><?php echo $user['name'] ?></h1>
                        
                        <p class="title">Works at: <?php echo $user['cname'] ?>(<?php echo $user['jposition'] ?>)</p>
                        <p>University ID<?php echo $user['username'] ?><br>
                        Phone: <?php echo $user['phone'] ?><br>
                            Batch: <?php echo $user['batch'] ?><br>
                            Passing Year: <?php echo $user['passingyear'] ?><br>
                        <button><?php echo $user['email'] ?></button><br>
                        <a href="edit-userreg.php?edit=<?php echo $user['id']; ?>" class="btn btn-success btn-block"><i class="fas fa-user-edit"></i>Update Profile</a></p>
                    </div><br> 
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