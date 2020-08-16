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
    <link href="csss/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="login-wrapper" style=" background-image: url('assets/img/a.jpg');  background-repeat: no-repeat;background-attachment: fixed;background-size: cover;" >
        
        <div class="table">
            <div class="table-cell">
                <div class="login-box">
                    <div class="login-header">
                        <img src="assets/img/user.png" id="icon" alt="User Icon" style="height:70px;width:70px;" />
                        <h2 style="color: #585858">ALUMNI LOGIN</h2>
                    </div>
                    <div class="login-body">
                        <form action="submit/login-submit.php" method="POST">
                            <div class="form-group">
                                <label for="">University ID</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Your University ID" value="<?php 
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
                                <input type="submit" name="alulogin_submit" class="login-btn" value="LOGIN">
                            </div>
                            <div class="form-group"  >
                                
                                <a href="alumni-registration.php" class="btn btn-primary" >New Alumni Registration</a>
                                <a href="../index.php" class="btn btn-warning" style="float:right" >Home Page</a>
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