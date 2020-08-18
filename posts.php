<?php
    $page_title = 'Blog List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id";
    $posts = $db->getData($query);
    //$user_id= $_SESSION['id'];

    
?>

    <div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">
        <div class="col" style="margin-top:150px;margin-left:50px;margin-right:30px;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
            <!--<div class="" style="margin-top:100px;margin-left:20px;margin-right:0px;margin-bottom:70px;
                                    border-radius:10px;box-sizing: border-box;">-->
                <div class="card-header">
                    <h3 style="border:2px solid #fff;color:#fff; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Blog List</b></h3>
                    <div class="card-header-action">
                        <a href="alumni-user/login.php" class="btn btn-success">Add New Blog</a>
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
                        <div class="container">
                            <div class="row" >
                                
                                <?php
                                    if ($posts) 
                                    {
                                        while($post = $posts->fetch_assoc()) 
                                        {
                                ?>
                                    <div class="column">
                                            <div class="col-lg-4 col-md-6" style="width: 100%;display: block;margin-bottom: 20px;float: left;padding: 0 10px;">
                                                <div class="card text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);padding:16px;text-align: center;background-color: #f1f1f1;" >
                                                    <img src="..." class="card-img-top" alt="Card Image">
                                                    <div class="card-header">
                                                        <?php echo $post['title']; ?>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $post['category_name']; ?></h5>
                                                        <p class="card-text"><?php echo $post['content']; ?>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Posted By : <?php echo $post['user_name']; ?></li>
                                                            <li class="list-group-item">Post Time : <?php echo $post['created_at']; ?></li>
                                                        </ul>
                                                    </div>
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

                </div>
            <!--</div>-->
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
