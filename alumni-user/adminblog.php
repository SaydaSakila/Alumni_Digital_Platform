<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/sidebar.php';
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
<!--<div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">-->
<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container">
            <div class="row" style="padding:120px 0px;">
                <?php include dirname(__FILE__). '/includes/dashsidebar.php'; ?>
                <div class="col-sm-9 " style="background-color:#fff;width:auto;height:auto;margin-top:0px;margin-bottom:100px;">
                   
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
                                    <img src="img/avater.png" alt="Profile avater" style="width:40px;height:auto;border-radius:50%">  
                                </div>
                                <div class="col-sm-9" style="height:auto;">
                                    <textarea name="comments" rows="1" class="form-control"  placeholder="Enter Your  Comments"></textarea><br>
                                </div>
                                <div class="col-sm-2">
                                <a href="" class="btn btn-success">Comment</a>
                                    
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