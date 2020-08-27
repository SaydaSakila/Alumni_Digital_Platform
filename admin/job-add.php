<?php
    $page_title = 'Post Create';
    // header include
    include dirname(__FILE__).'/includes/header.php';
    // contents include
   // include dirname(__FILE__). '/includes/sidebar.php';

    $query = "SELECT * FROM departments";
        $departments = $db->getData($query);
?>


<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
                <div class="container" style="margin-bottom:10px;
                                    border-radius:10px;">
                    
                    <div class="row" >
                    <?php
                        // contents include
                        //include dirname(__FILE__). '/includes/dashsidebar.php';
                    ?>
                        <div class="col-md-9 " style="background-color:#fff;">
                            <div class="card-header">
                                <h3 style="border:2px solid #333; border-radius:5px; padding: 7px;text-align:center;color:#333;" class="card-title">Create Job Circular</h3>
                                <div class="card-header-action">
                                    <a href="jobboard.php" class="btn btn-success">New Job List</a>
                                </div>
                            </div>
                            <?php 
                                if (isset($message['success_message'])) {
                                    echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                                }
                                if (isset($message['error_message'])) {
                                    echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                                }
                            ?>
                            <div class="col-md-12" style="padding:20px;">
                                <form action="submit/job-add-submit.php" method="POST">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="" style="color:#333">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Job Title">
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
                                            <input type="text" name="experience" class="form-control" placeholder="Enter Expected Job Experience">
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
                                            <input type="text" name="cname" class="form-control" placeholder="Enter Company Name">
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
                                            <input type="text" name="address" class="form-control" placeholder="Enter Company Location">
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
                                            <input type="text" name="salary" class="form-control" placeholder="Enter Salary Range">
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
                                            <input type="text" name="hour" class="form-control" placeholder="Part Time / Full Time">
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
                                           <!-- <input type="text" name="info" class="form-control" placeholder="Enter Job Information">-->
                                            <textarea name="info" id="" rows="1" class="form-control"  placeholder="Enter Job Information"></textarea>
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
                                            <input type="text" name="education" class="form-control" placeholder="Enter Educational Qualification">
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
                                            <input type="date" name="deadline" class="form-control" placeholder="Enter Application Deadline">
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
                                                                <option value="<?php echo $department['id']; ?>"><?php echo $department['name']; ?></option>
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
                                    <div class="form-group"><br>
                                        <button class="btn btn-success btn-lg btn-block" type="submit" name="job-post_submit">Post This Job</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
    </div>


<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>