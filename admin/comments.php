<?php
    $page_title = 'Comment List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   
        $query = "SELECT * FROM `comments` ORDER by id DESC";
        $comments = $db->getData($query);

?>
    <div class="row" >
    
        <div class="container" >
            <!--<div class="card" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                    border-radius:10px;">-->
                                    
            <div class="row" >
                <div class="card" style="padding:20px;">
                    <div class="">
                        <h3 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Comment List</b></h3>
                        
                    </div>
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
                        <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Comment Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Uner ID</th>
                        <th>User Type</th>
                        <th>Comment</th>
                        <th>Blog ID</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($comments) {
                            while($comment = $comments->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $comment['id'] ?></td>
                                        <td><?php echo $comment['user_id'] ?></td>
                                        <td><?php echo $comment['user_type'] ?></td>
                                        <td><?php echo $comment['comment'] ?></td>
                                        <td><?php echo $comment['post_id'] ?></td>
                                        
                                        
                                       <?php  
                                            if($comment['hide']==0){
                                            ?> 
                                                <td style="text-align:center;">
                                                    <a href="commentstatus.php?edit=<?php echo $comment['id']; ?>&&hide=<?php echo $comment['hide']; ?>" class="btn-success btn-block">Active</a>
                                                </td>
                                        <?php
                                            }
                                            else{
                                            ?> 
                                                <td style="text-align:center;">
                                                    <a href="commentstatus.php?edit=<?php echo $comment['id']; ?>&&hide=<?php echo $comment['hide']; ?>" class=" btn-danger btn-block">Inactive</a>
                                                </td>
                                        <?php            
                                            }
                                            ?>
                                        <td><?php echo $comment['created_at'] ?></td>
                                        <td>
                                            
                                            <a href="delete-comment.php?delete=<?php echo $comment['id']; ?>" class="btn btn-danger btn-sm">Delete<i class="fas fa-trash-alt"></i></a>
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
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
