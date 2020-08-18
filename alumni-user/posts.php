<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];
?>
<div class="row" style="background-image: url('assets/img/3.jpg');background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;">
    <div class="col-md-6 offset-md-3">

        <div class="card" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                border-radius:10px;">
            <div class="card-header">
                <h3 style="border:2px solid #fff;color:#fff; border-radius:5px; padding: 7px;"  class="card-title"><b>Blog List</b></h3>
                <div class="card-header-action">
                    <a href="post-add.php" class="btn btn-success">Add New Blog</a>
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
                
                        <?php
                            if ($posts) {
                                while($post = $posts->fetch_assoc()) {
                                    
                                    ?>
                                     <div class="card">
                                        <div class="card-header">
                                            <?php echo $post['title']; ?>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $post['category_name']; ?></h5>
                                            <p class="card-text"><?php echo $post['content']; ?></p>
                                        <h5 class="card-title"> <?php echo $post['user_name']; ?> &nbsp;
                                                                                <?php echo $post['created_at']; ?></h5>
                                        </div>
                                        <div class="card-footer">
                                        <?php 
                                            if($post['user_id']==$user_id) {?>  
                                            <a href="edit-post.php?edit=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                            <a href="delete-post.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                                
                                        <?php }?>
                                            </div>
                                    </div>

                                        
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