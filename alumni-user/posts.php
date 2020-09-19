<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    // saidebar include
    //include dirname(__FILE__). '/includes/sidebar.php';

    $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id ORDER BY id DESC";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];

    //student blog
    $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id ORDER BY id DESC";
    $posts1 = $db->getData($query1);
    $student_id= $_SESSION['id'];

     $query1 = "SELECT * FROM categories";
        $categories = $db->getData($query1);
        $id= $_SESSION['id'];

    
?>
    <div class="row" >
    
        <div class="container" >
            <!--<div class="card" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                    border-radius:10px;">-->
                                    
            <div class="row" style="margin-top:150px;margin-left:auto;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
    
                <div class="col-md-10">
                    <div class="">
                        <h3 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Blog List</b></h3>
                        <div class="card-header-action">
                            <!--<a href="post-add.php" class="btn btn-success">Add New Blog</a>-->
                        </div>
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
                    <div class="row ">
                        <?php
                            if ($posts) 
                            {
                            while($post = $posts->fetch_assoc()) 
                            {
                        ?><br>
                             <div class="col-sm-4 "  ><br>
                            <div class="card" style="width:auto;height:auto;margin-top:0px;" >
                                <!-- <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">
                                     <img src="uploads/<?php //echo $post['photo'];?>" class="card-img-top" alt="Blog Image">-->
                                     <img src="../uploads/<?php if($post['photo']!= NULL){ echo $post['photo'];}else{ ?>blog.jpg <?php  } ?>" style="width:auto;height: 200px;" class="card-img-top" alt="Blog Image">
                                <div class="card-header">Category:
                                    <?php echo $post['category_name'];?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $post['title'];?></h5>
                                    <small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post['user_name']; ?></small>

                                    <p class="card-text"><?php echo substr(Strip_tags($post['content']), 0, 50); ?>..</p>
                                    
                                </div>
                                <div class="card-footer">
                                    <a  href="blog.php?id=<?php echo $post['id'];?>">Read Details..</a>
                                    <?php /*echo $post['category_name']; */ 
                                            if($post['user_id']==$user_id){?>  
                                            <a href="edit-post.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                            <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                
                                        <?php }?>
                                        
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
                                                
                        <div class="col-sm-4 "  ><br>
                            <div class="card" style="width:auto;height:auto;margin-top:0px;" >
                                <!-- <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                                    <img src="../uploads/<?php if($post['photo']!= NULL){ echo $post['photo'];}else{ ?>blog.jpg <?php  } ?>" style="width:auto;height: 200px;" class="card-img-top" alt="Blog Image">
                                <div class="card-header">Category:
                                    <?php echo $post['category_name'];?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $post['title'];?></h5>
                                    <small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post['student_name']; ?></small>

                                    <p class="card-text"><?php echo substr(Strip_tags($post['content']), 0, 50); ?>..</p>
                                    
                                </div>
                                <div class="card-footer">
                                    <a  href="stublog.php?id=<?php echo $post['id'];?>">Read Details..</a>
                                    <?php /*echo $post['category_name']; */ 
                                            if($post['student_id']==$student_id){?>  
                                            <a href="edit-post.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                            <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                
                                        <?php }?>
                                        
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
                <div class="col-md-2">
                    <div class="dashboard-sidebar" style="width: 220px;padding:10px;position:fixed;">
                        <h3><b>Category List</b></h3>
                        <ul class="dashboard-nav block" >
                            <?php 
                            if ($categories) {
                                while($category = $categories->fetch_assoc()) 
                            {
                                    
                            ?>
                                   <li> <a class="dropdown-item" href="postscopy.php?id=<?php echo $category['id']; ?>" style="color:#1e90ff"><?php echo $category['name'] ?></a></li>
                        <?php
                                }
                            }
                        ?>
                            
                        </ul>
                    </div>        
                </div>
            </div>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
