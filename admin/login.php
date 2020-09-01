<?php 
    session_start();
    if (isset($_SESSION['errors'])) 
    {
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
    }
    
    if(isset($_SESSION['old_data']))
    {
      $data = $_SESSION['old_data'];
      unset($_SESSION['old_data']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="login-wrapper" style=" background-image: url('assets/img/c16.jpg');background-position: center center;
        background-attachment: fixed;background-size: cover;height:100vh;" >
        
        <div class="table" style="background: rgba(0,0,0,0.55);height:100vh;">
            <div class="table-cell">
                <div class="login-box" style="width:500px;">
                    <div class="login-header">
                        <img src="assets/img/adminlogo.png" id="icon" alt="User Icon" style="height:70px;width:70px;" />
                        <h2 style="color: #585858">ADMIN LOGIN</h2>
                    </div>
                    <div class="login-body">
                        <form action="submit/login-submit.php" method="POST">
                            <div class="form-group">
                                <label for="">Email or Username</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Your Email or Username" value="<?php 
                                    if(isset($data['email'])) 
                                    {
                                        echo $data['email'];
                                    }
                                ?>">
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
                               <!-- <input type="password" name="password" class="form-control" placeholder="Enter Your Password">-->
                              
                                <input type="password" id="psw" name="password" class="form-control" placeholder="Enter Your Password" 
                                    pattern="(?=.*\d).{8,}" title="Must contain at least 8 or more characters" required value="<?php 
                                    if(isset($data['password'])) 
                                    {
                                        echo $data['password'];
                                    }
                                ?>">
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
                                <input type="submit" name="login_submit" class="btn btn-primary btn-block" value="LOGIN">
                            </div>
                            <div class="form-group" >
                                <a href="admin-registration.php" class="btn btn-secondary btn-block btn-sm" >New Admin Registration</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
  

     
</body>
</html>