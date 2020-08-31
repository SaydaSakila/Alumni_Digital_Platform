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
         $query = "SELECT * FROM batches";
        $batches = $db->getData($query);
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
                        background-image: url(img/aa5.jpg);
                        background-size: cover;
                        background-position: center center;
                        background-attachment: fixed;

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
                    #ui label{
                        color:#000;
                    }
                    #ui h3{
                        color:#000;
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
                <div class="col-lg-2"> </div>
                <div class="col-lg-8"> 
                    <div id="ui">
                    <img src="img/stuavater.png" id="icon" alt="User Icon" class="center" style="height:70px;width:70px;" />
                    <h3 class="text-center">STUDENT REGISTRATION</h3>
                        <form action="submit/sturegister-submit.php" method="POST" class="form-group ">
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success " role="alert">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                              
                            ?>
                        <div class="form" style="margin-top:20px;">
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
                            <div class="row">
                                <div class="form-group col-lg-6">
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
                                <div class="form-group col-lg-6">
                                    <label for="" style="color:#fff">Department</label>
                                    <select name="department"  class="form-control">
                                        <option value="">Select Department</option>
                                        <?php
                                            if ($departments) {
                                                while($department = $departments->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $department['id']; ?>"><?php echo $department['name']; ?></option>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                    <span class="text-danger">
                                        <?php 
                                            if(isset($errors['department'])) {
                                                echo $errors['department'];
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">Password</label>
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
                                <div class="form-group ">

                                     <label for="" >Batch</label>
                                        <select name="batch"  class="form-control">
                                            <option value="">Select Batch</option>
                                            <?php
                                                if ($batches) {
                                                    while($batch = $batches->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $batch['id']; ?>"><?php echo $batch['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <span class="text-danger">
                                            <?php 
                                                if(isset($err['batch'])) {
                                                    echo $err['batch'];
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div>                            
                           
                                <input type="submit"  name="studentregistration_submit" class="btn btn-success btn-block btn-lg" value="REGISTRATION" ><br>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <a href="stulogin.php" class="btn btn-primary " style="float:left">Login as Student</a> 
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <a href="../index.php" class="btn btn-warning" style="float:right" >Home Page</a>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"> </div>
            </div>
        
        </div>

      

    </body>
</html>
