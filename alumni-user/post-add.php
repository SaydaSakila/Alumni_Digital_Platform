<?php
    $page_title = 'Post Create';

    // header include
    include dirname(__FILE__).'/includes/header.php';



    //$query = "SELECT * FROM categories";
   // $categories = $db->getData($query);
?>


    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card" style="padding:10%;">
            <div class="card-header">
                <h3 style="text-align:center" class="card-title">Create Blog</h3>
                
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
                        <label for="">Title</label>
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
                        <label for="">Content</label>
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
                        <label for="">Category</label>
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
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="post_submit">Save Blog</button>
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