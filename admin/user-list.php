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

<div class="card">
    <div class="card-header">
        <h3  style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;" class="card-title" ><b>User List - Alumni </b> </h3>
        <a href="user-register.php" class="btn btn-secondary" > Add New User - Alumni</a>
        
        
    </div>
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

        <table class="table table-striped" style="text-align:center;">
            <thead >
                <tr>
                    <th colspan="16" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Alumnus Record</b></h3></th>
                </tr>

                <tr >
                    <!-- <th>ID</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Phone</th>
                    <th>Address</th>
                    
                    <th>Passing Year</th>
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Photo</th> 
                    <th>Facebook ID</th>
                     <th>Linkedin ID</th>
                    <th colspan="1">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($users) {
                        while($user = $users->fetch_assoc()) {
                            ?>
                                <tr>
                                    <!-- <td><?php //echo $user['id'] ?></td> -->
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo $user['username'] ?></td>
                                    <td><?php echo $user['department_name'] ?></td>
                                    <td><?php echo $user['batch_name'] ?></td>
                                    <td><?php echo $user['phone'] ?></td>
                                    <td><?php echo $user['address'] ?></td>
                                    
                                    <td><?php echo $user['passingyear'] ?></td>
                                    <td><?php echo $user['cname'] ?></td>
                                    <td><?php echo $user['jposition'] ?></td>
                                    <td style="width:50px;height: 50px;"><?php  echo $user['photo']  ?> </td>
                                    <td><?php echo $user['fb'] ?></td>
                                    <td><?php echo $user['link'] ?></td>
                                    <td>
                                        <a href="edit-userreg.php?edit=<?php echo $user['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                    
                                        <a href="delete-userreg.php?delete=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
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
            </tbody>
        </table>
    </div>
</div>

<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>