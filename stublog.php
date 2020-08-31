<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        //student blog
    $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id WHERE sposts.id = '$id'";
    $posts1 = $db->conn->query($query1);
    //$student_id= $_SESSION['id'];
     $post = $posts1->fetch_assoc();

    }

?>
<div class="row" style="background-color:#ddd">
    <div class="container" style="margin-top:150px;margin-bottom:50px;
                                                border-radius:10px;box-sizing: border-box;">
        <div class="row" style="background-color:#fff">
            <div class="col-lg-8 offset-sm-2" style="width:auto;height:auto;margin-top:100px;margin-bottom:100px;">
                
                    <img src="uploads/<?php if($post['photo']!= NULL){ echo $post['photo'];}else{ ?>blog.jpg <?php  } ?>"  style="width:100%;height: auto;padding:10px">
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