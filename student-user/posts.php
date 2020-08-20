<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    $query = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id ORDER BY id DESC";
    $posts = $db->getData($query);
    $student_id= $_SESSION['id'];

    //alumni blog
    $query1 = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id";
    $posts1 = $db->getData($query1);
    $user_id= $_SESSION['id'];
//admin blog
/*    $query2 = "SELECT posts.*, categories.name as category_name, admins.name as admin_name FROM `posts` 
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN admins ON posts.admin_id=admins.id";
    $posts2 = $db->getData($query2);
  */  
?>
   <div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">
        <div class="col-sm" style="margin-top:150px;margin-left:150px;margin-right:150px;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
            <!--<div class="card" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                    border-radius:10px;">-->
                <div class="card-header">
                    <h3 style="border:2px solid #fff;color:#fff; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Blog List</b></h3>
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
                    <div class="row ">
                        <?php
                            if ($posts) 
                            {
                            while($post = $posts->fetch_assoc()) 
                            {
                        ?>
                                                
                        <div class="col-sm-4 "  >
                            <div class="card" style="width:auto;height:500px;margin-top:20px;" >
                                 <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-header">
                                        <?php echo $post['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                                        <small class="text-muted"><?php /*$d=strtotime("created_at");*/ echo date("d M, Y"/*,$d*/); ?> By: <?php echo $post['student_name']; ?></small>
                                        
                                        <p class="card-text"><?php echo $post['content']; ?>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="first.php">Read More..</a>
                                        <?php /*echo $post['category_name']; */ 
                                                if($post['student_id']==$student_id){?>  
                                                <a href="edit-post.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                                <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                    
                                            <?php }?>
                                                <!-- <li class="list-group-item"><?php /*$d=strtotime("created_at");*/ //echo date("d M, Y"/*,$d*/); ?> By: <?php //echo $post['user_name']; ?> </li>
                                         <li class="list-group-item">Post Time : <?php // echo $post['created_at']; ?></li>-->
                                        
                                          <!--  <li class="list-group-item"><form action="" id="usrform" >
                                                <input type="text" name="comment" placeholder="Enter Your Comments">
                                                <input type="submit" name="submit" class="btn btn-success btn-sm" value="Post">
                                            </form></li>
                                            <li class="list-group-item"><input type="text" class="form-control" name="comment"  placeholder="Enter Your Comments" />&#160;<?php /*echo $post['comments']; */?>
                                            <input type="submit" class="form-control" name="submit" class="btn btn-success" value="submit" /></li>-->
                                    </div>
                            </div>
                        </div>
                                            
                        <?php
                            }
                        
                        
                  } 

                if ($posts1) 
                {
                  while($post = $posts1->fetch_assoc()) 
                  {
              ?>
                                    
            <div class="col-sm-4 "  >
                <div class="card" style="width:auto;height:500px;margin-top:20px;" >
                    <!-- <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                         <img src="../img/portfolio/web1.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-header">
                                        <?php echo $post['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                                        <small class="text-muted"><?php /*$d=strtotime("created_at");*/ echo date("d M, Y"/*,$d*/); ?> By: <?php echo $post['user_name']; ?></small>

                                        <p class="card-text"><?php echo $post['content']; ?>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="first.php">Read More..</a>
                                        <?php /*echo $post['category_name']; */ 
                                                if($post['user_id']==$user_id){?>  
                                                <a href="edit-post.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                                <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                    
                                            <?php }?>
                                                <!-- <li class="list-group-item"><?php /*$d=strtotime("created_at");*/ //echo date("d M, Y"/*,$d*/); ?> By: <?php //echo $post['student_name']; ?> </li>
                                         <li class="list-group-item">Post Time : <?php // echo $post['created_at']; ?></li>-->
                                        
                                          <!--  <li class="list-group-item"><form action="" id="usrform" >
                                                <input type="text" name="comment" placeholder="Enter Your Comments">
                                                <input type="submit" name="submit" class="btn btn-success btn-sm" value="Post">
                                            </form></li>
                                            <li class="list-group-item"><input type="text" class="form-control" name="comment"  placeholder="Enter Your Comments" />&#160;<?php /*echo $post['comments']; */?>
                                            <input type="submit" class="form-control" name="submit" class="btn btn-success" value="submit" /></li>-->
                                    </div>
                </div>
            </div>
                                  
              <?php
                  }
             
                  } 

                            else 
                            {
                        ?>
                                <div class="card text-center"><p>No Blog found</p></div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
            <!--</div>-->
        </div>
    </div>


<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
