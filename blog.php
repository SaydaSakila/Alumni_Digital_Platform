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
        //$user_id= $_SESSION['id'];
        
        $post = $posts->fetch_assoc();
    }

?>
<div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">
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
                        <small class="text-muted">Uploaded at <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By <?php echo $post['user_name']; ?></p>
                        <p class="card-text"><?php echo $post['content']; ?></p>
                    </div>
                    <div class="card-footer">
                        <form action="" id="usrform" >                    
                                <label><h4>Leave a Comment</h4></label>
                            <textarea name="comments" id="summernote" rows="5" class="form-control"  placeholder="Enter Your  Comments"></textarea><br>
                            <input type="submit" name="submit" class="btn btn-success btn-block" value="Post">
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