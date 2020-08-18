<?php
    $page_title = 'Category Create';
    // header include
    include dirname(__FILE__). '/includes/header.php';
     $db = new Database();

    if(isset($_SESSION['old_data']))
    {
      $data = $_SESSION['old_data'];
      unset($_SESSION['old_data']);
    }
?>

    <div class="row" style="background-image: url('assets/img/3.jpg');background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;">
    
        <div class="col-md-6 offset-md-3">
            <div class="container" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                            border-radius:10px;
                            opacity:0.9;">
                <div class="card-header">
                    <h3 style="border:2px solid #fff; border-radius:5px; padding: 7px; color:#fff;text-align:center;" class="card-title">Create Category</h3>
                    
                </div>
                <div class="card-body">
                    <?php 
                        if (isset($message['success_message'])) {
                            echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                        }
                        if (isset($message['error_message'])) {
                            echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                        }
                    ?>
                    <form action="submit/category-add-submit.php" method="POST">
                        <div class="form-group">
                            <label for="" style="color:#fff">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Category name">
                            <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-lg btn-block" type="submit" name="stu-category_submit">Save Category</button>
                        </div>
                        <div class="form-group ">
                            <a href="post-add.php" class="btn btn-warning" style="float:right" >Want to Post Blog?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>