<?php
    $page_title = 'Update User Information - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    $db = new Database();
if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $sql = "SELECT * from users where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();   
    }
    
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit User Information - Alumni</h3>
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
                    
                    <div class="form-group">
                        <label for="_name">Name</label>
                        <input type="text" name="name" id="_name" value='<?php  echo $data['name']; ?>' class="form-control" placeholder="Update Your Name">
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
                        <input type="email" name="email" id="_email" value='<?php  echo $data['email']; ?>' class="form-control" placeholder="Update Your Email">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['email'])) {
                                    echo $err['email'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_username">Username</label>
                        <input type="text" name="username" id="_username"  value='<?php  echo $data['username']; ?>' class="form-control" placeholder="Update Your Username">
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
                        <input type="password" name="password" id="_pass" value='<?php  echo $data['password']; ?>' class="form-control" placeholder="Update Your Password">
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
                        <input type="text" name="phone" id="_phone" value='<?php  echo $data['phone']; ?>' class="form-control" placeholder="Update Your Phone Number">
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
                        <input type="text" name="address" id="_address" value='<?php  echo $data['address']; ?>' class="form-control" placeholder="Update Your Address">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['address'])) {
                                    echo $err['address'];
                                }
                            ?>
                        </span>
                    </div>
                    
                    <div class="form-group">
                        <label for="_passingyear">Passing Year</label>
                        <input type="text" name="passingyear" id="_passingyear" value='<?php  echo $data['passingyear']; ?>' class="form-control" placeholder="Update Your Passing Year Info">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['passingyear'])) {
                                    echo $err['passingyear'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_cname">Company Name</label>
                        <input type="text" name="cname" id="_cname" value='<?php  echo $data['cname']; ?>' class="form-control" placeholder="Update Your Job Location">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['cname'])) {
                                    echo $err['cname'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_jposition">Job Title</label>
                        <input type="text" name="jposition" id="_jposition" value='<?php  echo $data['jposition']; ?>' class="form-control" placeholder="Update Your Job Position">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['jposition'])) {
                                    echo $err['jposition'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_fb">Facebook Profile</label>
                        <input type="text" name="fb" id="_fb" value='<?php  echo $data['fb']; ?>' class="form-control" placeholder="Update Your FB id">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['fb'])) {
                                    echo $err['fb'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_link">Linkedin Profile</label>
                        <input type="text" name="link" id="_link" value='<?php  echo $data['link']; ?>' class="form-control" placeholder="Update Your Linkedin id">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['link'])) {
                                    echo $err['link'];
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
                  

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="update">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>