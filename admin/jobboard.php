<?php    
         $page_title = 'Job List';
        include dirname(__FILE__). '/includes/header.php';

    //$page_title = 'Job List';
    
    $query = "SELECT jobs.*, departments.name as department_name, users.name as user_name FROM `jobs` 
            LEFT JOIN departments ON jobs.dept_id=departments.id 
            LEFT JOIN users ON jobs.user_id=users.id 
            ORDER BY id DESC";
    $posts = $db->getData($query);
   // $user_id= $_SESSION['id'];
?>


                   
                       
        
<div class="card">
    <div class="card-header" style="display:flex;">
        <h3  style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;" class="card-title" ><b>Job Circular</b> </h3>
        <a href="job-add.php" class="btn btn-secondary" > Add New Job</a>
        <!-- Search form -->
            <form class="form-inline ml-auto" method="GET" action="">
                <input class="form-control form-control-sm mr-3 w-75" name="search" type="text" placeholder="Search by Department" aria-label="Search" >
                <button type="submit" class="btn btn-primary"> <i class="fas fa-search" aria-hidden="true"></i></button>
            </form>
    </div>
    <?php 
                    if (isset($_GET['search'])){
                    $srch=$_GET['search'];
                      $qry = "SELECT jobs.*, departments.name as department_name, users.name as user_name FROM `jobs` 
                                LEFT JOIN departments ON jobs.dept_id=departments.id 
                                LEFT JOIN users ON jobs.user_id=users.id 
                                WHERE departments.name LIKE '%$srch%' 
                                ORDER BY id DESC";
                    $sr = $db->getData($qry);
                    //var_dump($sr);die();
                    ?>
    <div class="card-body">
        <?php 

        if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="14" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Job Post Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Experience</th>
                        <th>Company Name</th>
                        <th>Job Location</th>
                        <th>Salary</th>
                        <th>Working Hour</th>
                        <th>Job info</th>
                        <th>Qualification</th>
                        <th>Deadline</th>
                        <th>Created At</th>
                        
                        <th>Department</th>
                       <th>Post By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($sr) {
                            while($post = $sr->fetch_assoc()) {
                                
                                {?>
                                
                                    <tr>
                                       <td><?php echo $post['id']; ?></td>
                                       <td><?php echo $post['title']; ?></td>                                      
                                       <td><?php echo $post['experience']; ?></td>
                                       <td><?php echo $post['cname']; ?></td>
                                       <td><?php echo $post['address']; ?></td>
                                       <td><?php echo $post['salary']; ?></td>
                                       <td><?php echo $post['hour']; ?></td>
                                       <td><?php echo substr($post['info'],0,10); ?></td>
                                       <td><?php echo $post['education']; ?></td>
                                       <td><?php echo $post['deadline']; ?></td>
                                       <td><?php echo $post['created_at']; ?></td>
                                       <td><?php echo $post['department_name']; ?></td>
                                      <td><?php echo $post['user_name']; ?></td>
                                       <td>
                                       <a href="jobinfo.php?id=<?php echo $post['id']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="edit-job.php?edit=<?php echo $post['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Do You Want to delete this Post?')" href="delete-job.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                       </td>
                                    </tr>
                                <?php
                                }
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No Job found</td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }else{?>


        <div class="card-body">
        <?php 

        if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="14" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Job Post Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Experience</th>
                        <th>Company Name</th>
                        <th>Job Location</th>
                        <th>Salary</th>
                        <th>Working Hour</th>
                        <th>Job info</th>
                        <th>Qualification</th>
                        <th>Deadline</th>
                        <th>Created At</th>
                        
                        <th>Department</th>
                       <th>Post By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                
                                {?>
                                
                                    <tr>
                                       <td><?php echo $post['id']; ?></td>
                                       <td><?php echo $post['title']; ?></td>                                      
                                       <td><?php echo $post['experience']; ?></td>
                                       <td><?php echo $post['cname']; ?></td>
                                       <td><?php echo $post['address']; ?></td>
                                       <td><?php echo $post['salary']; ?></td>
                                       <td><?php echo $post['hour']; ?></td>
                                       <td><?php echo substr($post['info'],0,10); ?></td>
                                       <td><?php echo $post['education']; ?></td>
                                       <td><?php echo $post['deadline']; ?></td>
                                       <td><?php echo $post['created_at']; ?></td>
                                       <td><?php echo $post['department_name']; ?></td>
                                      <td><?php echo $post['user_name']; ?></td>
                                       <td>
                                       <a href="jobinfo.php?id=<?php echo $post['id']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="edit-job.php?edit=<?php echo $post['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Do You Want to delete this Post?')" href="delete-job.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                       </td>
                                    </tr>
                                <?php
                                }
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No Job found</td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
         <?php } ?>  
    </div>    
  

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
               
                