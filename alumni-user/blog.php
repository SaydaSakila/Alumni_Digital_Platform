<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        
        //$query = "SELECT * FROM uposts WHERE id='$id'";
        $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id
            WHERE uposts.id = '$id'";
        $posts =  $db->conn->query($query);
        $user_id= $_SESSION['id'];

        //$run  = $db->conn->query($posts);
        
        $post = $posts->fetch_assoc();
        
        //student blog
    $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id";
    $posts1 = $db->getData($query1);
    $student_id= $_SESSION['id'];
           // $post = $posts1->fetch_assoc();


    //admin blog
    $query2 = "SELECT posts.*, categories.name as category_name, admins.name as admin_name FROM `posts` 
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN admins ON posts.admin_id=admins.id";
    $posts2 = $db->getData($query2);
           // $post = $posts2->fetch_assoc();

        //var_dump($post);die();   
    }

 

?>


            <div class="col-lg-8 offset-sm-2" style="width:auto;height:auto;margin-top:100px;margin-bottom:100px;">
                <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="...">
                <div class="card-header">Category: 
                    <?php echo $post['category_name'];?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title'];?></h5>
                    <small class="text-muted">Uploaded at <?php /*$d=strtotime($post['created_at']);*/ echo date("d M, Y"/*,$d*/); ?> By <?php echo $post['user_name']; ?></p>
                    <p class="card-text"><?php echo $post['content']; ?></p>
                </div>
                <div class="card-footer">
                    <form action="" id="usrform" >                    

                        <input type="text" name="comment" placeholder="Enter Your Comments">
                        <input type="submit" name="submit" class="btn btn-success btn-sm" value="Post">
                    </form>
                </div>
            </div>



            <!--
            <div class="" style="backgroung-color:#333">
                <div class="row" >
                
                        <div class="col-lg-8 offset-sm-2"  >
                            <div class="card" style="width:auto;height:500px;margin-top:200px;margin-bottom:200px;" >
                                <!-- <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                                   <!-- <div class="card-header">
                                        <?php //echo $post['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php //echo $post['title'];?></h5>
                                        <p class="card-text"><?php //echo $post['content']; ?>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="blog/first.php">Read More..</a>
                                        
                                                 <?php /*echo $post['category_name']; */ 
                                                //if($post['user_id']==$user_id){?> 
                                                <a href="edit-post.php?edit=<?php //echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                                <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php //echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                           
                                                <!-- <li class="list-group-item"><?php /*$d=strtotime("created_at");*/ //echo date("d M, Y"/*,$d*/); ?> By: <?php //echo $post['user_name']; ?> </li>
                                         <li class="list-group-item">Post Time : <?php // echo $post['created_at']; ?></li>-->
                                            <?php //} ?>
                                          <!--  <li class="list-group-item"><form action="" id="usrform" >
                                                <input type="text" name="comment" placeholder="Enter Your Comments">
                                                <input type="submit" name="submit" class="btn btn-success btn-sm" value="Post">
                                            </form></li>
                                            <li class="list-group-item"><input type="text" class="form-control" name="comment"  placeholder="Enter Your Comments" />&#160;<?php /*echo $post['comments']; */?>
                                            <input type="submit" class="form-control" name="submit" class="btn btn-success" value="submit" /></li>-->
                                    <!--</div>
                            </div>
                        </div>
                        
                </div>
            </div>-->
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>