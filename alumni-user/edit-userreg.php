<?php
    $page_title = 'Update User Information - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    $db = new Database();

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        //$id = $_SESSION['id'];
        
        $sql = "SELECT * from users where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();   
    }
    if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
    }
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card" style="padding:10%;">
            <div class="card-header">
                <h3 class="card-title">Edit User Information - Alumni</h3>
            </div>
            <form action="update-userreg.php" method="POST">
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
                        <label for="_name">Name</label>
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
                    <div class="form-group">
                        <label for="_email">Email</label>
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
                    <div class="form-group">
                        <label for="_username">University ID</label>
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
                    <div class="form-group">
                        <label for="_pass">Password</label>
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
                    <div class="form-group">
                        <label for="_phone">Phone</label>
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
                    <div class="form-group">
                        <label for="_address">Address</label>
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
                    <div class="form-group">
                        <label for="_batch">Batch No</label>
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
                    <div class="form-group">
                        <label for="_passingyear">Passing Year</label>
                        <input type="text" name="passingyear" id="_passingyear" class="form-control" placeholder="Update Your Passing Year Info" value="<?php 
                            if(isset($data['passingyear'])) 
                            {
                                echo $data['passingyear'];
                            }
                        ?>">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['passingyear'])) {
                                    echo $err['passingyear'];
                                }
                            ?>
                        </span>
                    </div>
                
                        <div class="form-group">
                             <label for="exampleFormControlFile1">Image file Input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                  

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="update-alu">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>