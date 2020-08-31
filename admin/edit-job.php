<?php
    $page_title = 'Update Post ';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/sidebar.php';
   $db = new Database();
if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $sql = "SELECT * from jobs where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();

        $query = "SELECT * FROM departments";
        $departments = $db->getData($query);
        //var_dump($data);die();   
    }
    
    
   
?>

<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
                <div class="container" style="margin-top:100px;margin-bottom:70px;
                                    border-radius:10px;">
                    
                    <div class="row" >
                    <?php
                        // contents include
                        //include dirname(__FILE__). '/includes/dashsidebar.php';
                    ?>
        <div class="col-md-9 " style="background-color:#fff;">
            <div class="card-header">
                <h3 style="border:2px solid #333; border-radius:5px; padding: 7px;text-align:center;color:#333;" class="card-title">Edit Job Post </h3>
            </div>
            <form action="update-job.php" method="POST">
                <input type="hidden" name="id" value='<?php  echo $data['id']; ?>' ></input>
                <div class="card-body">
                        <?php 
                            if (isset($message['success_message'])) {
                                echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                            }
                            if (isset($message['error_message'])) {
                                echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                            }
                        ?>

                                <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Title</label>
                                            <input type="text" name="title" class="form-control" value='<?php  echo $data['title']; ?>' placeholder="Update Job Title">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['title'])) {
                                                        echo $err['title'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Experience</label>
                                            <input type="text" name="experience" class="form-control" value='<?php  echo $data['experience']; ?>' placeholder="Update Expected Job Experience">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['experience'])) {
                                                        echo $err['experience'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Company Name</label>
                                            <input type="text" name="cname" class="form-control" value='<?php  echo $data['cname']; ?>' placeholder="Update Company Name">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['cname'])) {
                                                        echo $err['cname'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Company Location</label>
                                            <input type="text" name="address" class="form-control" value='<?php  echo $data['address']; ?>' placeholder="Update Company Location">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['address'])) {
                                                        echo $err['address'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 ">
                                            <label for="" style="color:#333">Salary Range</label>
                                            <input type="text" name="salary" class="form-control" value='<?php  echo $data['salary']; ?>' placeholder="Update Salary Range">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['salary'])) {
                                                        echo $err['salary'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Working Hour </label>
                                            <input type="text" name="hour" class="form-control" value='<?php  echo $data['hour']; ?>' placeholder="Part Time / Full Time">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['hour'])) {
                                                        echo $err['hour'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Job Information</label>
                                          <!--  <input type="text" name="info" class="form-control" value='<?php  //echo $data['info']; ?>' placeholder="Update Job Information">-->
                                            <textarea name="info" rows="1" class="form-control" id="" placeholder="Update Job Information"> <?php  echo $data['info']; ?></textarea>
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['info'])) {
                                                        echo $err['info'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Educational Qualification</label>
                                            <input type="text" name="education" class="form-control" value='<?php  echo $data['education']; ?>' placeholder="Update Educational Qualification">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['education'])) {
                                                        echo $err['education'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 ">
                                            <label for="" style="color:#333">Application Deadline</label>
                                            <input type="date" name="deadline" class="form-control" value='<?php  echo $data['deadline']; ?>' placeholder="Update Application Deadline">
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['deadline'])) {
                                                        echo $err['deadline'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Department</label>
                                            <select name="department"  class="form-control">
                                                <option value="">Select Department</option>
                                                <?php
                                                    if ($departments) {
                                                        while($department = $departments->fetch_assoc()) {
                                                            ?>
                                                                
                                                                <option value="<?php echo $department['id']; ?>" <?php echo $department['id']== $data['dept_id'] ? "Selected" : "" ?> ><?php echo $department['name']; ?> </option>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                            <span class="text-danger">
                                                <?php 
                                                    if(isset($err['department'])) {
                                                        echo $err['department'];
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="job-update_post">UPDATE JOB DETAILS</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>