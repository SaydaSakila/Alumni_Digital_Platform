<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    $query = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id";
    $posts = $db->getData($query);
    $student_id= $_SESSION['id'];

    
?>
    <div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">>
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
                    <!-- <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                        <div class="card-header">
                            <?php echo $post['title']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['category_name']; ?></h5>
                            <p class="card-text"><?php echo $post['content']; ?>
                            
                        </div>
                        <div class="card-footer">
                          
                                <li class="list-group-item">Posted By : <?php echo $post['student_name']; ?></li>
                                <li class="list-group-item">Post Time : <?php echo $post['created_at']; ?></li>
                                <?php 
                                    if($post['student_id']==$student_id){?>  
                                    <li class="list-group-item"><a href="edit-post.php?edit=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                    <a href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a></li>
                                        
                                <?php }?>
                        </div>
                </div>
            </div>
                                  
              <?php
                  }
                ?>
                <?php
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
