<?php
    $page_title = 'Post Create';
    // header include
    include dirname(__FILE__).'/includes/header.php';

    $query = "SELECT * FROM categories";
    $categories = $db->getData($query);
?>


    <div class="row" style="background-image: url('assets/img/5.jpg');background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;">
        <div class="col-md-6 offset-md-3">
        <div class="container" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                            border-radius:10px;
                            opacity:0.9;">
            <div class="card-header">
                <h3 style="border:2px solid #fff; border-radius:5px; padding: 7px;text-align:center;color:#fff;" class="card-title">Create Blog</h3>
                
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
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="" style="color:#fff">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['title'])) {
                                    echo $err['title'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="" style="color:#fff">Content</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Enter Blog Content"></textarea>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['content'])) {
                                    echo $err['content'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="" style="color:#fff">Category</label>
                        <select name="category"  class="form-control">
                            <option value="">Select Category</option>
                            <?php
                                if ($categories) {
                                    while($category = $categories->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['category'])) {
                                    echo $err['category'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="alu-post_submit">Save Blog</button>
                    </div>
                    <div class="form-group ">
                        <a href="category-add.php" class="btn btn-warning" style="float:right" >Want to Add Category?</a>
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