<?php
    $page_title = 'Post Create';
    // header include
    include dirname(__FILE__).'/includes/header.php';
    // contents include
   // include dirname(__FILE__). '/includes/sidebar.php';
    if (isset($_SESSION['file_errors'])) {
        $file_err = $_SESSION['file_errors'];
        unset($_SESSION['file_errors']);
    }
   
?>


<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
                <div class="container" style="margin-top:100px;margin-bottom:70px;
                                    border-radius:10px;">
                    
                    <div class="row" >
                    <?php
                        // contents include
                        include dirname(__FILE__). '/includes/dashsidebar.php';
                    ?>
                        <div class="col-md-9 " style="background-color:#333;">
                    <div class="card-header">
                        <h3 style="border:2px solid #fff; border-radius:5px; padding: 7px;text-align:center;color:#fff;" class="card-title">Create Image Gallery</h3>
                        <div class="card-header-action">
                            <a href="gallery.php" class="btn btn-success">Photo List</a>
                        </div>
                    </div>
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                            ?>
                            <form action="submit/image-add-submit.php" method="POST" enctype="multipart/form-data">
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
                                <label for="exampleFormControlFile1" style="color:#fff;">Image file Input</label>
                                <input type="file" class="form-control-file" name='image' id="exampleFormControlFile1">
                                <span class="text-danger">
                                    <?php 
                                    if(isset($file_err)) {
                                        echo implode(' | ', $file_err);
                                    }
                                    if(isset($err['file_error'])) {
                                        $err['file_error'];
                                    }
                                    ?>
                                </span>
                            </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-lg btn-block" type="submit" name="image_submit">Save Image</button>
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