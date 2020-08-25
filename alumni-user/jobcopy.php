<?php
    $page_title = 'User List - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
    $users = $db->getData($query); 

    $query = "SELECT jobs.*, departments.name as department_name, users.name as user_name FROM `jobs` 
            LEFT JOIN departments ON jobs.dept_id=departments.id 
            LEFT JOIN users ON jobs.user_id=users.id 
            WHERE jobs.dept_id = '$id'
            ORDER BY id DESC";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];

    $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
        $id= $_SESSION['id'];

?>

<div class="row" >
        <div class="container" >
                
            <div class="row " style="margin-top:100px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
                <div class="col-md-10" >
                <div class="card-header">
                    <h2 style="border:2px solid #333;color:#333; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Job Section</b></h2>   
                </div>
                        <?php 

                            if (isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                                <?php 
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                ?>
                            </div>
                        <?php endif ?>
                    <div class="row " >
                        <?php 
                        if ($posts) 
                            {
                            while($post = $posts->fetch_assoc()) 
                            {
                        ?>
                                                
                        <div class="col-sm-12 "  >
                            <div class="container" style="width:auto;height:auto;margin-top:20px;background-color:;border:2px solid #333;padding:5px;" >
                                 <!--<img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                                <div class="hover" style="background-color: #F8F9F9">
                                    <div class="card-header" style="display:flex;">
                                    
                                        <a href="jobinfo.php?id=<?php echo $post['id'];?>">
                                        <h4 style="color:#0d4fb2;"><b><?php echo $post['title']; ?></b></h4></a> 
                                        <span style="margin-left:20px;padding:5px;"><small>Experience : <?php echo $post['experience']; ?></small></span>
                                        
                                        
                                    </div>
                                    <div class="" style="display:flex;margin-left:20px;margin-top:10px;">
                                        <h5 style="color:#0d4fb2"><img src="../img/company.png" alt="Location" > <?php echo $post['cname']; ?></h5><span style="margin-left:30px;"><img src="../img/location.png" alt="Location" > <?php echo $post['address']; ?></span>
                                    </div>
                                    <div class="" style="display:flex;margin-left:20px;">
                                        <h5 style=""><img src="../img/money.png" alt="Salary" > <b>Salary : <?php echo $post['salary']; ?></b></h5><span style="margin-left:55px;"><img src="../img/hour.png" alt="Time" > <?php echo $post['hour']; ?></span>
                                    </div>    
                                      <p style="margin-left:20px;">Educational Qualifications : <?php echo $post['education']; ?></p>
                                       <p style="margin-left:20px;"><?php //echo substr($post['info'],0,50); ?></p>
                                      
                                        
                                    
                                    <div class="card-footer">
                                        Department : 
                                        <?php echo $post['department_name'];?>
                                        <small class="text-muted" style="margin-left:150px;"><img src="../img/posttime.png" alt="Time" > Posted On : <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?></small>
                                        <small class="text-muted" style="margin-left:100px;"><img src="../img/deadline.png" alt="Time" >  Apply before : <?php $d=strtotime($post['deadline']); echo date("d M, Y",$d); ?></small>
                                         <?php /*echo $post['category_name']; */ 
                                                if($post['user_id']==$user_id){?>  
                                                <a href="edit-job.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="edit" ></a>
                                                <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-job.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="delete" ></a>
                                                    
                                        <?php }?>       
                                    </div>
                                </div>
                            </div>
                        </div><br>
                                            
                        <?php
                            }
                        
                                    
                            } 
                          else 
                            {
                            ?>
                                <div class="card text-center" style="margin-top:170px;margin-bottom:120px;"><h3>No Job Post found</h3></div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
                 <div class="col-md-2">
                    <div class="dashboard-sidebar" style="width: 220px;padding-left:5px;position:fixed;">
                        <h3><b>Departments</b></h3>
                        <ul class="dashboard-nav block" >
                            <?php 
                            if ($departments) {
                                while($department = $departments->fetch_assoc()) 
                            {
                                    
                            ?>
                                   <li> <a class="dropdown-item" href="jobcopy.php?id=<?php echo $department['id']; ?>" style="color:#1e90ff"><?php echo $department['name'] ?></a></li>
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