<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/dashsidebar.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        
        //$query = "SELECT * FROM uposts WHERE id='$id'";
        $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id
            WHERE uposts.id = '$id'";
        $posts =  $db->conn->query($query);
        $post = $posts->fetch_assoc();

       // $posts1 = $db->getData($query);

        $user_id= $_SESSION['id'];
        $query1 = "SELECT * FROM categories";
        $categories = $db->getData($query1);

    }
?>
 <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container">
            <div class="row" style="padding:120px 0px;">
                <?php include dirname(__FILE__). '/includes/dashsidebar.php'; ?>
                <div class="col-sm-8 " style="background-color:#fff;width:auto;height:auto;margin-top:0px;margin-bottom:100px;">
                    
                    
                    <div class="card-footer" >
                        <label><h4>Leave Your Comment Below</h4></label>
                         <form action="submit/comment-submit.php" method="POST" id="usrform" style="display:flex;box-sizing:border-box;" > 
                                <?php 
                                    if (isset($message['success_message'])) {
                                        echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                    }
                                    if (isset($message['error_message'])) {
                                        echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                    }
                                
                                ?>
                         <input type="hidden" name="id" value='<?php  echo $post['id']; ?>' ></input>                   
                            <div class="container">
                                <div class="flex" style="display:flex;">
                                    <div class="col-sm-1">
                                        <img src="img/avater.png" alt="Profile avater" style="width:40px;height:auto;border-radius:50%">  
                                    </div>
                                    <div class="col-sm-11" style="height:auto;">
                                        <textarea name="comment" rows="5" class="form-control"  placeholder="Enter Your  Comments"></textarea>
                                        <span class="text-danger">
                                        <?php 
                                            if(isset($err['comment'])) {
                                                echo $err['comment'];
                                            }
                                        ?>
                                    </span><br>
                                    </div>
                                </div>
                                <div class="footer">
                                    <p style="float: right;margin-right:15px;"><a href="" class="btn btn-success" name="comment_submit">Comment</a></p>
                                </div>
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