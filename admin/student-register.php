<?php
    $page_title = 'Create User - Student';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
       $db = new Database();
    
    if(isset($_SESSION['old_data']))
    {
      $data = $_SESSION['old_data'];
      unset($_SESSION['old_data']);
    }
   $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New User - Student</h3>
            </div>
            <form action="submit/sturegister-submit.php" method="POST">
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
                        <input type="text" name="name" id="_name" class="form-control" placeholder="Enter Student Name" value="<?php 
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
                        <input type="email" name="email" id="_email" class="form-control" placeholder="Enter Student Email" value="<?php 
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
                        <label for="_username">Username</label>
                        <input type="text" name="username" id="_username" class="form-control" placeholder="Enter Student Username" value="<?php 
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
                                        <label for="" >Department</label>
                                        <select name="department"  class="form-control">
                                            <option value="">Select Department</option>
                                            <?php
                                                if ($departments) {
                                                    while($department = $departments->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $department['id']; ?>"><?php echo $department['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <span class="text-danger">
                                            <?php 
                                                if(isset($err['department'])) {
                                                    echo $err['department'];
                                                }
                                            ?>
                                        </span>
                                    </div>
                    
                    <div class="form-group">
                        <label for="_pass">Password</label>
                        <input type="password" name="password" id="_pass" class="form-control" placeholder="Enter Student Password" value="<?php 
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
                        <input type="text" name="phone" id="_phone" class="form-control" placeholder="Enter Student Phone Number" value="<?php 
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
                        <input type="text" name="address" id="_address" class="form-control" placeholder="Enter Student Address" value="<?php 
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
                        <label for="_batch">Batch</label>
                        <input type="text" name="batch" id="_batch" class="form-control" placeholder="Enter Student Batch" value="<?php 
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="studentregister_submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>