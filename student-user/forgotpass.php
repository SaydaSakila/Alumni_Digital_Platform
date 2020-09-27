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
            <title>Login</title>
                <meta charset="utf-8">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                
                <style>
                    body{
                        background-image: url(img/c16.jpg);
                        background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;

                    }
                    .sakila{
                        background: rgba(0,0,0,0.55);
                        height: 100vh;

                    }
                    #ui{
                        background-color:#fff;
                        padding:30px;
                        margin-top:80px;
                        border-radius:10px;
                        
                    }
                    #ui label,h1{
                        color:#fff;
                    }
                    .center {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 50%;
                        }
                </style>
        </head>
    <body>
<div class="sakila">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6"> 
                    <div id="ui">
                    <img src="img/stuavater.png" id="icon" alt="User Icon" class="center" style="height:70px;width:70px;" />
                    <!--<h1 class="text-center" style="color:#000;">Forgot Password</h1>-->
                        <form action="submit/forgot-submit.php" method="POST" class="form-group ">
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                            ?>
                            <div class="form" style="margin-top:20px;">
                                <div class="form-group text-center"><h5>You forgot your password? Here you can easily retrieve a new password.</h5></div>
                                <div class="form-group">
                                
                                    <label for="" style="color:#000;">Email Address</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?php 
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
                            <a href="recoverpass.php?edit=<?php echo $id; ?>">
                                <input type="submit"  name="forgot_submit" class="btn btn-primary btn-block " value="Request New Password" ></a>
                            </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                    <a href="stulogin.php" style="float:left">Student Login</a>
                                        <a href="sturegistration.php"  style="float:left">Student Registration</a> 

                                    </div>
                                
                                    <div class="form-group col-lg-6">
                                        <a href="../index.php" class="btn btn-warning btn-sm" style="float:right" >Home Page</a>
                                    </div>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"> </div>
            </div>
        
        </div>
</div>
       <script>
            function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }
        </script>
        <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <!-- Popper JS -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
