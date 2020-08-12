<?php 
    session_start();
    if (isset($_SESSION['errors'])) 
    {
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/css/login.css" rel="stylesheet">

</head>
<body>
    <div class="login-wrapper" style=" background-image: url('assets/img/a.jpg');  background-repeat: no-repeat;background-attachment: fixed;background-size: cover;" >
        
        <div class="table">
            <div class="table-cell">
                <div class="login-box">
                    <div class="login-header">
                        <img src="assets/img/adminlogo.png" id="icon" alt="User Icon" style="height:70px;width:70px;" />
                        <h2 style="color: #585858">ADMIN LOGIN</h2>
                    </div>
                    <div class="login-body">
                        <form action="submit/login-submit.php" method="POST">
                            <div class="form-group">
                                <label for="">Email or Username</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Your Email or Username">
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
                                <input type="submit" name="login_submit" class="login-btn" value="LOGIN">
                            </div>
                            <div class="form-group" style="text-align:center; border:2px solid #5c5c5e;border-radius:10px;" >
                                
                                <a href="admin-registration.php" class="btn btn-primary btn-lg active" >New Admin Registration?</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>