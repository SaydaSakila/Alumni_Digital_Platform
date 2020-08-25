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
            WHERE jobs.`dept_id` = '$id' ORDER BY id DESC";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];

    $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
       // $id= $_SESSION['id'];

?>

<div class="row" >
    <div class="container" >
                
        <div class="row " style="margin-top:100px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
            <div class="col-md-10">
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
                    <div class="row ">
                        <?php 
                        if ($posts) 
                            {
                            while($post = $posts->fetch_assoc()) 
                            {
                        ?>
                                                
                        <div class="col-sm-9 "  >
                            <div class="card" style="width:auto;height:450px;margin-top:20px;" >
                                 <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-header">Department: 
                                        <?php echo $post['department_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                                        <small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post['user_name']; ?></small>
                                        <p class="card-text"><?php echo substr($post['info'],0,10); ?></p>
                                      
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="jobinfo.php?id=<?php echo $post['id'];?>">Read Details..</a>
                                        <?php /*echo $post['category_name']; */ 
                                                if($post['user_id']==$user_id){?>  
                                                <a href="edit-job.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                                <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-job.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                    
                                            <?php }?>
                                                
                                    </div>
                            </div>
                        </div>
                                            
                        <?php
                            }
                        
                                    
                            } 
                          else 
                            {
                            ?>
                                <div class="card text-center"><h3>No Job Post found</h3></div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
                 <div class="col-md-2">
                    <div class="dashboard-sidebar" style="width: 220px;padding-left:5px;position:fixed;">
                        <h3><b>Department Name</b></h3>
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