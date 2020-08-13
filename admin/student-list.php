<?php
    $page_title = 'User List - Student';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM students";
    $users = $db->getData($query); 

?>

<div class="card">
    <div class="card-header">
        <h3  style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;" class="card-title" ><b>User List - Student </b> </h3>
        <a href="student-register.php" class="btn btn-secondary" > Add New User - Student</a>
        
        
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

        <table class="table table-bordered" style="text-align:center;">
            <thead >
                <tr>
                    <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Students Record</b></h3></th>
                </tr>
                <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Batch</th>
                    <!-- <th>Photo</th> -->
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($users) {
                        while($user = $users->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $user['id'] ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo $user['username'] ?></td>
                                    <td><?php echo $user['phone'] ?></td>
                                    <td><?php echo $user['address'] ?></td>
                                    <td><?php echo $user['batch'] ?></td>
                                   <!-- <td><?php /* echo $user['photo'] */ ?></td> -->
                                    <td>
                                        <a href="edit-studentreg.php?edit=<?php echo $user['id']; ?>" style="background:#2E8857;border-radius:5px;color:white;padding: 5px;border:2px solid #2E8857;"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                    </td>
                                    <td>
                                        <a href="delete-studentreg.php?delete=<?php echo $user['id']; ?>" style="background:#800000;border-radius:5px;color:white;padding: 5px;border:2px solid #800000;"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="10">No User Found</td>
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