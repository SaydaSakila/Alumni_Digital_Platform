<?php 

include dirname(__FILE__).'/../database/database.php';
 $db = new Database();
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
    $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
        

?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Registration</title>
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
                        padding-left:30px;
                        padding-right:30px;
                        padding-top:30px;
                        padding-bottom:2px;
                        margin-top:40px;
                        border-radius:10px;
                        
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
<div class="sakila">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-3"> </div>
                <div class="col-lg-6" style="margin-top:40px;"> 
                    <div id="ui">
                        <img src="img/stuavater.png" id="icon" alt="User Icon" class="center" style="height:70px;width:70px;" />
                       <!-- <h3 class="text-center" style="color:#000;">ALUMNI REGISTRATION</h3>-->
                        <form action="submit/recover-submit.php" method="POST" class="form-group ">
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                              
                            ?>

                        <div class="form" style="margin-top:20px;">
                           
                             <div class="form-group text-center" style="padding:10px;"><h5>You are only one step a way from your new password, recover your password now.</h5></div>

                                <div class="form-group ">
                                    <label for="" style="color:#000;">Password</label>
                                    <!-- <input type="password" name="password" class="form-control" placeholder="Enter Your Password">-->
                                    <input type="password" id="psw" name="password" class="form-control" placeholder="Enter Your Password" 
                                        value="<?php 
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
                                <div class="form-group ">
                                    <label for="" style="color:#000;">Confirm Password</label>
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
                           
                                <input type="submit"  name="recover_submit" class="btn btn-primary btn-block" value="Change Password" ><br>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <a href="stulogin.php"  style="float:left">Student Login</a> 
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <a href="../index.php" class="btn btn-warning btn-sm" style="float:right" >Home Page</a>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"> </div>
            </div>
        
        </div>
</div>
        <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <!-- Popper JS -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </body>
</html>
