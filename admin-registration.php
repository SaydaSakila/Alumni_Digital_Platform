
<?php 
    session_start();
    if (isset($_SESSION['errors'])) 
    {
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
    }
    if(isset($_SESSION['success']))
    {
      $message = $_SESSION['success'];
      unset($_SESSION['success']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="assets/css/login.css" rel="stylesheet">

</head>
<body>
    <div class="login-wrapper" style=" background-image: url('assets/img/a.jpg');  background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <div class="table">
            <div class="table-cell">
                <div class="login-box">
                    <div class="login-header">
                     <img src="assets/img/registration.png" id="icon" alt="User Icon" style="height:70px;width:70px;" />
                        <h2 style="color: #585858">ADMIN REGISTRATION</h2>
                    </div>
                    <div class="login-body">
                        <form action="submit/admin-registration-submit.php" method="POST">
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
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                <span class = "text-danger">
                                <?php 
                                     if(isset($errors['name'])) 
                                    {
                                        echo $errors['name'];
                                    }
                                ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
                                <span class = "text-danger">
                                <?php 
                                     if(isset($errors['username'])) 
                                    {
                                        echo $errors['username'];
                                    }
                                ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                <span class = "text-danger">
                                <?php 
                                     if(isset($errors['email'])) 
                                    {
                                        echo $errors['email'];
                                    }
                                ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                                <span class = "text-danger">
                                <?php 
                                    if(isset($errors['password'])) 
                                    {
                                        echo $errors['password'];
                                    }
                                ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confpassword" class="form-control" placeholder="Confirm Your Password">
                                <span class = "text-danger">
                                <?php 
                                    if(isset($errors['confpassword'])) 
                                    {
                                        echo $errors['confpassword'];
                                    }
                                ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="submit"  name="registration_submit" class="login-btn" value="REGISTRATION" >
                            </div>
                            <div class="form-group" style="text-align:center; border:2px solid #5c5c5e;border-radius:10px;" >
                                
                                <p>Already have an Account?<a href="login.php" class="btn btn-primary btn-lg active" >Login Here</a></p>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>

