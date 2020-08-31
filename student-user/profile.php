<?php
    $page_title = 'Alumni Profile';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT students.*, departments.name as department_name, `batches`.name as batch_name FROM `students` 
        LEFT JOIN departments ON students.dept_id=departments.id 
        LEFT JOIN `batches` ON students.batch_id=`batches`.id";
    $students = $db->getData($query); 

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
                    if ($students) {
                        while($student = $students->fetch_assoc()) {
                            if($student['id']==$id){
                ?>
                <div class="col-md-9 "  >
                <h3 style="text-align:center;"><b><?php echo $student['name'] ?>'s Profile</b></h3>
                    <div class="card" style="width:100%;height:auto">
                       <img src="../uploads/<?php if($student['photo']!= NULL){ echo $student['photo'];}else{ ?>stuavater.png <?php  } ?>"  alt="Avater" class="rounded-circle" 
                            style="width:100px;height:100px; display: block;margin-top:20px;margin-left: auto;margin-right: auto;">
                             <?php /* echo $user['photo'] */ ?>                                                                                                       
                        <h1><?php echo $student['name'] ?></h1>
                        
                        
                        <p class="title">University ID: <?php echo $student['username'] ?><br>
                        Address <?php echo $student['address'] ?><br>
                        Phone: <?php echo $student['phone'] ?><br>
                            Batch: <?php echo $student['batch_name'] ?><br>
                           <div class="text" style="background-color:#000;color:#fff;padding:5px"><?php echo $student['email'] ?></div>
                        <a href="edit-userreg.php?edit=<?php echo $student['id']; ?>" class="btn btn-success btn-block"><i class="fas fa-user-edit"></i>Update Profile</a></p>
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