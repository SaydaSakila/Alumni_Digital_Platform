<?php
    $page_title = 'Department List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT * FROM departments";
    $departments = $db->getData($query);
?>

    <div class="card">
        <div class="card-header">
            <h3 style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;"  class="card-title">Department List</h3>
            <div class="card-header-action">
                <a href="department-add.php" class="btn btn-primary">Add New Department</a>
            </div>
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
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Department Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th> Department Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($departments) {
                            while($department = $departments->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $department['id'] ?></td>
                                        <td><?php echo $department['name'] ?></td>
                                        <td>
                                            <a href="edit-department.php?edit=<?php echo $department['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i><b>Edit</b></a>
                                            <a onclick="return confirm('Do You Want to delete this Department?')" href="delete-department.php?delete=<?php echo $department['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>