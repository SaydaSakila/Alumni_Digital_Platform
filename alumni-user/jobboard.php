<?php    
    include dirname(__FILE__). '/includes/header.php';

    $page_title = 'Job List';
    
    $query = "SELECT jobs.*, departments.name as department_name, users.name as user_name FROM `jobs` 
            LEFT JOIN departments ON jobs.dept_id=departments.id 
            LEFT JOIN users ON jobs.user_id=users.id 
            ORDER BY id DESC";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];
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
        
        <div class="container">
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
                        <th colspan="14" style="text-align:center; background: #17a2b8; color:white;"><h3><b>My Job Post Record</b></h3></th>
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
                       <!-- <th>Created By</th>-->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                if($post['user_id']==$user_id)
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
                                      <!-- <td><?php// echo $post['user_name']; ?></td>-->
                                       <td>
                                       <a href="jobinfo.php?id=<?php echo $post['id']; ?>" class="btn btn-primary"><i class="fas fa-user-edit"></i><b>View</b></a>
                                            <a href="edit-job.php?edit=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                            <a onclick="return confirm('Do You Want to delete this Post?')" href="delete-job.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                       </td>
                                    </tr>
                                <?php
                                }
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No Blog found</td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
               
                