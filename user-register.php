<?php
    $page_title = 'Create User';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
       $db = new Database();

   /*if(isset($_GET['user'])){
        $id=$_GET['user'];
        
        $sql = "SELECT * from users where id='$id'";
        $user = mysqli_fetch_assoc($db->conn->query($sql));
        //var_dump($data);
 
    }*/
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New User</h3>
            </div>
            <form action="submit/register-submit.php" method="POST">
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
                        <input type="text" name="name" id="_name" value='<?php /* echo $user['name'];*/ ?>' class="form-control" placeholder="Enter Name">
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
                        <input type="email" name="email" id="_email" class="form-control" placeholder="Enter Email">
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
                        <input type="text" name="username" id="_username" class="form-control" placeholder="Enter Username">
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
                        <input type="password" name="password" id="_pass" class="form-control" placeholder="Enter Password">
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
                        <input type="text" name="phone" id="_phone" class="form-control" placeholder="Enter Phone Number">
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
                        <input type="text" name="address" id="_address" class="form-control" placeholder="Enter Address">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['address'])) {
                                    echo $err['address'];
                                }
                            ?>
                        </span>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="register_submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>