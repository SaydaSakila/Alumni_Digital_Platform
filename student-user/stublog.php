<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/sidebar.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        //student blog
    $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id WHERE sposts.id = '$id'";
    $posts1 = $db->conn->query($query1);
    $student_id= $_SESSION['id'];
     $post = $posts1->fetch_assoc();

    }

?>
 <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container">
            <div class="row" style="padding:120px 0px;">
                <?php include dirname(__FILE__). '/includes/dashsidebar.php'; ?>
                <div class="col-sm-9 " style="background-color:#fff;width:auto;height:auto;margin-top:0px;margin-bottom:100px;">
                   
                    <img src="img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-header">Category: 
                        <?php echo $post['category_name'];
                        
                            if($post['student_id']==$student_id){?>  

                            <a href="edit-post.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                            <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                
                        <?php }?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                        <small class="text-muted">Uploaded at <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By <?php echo $post['student_name']; ?></p>
                        <p class="card-text"><?php echo $post['content']; ?></p>
                    </div>
                    <div class="card-footer" >
                        <label><h4>Leave Your Comment Below</h4></label>
                        <form action="" id="usrform" style="display:flex;box-siziing:border-box;" >                    
                              <img src="img/16303029.jpg" alt="Profile avater" style="width:40px;height:auto;border-radius:50%">  
                            <textarea name="comments" rows="1" class="form-control"  placeholder="Enter Your  Comments"></textarea><br>
                            <input type="submit" name="submit" class="btn btn-success" value="Comment">
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