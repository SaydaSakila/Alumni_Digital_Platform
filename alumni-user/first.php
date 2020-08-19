<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
                LEFT JOIN categories ON uposts.category_id=categories.id 
                LEFT JOIN users ON uposts.user_id=users.id ORDER BY id DESC";
        $posts = $db->getData($query);
        $user_id= $_SESSION['id'];
        $run  = $db->conn->query($posts);
        $post = $run->fetch_assoc();
        
        //var_dump($data);die();   
    }
    
?>
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

            <div class="col-lg-8 offset-sm-2" style="width:auto;height:auto;margin-top:100px;margin-bottom:100px;">
                <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<br><bbr>
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago <?php /*$d=strtotime("created_at");*/ echo date("d M, Y"/*,$d*/); ?></small></p>
                </div>
                <div class="card-footer">
                    <form action="" id="usrform" >
                        <input type="text" name="comment" placeholder="Enter Your Comments">
                        <input type="submit" name="submit" class="btn btn-success btn-sm" value="Post">
                    </form>
                </div>
            </div>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>