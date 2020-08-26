<?php    
    include dirname(__FILE__). '/includes/header.php';

    $page_title = 'Blog List';
    
    $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id ORDER BY id DESC";
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
                        <th colspan="12" style="text-align:center; background: #17a2b8; color:white;"><h3><b>My Blog Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Photo</th>
                        <th>Created At</th>
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
                                       <td><?php echo $post['category_name']; ?></td>
                                       <td><?php echo substr($post['content'],0,10); ?></td>
                                       <td><?php echo $post['photo']; ?></td>
                                       <td><?php echo $post['created_at']; ?></td>
                                       <td>
                                       <a href="blog.php?id=<?php echo $post['id']; ?>" class="btn btn-primary"><i class="fas fa-user-edit"></i><b>View</b></a>
                                            <a href="edit-post.php?edit=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                            <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
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
               
                