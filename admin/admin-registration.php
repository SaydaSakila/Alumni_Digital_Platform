
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
    <title>Registration</title>
    <link href="assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="login-wrapper" style=" background-image: url('assets/img/a.jpg');  background-repeat: no-repeat;background-attachment: fixed;
        background-size: cover;background-position: center center;">
        <div class="table">
            <div class="table-cell">
                
                    <div class="login-box" style="width:50%">
                        <div class="login-header">
                        
                            <h4 style="color: #585858"><img src="assets/img/registration.png" id="icon" alt="User Icon" 
                            style="height:25px;width:25px;" />ADMIN REGISTRATION</h4>
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
                                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php 
                                            if(isset($data['name'])) 
                                            {
                                                echo $data['name'];
                                            }
                                        ?>">
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
                                    <input type="text" name="username" class="form-control" placeholder="Enter Your Username" value="<?php 
                                        if(isset($data['username'])) 
                                        {
                                            echo $data['username'];
                                        }
                                    ?>">
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
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php 
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
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="confpassword" class="form-control" placeholder="Confirm Your Password" value="<?php 
                                        if(isset($data['confpassword'])) 
                                        {
                                            echo $data['confpassword'];
                                        }
                                    ?>">
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
                                    <input type="submit"  name="registration_submit" class="btn btn-primary btn-block" value="REGISTRATION" >
                                </div>
                                <div class="form-group"  >
                                    
                                    <a href="login.php" class="btn btn-secondary btn-block" >Login as Admin</a>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>    
    <script>
        var myInput = document.getElementById("psw");

        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() 
        {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() 
        {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() 
        {
 
            // Validate length
            if(myInput.value.length >= 8) 
            {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } 
            else 
            {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script> 
</body>
</html>

