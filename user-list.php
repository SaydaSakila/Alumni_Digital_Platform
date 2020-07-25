<?php
    $page_title = 'User List';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
    $users = $db->getData($query); 
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">User List</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered" style="text-align:center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
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
                                    <td>
                                        <a href="#" style="background:#2E8857;border-radius:5px;color:white;padding: 5px;border:2px solid #2E8857;"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                        <a href="delete-user.php?delete=<?php echo $user['id']; ?>" style="background:#800000;border-radius:5px;color:white;padding: 5px;border:2px solid #800000;"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="5">No User found</td>
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