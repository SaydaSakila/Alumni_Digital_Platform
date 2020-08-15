<?php
    $page_title = 'Category List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT * FROM categories";
    $categories = $db->getData($query);
?>

    <div class="card">
        <div class="card-header">
            <h3 style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;"  class="card-title">Category List</h3>
            <div class="card-header-action">
                <a href="category-add.php" class="btn btn-primary">Add New Category</a>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($categories) {
                            while($category = $categories->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $category['id'] ?></td>
                                        <td><?php echo $category['name'] ?></td>
                                        <td>
                                            <a href="edit-category.php?edit=<?php echo $category['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                            <a href="delete-category.php?delete=<?php echo $category['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
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