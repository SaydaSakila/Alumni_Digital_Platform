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
                <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <div class="col-sm-6"> 
                    <div id="ui">
                    <img src="img/avater.png" id="icon" alt="User Icon" class="center" style="height:70px;width:70px;" />
                   <div class="row " style="display:flex;text-align:center;padding-left:30px"> 
                        <h3 class="text-center" style="color:#000;text-align:center;">ALUMNI LOGIN |</h3>
                        <h3 class="text-center inactive" style="color:#fff;"><a href="stulogin.php"> | STUDENT LOGIN</a></h3>
                    </div>
                    <div class="form">
                        <form action="submit/login-submit.php" method="POST" class="form-group ">
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                              
                            ?>
                            <div class="form" style="margin-top:20px;">
                            <div class="form-group">
                               
                                <label for="" style="color:#000;">University ID</label><br>
                                
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
                                    <label for="" style="color:#000;">Password</label>
                                    <!-- <input type="password" name="password" class="form-control" placeholder="Enter Your Password">-->
                                    
                                    <input type="password" id="myInput" name="password" class="form-control" placeholder="Enter Your Password" 
                                          value="<?php 
                                        if(isset($data['password'])) 
                                        {
                                            echo $data['password'];
                                        }
                                    ?>"><input type="checkbox" onclick="myFunction()" > Show Password
                                    
                                    <span class = "text-danger">
                                        <?php 
                                        if(isset($errors['password'])) 
                                        {
                                            echo $errors['password'];
                                        }
                                        ?>
                                    </span><br>
                            </div>
                            </div>
                                <input type="submit"  name="ialulogin_submit" class="btn btn-success btn-block btn-lg" value="LOGIN" ><br>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <a href="alumni-user/alumni-registration.php" class="btn btn-primary btn-sm" style="float:left">New Alumni Registration</a> 
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <a href="index.php" class="btn btn-warning btn-sm" style="float:right" >Home Page</a>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
                
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
