<?php
    $page_title = 'Update User Information - Student';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    $db = new Database();

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        //$id = $_SESSION['id'];
        
        $sql = "SELECT * from students where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();   
    }
    if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
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
            <div class="card-header" >
                <h3 class="card-title" style="text-align:center;color:#fff;">Edit User Information - Student</h3>
            </div>
                <form action="update-userreg.php" method="POST" enctype="multipart/form-data">
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
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="_name" style="color:#fff;">Name</label>
                                <input type="text" name="name" id="_name" class="form-control" placeholder="Update Your Name"
                                value="<?php 
                                    if(isset($data['name'])) 
                                    {
                                        echo $data['name'];
                                    }
                                ?>">
                                <span class="text-danger">
                                    <?php 
                                        if(isset($err['name'])) {
                                            echo $err['name'];
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="_username" style="color:#fff;">University ID</label>
                                <input type="text" name="username" id="_username" class="form-control" placeholder="Update Your University ID" value="<?php 
                                                if(isset($data['username'])) 
                                                {
                                                    echo $data['username'];
                                                }
                                            ?>">
                                <span class="text-danger">
                                    <?php 
                                        if(isset($err['username'])) {
                                            echo $err['username'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="_email" style="color:#fff;">Email</label>
                            <input type="email" name="email" id="_email" class="form-control" placeholder="Update Your Email" value="<?php 
                                if(isset($data['email'])) 
                                {
                                    echo $data['email'];
                                }
                            ?>">
                            <span class="text-danger">
                                <?php 
                                    if(isset($err['email'])) {
                                        echo $err['email'];
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="_pass" style="color:#fff;">Password</label>
                                <input type="password" name="password" id="_pass"  class="form-control" placeholder="Update Your Password" value="<?php 
                                    if(isset($data['password'])) 
                                    {
                                        echo $data['password'];
                                    }
                                ?>">
                                <span class="text-danger">
                                    <?php 
                                        if(isset($err['password'])) {
                                            echo $err['password'];
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="_phone" style="color:#fff;">Phone</label>
                                <input type="text" name="phone" id="_phone" class="form-control" placeholder="Update Your Phone Number" value="<?php 
                                    if(isset($data['phone'])) 
                                    {
                                        echo $data['phone'];
                                    }
                                ?>">
                                <span class="text-danger">
                                    <?php 
                                        if(isset($err['phone'])) {
                                            echo $err['phone'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="_address" style="color:#fff;">Address</label>
                                <input type="text" name="address" id="_address" class="form-control" placeholder="Update Your Address" value="<?php 
                                    if(isset($data['address'])) 
                                    {
                                        echo $data['address'];
                                    }
                                ?>">
                                <span class="text-danger">
                                    <?php 
                                        if(isset($err['address'])) {
                                            echo $err['address'];
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="_batch" style="color:#fff;">Batch No</label>
                                <input type="text" name="batch" id="_batch" class="form-control" placeholder="Update Your Batch Info" value="<?php 
                                    if(isset($data['batch'])) 
                                    {
                                        echo $data['batch'];
                                    }
                                ?>">
                                <span class="text-danger">
                                    <?php 
                                        if(isset($err['batch'])) {
                                            echo $err['batch'];
                                        }
                                    ?>
                                </span>
                            </div>
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
                    

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="update-stu">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>