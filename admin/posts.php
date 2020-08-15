<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT posts.*, categories.name as category_name, admins.name as admin_name FROM `posts` 
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN admins ON posts.admin_id=admins.id";
    $posts = $db->getData($query);
?>

    <div class="card">
        <div class="card-header">
            <h3 style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;"  class="card-title"><b>Blog List</b></h3>
            <div class="card-header-action">
                <a href="post-add.php" class="btn btn-primary">Add New Blog</a>
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
                        <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Blog Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>
                                    <tr>
                                       <td><?php echo $post['id']; ?></td>
                                       <td><?php echo $post['title']; ?></td>
                                       <td><?php echo $post['category_name']; ?></td>
                                       <td><?php echo $post['content']; ?></td>
                                       <td><?php echo $post['admin_name']; ?></td>
                                       <td><?php echo $post['created_at']; ?></td>
                                       <td>
                                            <a href="edit-post.php?edit=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                            <a href="delete-post.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                       </td>
                                    </tr>
                                <?php
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

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>