<?php
    $page_title = 'Update Blog ';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $sql = "SELECT * from sposts where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();
        
        //var_dump($data);die();   
    }
    if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
    }
    
    $query = "SELECT * FROM categories";
    $categories = $db->getData($query);
?>

<div class="row" style="background-image: url('assets/img/3.jpg');background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;">
    <div class="col-md-6 offset-md-3">
        <div class="container" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                border-radius:10px;
                                ">
            <div class="card-header">
                <h3 style="border:2px solid #fff; border-radius:5px; padding: 7px;text-align:center;background-color:#333;color:#fff" class="card-title">Edit Blog </h3>
            </div>
            <form action="update-post.php" method="POST">
            <input type="hidden" name="id" value='<?php  echo $data['id']; ?>' ></input>
                <div class="card-body">
                    <?php 
                        if (isset($message['success_message'])) {
                            echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                        }
                        if (isset($message['error_message'])) {
                            echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                        }
                    ?>

                   <div class="form-group">
                        <label for="" style="color:#fff">Title</label>
                        <input type="text" name="title" class="form-control" value='<?php  echo $data['title']; ?>' placeholder="Update Blog Title">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['title'])) {
                                    echo $err['title'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group" style="background-color:#fff;">
                        <label for="" style="color:#333">Content</label>
                        <textarea name="content" rows="5" class="form-control" id="summernote" placeholder="Update Blog Content"> <?php  echo $data['content']; ?></textarea>
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
                            <option >Select Category</option>
                            <?php
                                if ($categories) {
                                    while($category = $categories->fetch_assoc()) {
                                        ?>

                                            <option value="<?php echo $category['id']; ?>" <?php echo $category['id']== $data['category_id'] ? "Selected" : "" ?> ><?php echo $category['name']; ?> </option>
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
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="stu-update_post">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>