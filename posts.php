<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id ORDER BY id DESC";
    $posts = $db->getData($query);
    //$user_id= $_SESSION['id'];

    //student blog
    $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id ORDER BY id DESC";
    $posts1 = $db->getData($query1);
    //$student_id= $_SESSION['id'];

    //admin blog
    $query2 = "SELECT posts.*, categories.name as category_name, admins.name as admin_name FROM `posts` 
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN admins ON posts.admin_id=admins.id ORDER BY id DESC";
    $posts2 = $db->getData($query2);

    
?>
<div class="row" style="background-color:#ddd">
    <div class="container" style="margin-top:150px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
        <div class="card-header">
            <h2 style="border:2px solid #333;color:#333; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Blogs</b></h2>   
        </div>
       <div class="row ">
            <?php
                if ($posts) 
                {
                  while($post = $posts->fetch_assoc()) 
                  {
              ?>
                                    
                          <div class="col-sm-4 "  >
                            <div class="card" style="width:auto;height:400px;margin-top:20px;" >
                                 <img src="https://www.mdis.edu.sg/blog/wp-content/uploads/2017/05/make-money-blogging-1.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-header">Category: 
                                        <?php echo $post['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $post['title'];?></h4>
                                        <small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post['user_name']; ?></small>
                                        
                                        <p class="card-text"><?php echo substr($post['content'],0,10); ?>..</p>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="blog.php?id=<?php echo $post['id'];?>">Read Details..</a>
                                       
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
                  while($post1 = $posts1->fetch_assoc()) 
                  {
              ?>
                                    
                          <div class="col-sm-4 "  >
                            <div class="card" style="width:auto;height:400px;margin-top:20px;" >
                                 <img src="img/portfolio/web1.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-header">
                                        <?php echo $post1['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $post1['title'];?></h5>
                                        <small class="text-muted"><?php $d=strtotime($post1['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post1['student_name']; ?></small>
                                        
                                        <p class="card-text"><?php echo substr($post1['content'],0,10); ?></p>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="stublog.php?id=<?php echo $post1['id'];?>">Read More..</a>
                                       
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
                  if ($posts2) 
                {
                  while($post = $posts2->fetch_assoc()) 
                  {
              ?>
                                    
            <div class="col-sm-4 "  >
                            <div class="card" style="width:auto;height:400px;margin-top:20px;" >
                                 <img src="img/portfolio/card1.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-header">
                                        <?php echo $post['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                                        <small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post['admin_name']; ?></small>
                                        
                                        <p class="card-text"><?php echo substr($post['content'],0,10); ?></p>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="adminblog.php?id=<?php echo $post['id'];?>">Read More..</a>
                                       
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

                  else 
                  {
                ?>
                    <div class="card text-center"><p>No Blog found</p></div>
                <?php
                  }
                ?>
        </div><br>
    </div>
</div>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
