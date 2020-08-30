<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
    //admin blog
    $query2 = "SELECT posts.*, categories.name as category_name, admins.name as admin_name FROM `posts` 
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN admins ON posts.admin_id=admins.id WHERE posts.id = '$id'";
        $posts2 =  $db->conn->query($query2);
        $post = $posts2->fetch_assoc();

        //var_dump($post);die();   
    }

?>
<div class="row" style="background-color:#ddd">
    <div class="container" style="margin-top:150px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
        <div class="row" style="background-color:#fff">
            <div class="col-lg-8 offset-sm-2" style="width:auto;height:auto;margin-top:100px;margin-bottom:100px;">
                
                    <img src="img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-header">Category: 
                        <?php echo $post['category_name'];?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                        <small class="text-muted">Uploaded at <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By <?php echo $post['admin_name']; ?></p>
                        <p class="card-text"><?php echo $post['content']; ?></p>
                    </div>
                    <div class="card-footer" >
                        <label><h4>Leave Your Comment Below</h4></label>
                         <form action="" id="usrform" method="" style="display:flex;box-siziing:border-box;" >                    
                                <div class="col-sm-1">
                                    <img src="img/16303029.jpg" alt="Profile avater" style="width:40px;height:auto;border-radius:50%">  
                                </div>
                                <div class="col-sm-9" style="height:auto;">
                                    <textarea name="comments" rows="1" class="form-control"  placeholder="Enter Your  Comments"></textarea><br>
                                </div>
                                <div class="col-sm-2">
                                <a href="login.php" class="btn btn-success btn-block"  >Comment</a>
                                    
                                </div>
                        </form>
                    </div>
               
            </div>
        </div>
    </div>
</div>
            
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>