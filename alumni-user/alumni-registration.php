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
            <title>Registration</title>
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
                        background-image: url(assets/img/a.jpg);
                        background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;

                    }
                    #ui{
                        background-color:#333;
                        padding-left:30px;
                        padding-right:30px;
                        padding-top:30px;
                        padding-bottom:2px;
                        margin-top:40px;
                        border-radius:10px;
                        opacity:0.9;
                    }
                    #ui label,h3{
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
                <div class="col-lg-6"> 
                    <div id="ui">
                        <img src="img/avater.png" id="icon" alt="User Icon" class="center" style="height:70px;width:70px;" />
                        <h3 class="text-center">ALUMNI REGISTRATION</h3>
                        <form action="submit/alu-register-submit.php" method="POST" class="form-group ">
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                              
                            ?>
                            <div class="row">
                            
                                <div class="col-lg-6">
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
                                <div class="form-group col-lg-6">
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
                            <div class="row">
                                <div class="form-group col-lg-6">
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
                                <div class="form-group col-lg-6">
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
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="_batch">Batch</label>
                                    <input type="text" name="batch" id="_batch" class="form-control" placeholder="Enter Batch" value="<?php 
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
                                <div class="form-group col-lg-6">
                                    <label for="_passingyear">Passing Year</label>
                                    <input type="text" name="passingyear" id="_passingyear" class="form-control" placeholder="Enter Passing Year" value="<?php 
                                                if(isset($data['passingyear'])) 
                                                {
                                                    echo $data['passingyear'];
                                                }
                                    ?>">
                                    <span class="text-danger">
                                        <?php 
                                            if(isset($err['passingyear'])) {
                                                echo $err['passingyear'];
                                            }
                                        ?>
                                    </span><br>
                                </div>
                            </div>
                           
                                <input type="submit"  name="alumniregistration_submit" class="btn btn-success btn-block btn-lg" value="REGISTRATION" ><br>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <a href="login.php" class="btn btn-primary " style="float:left">Login as Alumni</a> 
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <a href="../index.php" class="btn btn-warning" style="float:right" >Home Page</a>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"> </div>
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
