<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id";
    $posts = $db->getData($query);
   // $user_id= $_SESSION['id'];
?>
<div class="row" >
    <div class="col">

        <div class="card" >
            <div class="card-header">
                <h3  class="card-title"><b>Blog List</b></h3>
                <div class="card-header-action">
                    <a href="upost-add.php" class="btn btn-success">Add New Blog</a>
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
                <table class="table" style="">
                    <thead>
                        <tr>
                            <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><b>Blog Record</b></th>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Content</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Photo</th>
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
                                        <td><?php echo $post['user_name']; ?></td>
                                        <td><?php echo $post['created_at']; ?></td>
                                        <td><?php echo $post['photo'];?></td>
                                       
                                        <td>
                                        
                                                <a href="uedit-post.php?edit=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                                <a href="udelete-post.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
    </div>
</div>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>