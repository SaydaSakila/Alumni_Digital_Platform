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
            <title>Login</title>
                <meta charset="utf-8">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <!-- Popper JS -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <style>
                   body{
                        background-image: url(img/a.jpg);
                        background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;

                    }
                    #ui{
                        background-color:#333;
                        padding:30px;
                        margin-top:80px;
                        border-radius:10px;
                        opacity:0.9;
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

        <div class="container">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-sm-6"> 
                    <div id="ui">
                    <img src="img/stuavater.png" id="icon" alt="User Icon" class="center" style="height:70px;width:70px;" />
                    <div class="row " style="display:flex;text-align:center;padding-left:30px"> 
                        <h3 class="text-center" style="color:#fff;text-align:center;">STUDENT LOGIN |</h3>
                        <h3 class="text-center inactive" style="color:#fff;"><a href="login.php"> | ALUMNI LOGIN</a></h3>
                    </div>
                        <form action="submit/stulogin-submit.php" method="POST" class="form-group ">
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                              
                            ?>
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
                                    </span><br>
                                </div>
                                <input type="submit"  name="istulogin_submit" class="btn btn-success btn-block btn-lg" value="LOGIN" ><br>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <a href="student-user/sturegistration.php" class="btn btn-primary " style="float:left">New Student Registration</a> 
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <a href="index.php" class="btn btn-warning" style="float:right" >Home Page</a>
                                </div>
                            </div>
                          
                        </form>
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
