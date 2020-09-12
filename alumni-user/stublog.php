<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/sidebar.php';
   $db = new Database();
$logid = $_SESSION['id'];
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        //student blog
        $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
                LEFT JOIN categories ON sposts.category_id=categories.id 
                LEFT JOIN students ON sposts.student_id=students.id WHERE sposts.id = '$id'";
        $posts1 = $db->conn->query($query1);
        $student_id= $_SESSION['id'];
        $post = $posts1->fetch_assoc();

        $comm =  "SELECT comments.*, users.name as user_name, students.name as stu_name FROM `comments` 
            LEFT JOIN users ON comments.user_id=users.id 
            LEFT JOIN students ON comments.user_id=students.id
            ORDER by id DESC";
        $comments = $db->getData($comm);

    }

?>
 <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container">
            <div class="row" style="padding:120px 0px;">
                <?php //include dirname(__FILE__). '/includes/dashsidebar.php'; ?>
                <div class="col-sm-2"></div>
                <div class="col-sm-8 " style="background-color:#fff;width:auto;height:auto;margin-top:0px;margin-bottom:100px;">
                   
                    <img src="../uploads/<?php if($post['photo']!= NULL){ echo $post['photo'];}else{ ?>blog.jpg <?php  } ?>" style="width:100%;height: 400px;padding:10px">
                    <div class="card-header">Category: 
                        <?php echo $post['category_name'];?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                        <small class="text-muted">Uploaded at <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By <?php echo $post['student_name']; ?></p>
                        <p class="card-text"><?php echo $post['content']; ?></p>
                    </div>
                    <div class="card-footer" >
                    
                        <label><h4>Leave Your Comment Below</h4></label>
                        <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                            
                            ?>
                       <form action="submit/comment-submit-stu.php" method="POST" id="usrform" style="display:flex;box-siziing:border-box;" > 
                            <input type="hidden" name="user_id" value='<?php  echo $student_id; ?>' ></input>
                            <input type="hidden" name="post_id" value='<?php  echo $post['id']; ?>' ></input>                   
                            <div class="container">
                                <div class="flex" style="display:flex;">
                                    <div class="col-sm-1">
                                        <img src="img/avater.png" alt="Profile avater" style="width:40px;height:auto;border-radius:50%">  
                                    </div>
                                    <div class="col-sm-11" style="height:auto;">
                                        <textarea name="comments" rows="5" class="form-control"  placeholder="Enter Your  Comments"></textarea><br>
                                    </div>
                                </div>
                                <div class="sakil">
                                    <p style="float: right;margin-right:15px;"><input type="submit" class="btn btn-success" name="comment_submit" value="Comment"></p>
                                </div>
                            </div>
                        </form>
                        <div class="container ">
                            <?php
                            
                            if ($comments) {
                                while($comment = $comments->fetch_assoc()) {
                                    if($comment['post_id']==$post['id']){
                                    ?>
                                        <div class="card mb-3" style="max-width: 740px;height:auto;;">
                                            <div class="row no-gutters">
                                            <div class="col-sm-1" style="padding:10px;">
                                                    <img src="img/avater.png" alt="Profile avater" style="width:40px;height:auto;border-radius:50%">  
                                                <?php 
                                                if($logid== $comment['user_id']) {   ?>
                                                    <a href="edit-comment.php?edit=<?php echo $comment['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                                    <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-comment.php?delete=<?php echo $comment['id']; ?>" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                               <?php } ?>
                                                </div>
                                                <div class="col-sm-11" style="text-align:left;">
                                                    <div class="card-header">
                                                        <h5><?php 
                                                        if($comment['user_type']=='students'){ echo $comment['stu_name'];}
                                                        if($comment['user_type']=='users'){ echo $comment['user_name'];}?> </h5>
                                                        <small class="text-muted"><?php $d=strtotime($comment['created_at']); echo date("d M, Y h:i:sa",$d); ?></small>
                                                   <?php if($post['student_id']==$student_id){?> 
                                                        <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-comment.php?delete=<?php echo $comment['id']; ?>" style="float:right;" class="btn btn-danger btn-sm">Hide<img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                    <?php } ?>
                                                   </div>
                                                    <div class="card-body" style="padding:20px;">
                                                        
                                                        <p class="card-text"><?php echo $comment['comment']; //echo substr(Strip_tags($comment['comment']), 0, 120); ?></p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                          
                            <?php
                            }       
                                }
                                    } 
                            
                            ?>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
            
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>