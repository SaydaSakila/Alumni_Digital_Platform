<?php
    $page_title = 'Post Create';
    // header include
    include dirname(__FILE__).'/includes/header.php';
    $query = "SELECT * FROM batches";
        $batches = $db->getData($query);
         $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
?>


<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
                <div class="container" style="margin-top:100px;margin-bottom:70px;
                                    border-radius:10px;">
                    
                    <div class="row" >
                    <?php
                        // contents include
                        include dirname(__FILE__). '/includes/dashsidebar.php';
                    ?>
                        <div class="col-md-9 " style="background-color:#333;">
                    <div class="card-header">
                        <h3 style="border:2px solid #fff; border-radius:5px; padding: 7px;text-align:center;color:#fff;" class="card-title">Create Event</h3>
                        <div class="card-header-action">
                            <a href="myevents.php" class="btn btn-success">Event List</a>
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
                            <form action="submit/event-add-submit.php" method="POST" style="background-color:#fff;">
                                <div class="form-group" >
                                    <label for="" style="color:#333;">Event Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Event Name">
                                    <span class="text-danger">
                                        <?php 
                                            if(isset($err['name'])) {
                                                echo $err['name'];
                                            }
                                        ?>
                                    </span>
                                </div>

                                <div class="form-group" >
                                    <label for="" style="color:#333;">Event Details</label>
                                    <textarea name="content"  id="summernote" rows="5" class="form-control"  placeholder="Enter Event Information"></textarea>
                                    <span class="text-danger">
                                        <?php 
                                            if(isset($err['content'])) {
                                                echo $err['content'];
                                            }
                                        ?>
                                    </span>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1" style="color:#333;">Enter Event Date</label>
                                    <input type="datetime-local" name="date" class="form-control-file" id="exampleFormControlFile1">
                                    <span class="text-danger">
                                        <?php 
                                            if(isset($err['date'])) {
                                                echo $err['date'];
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-group ">
                                    <label for="" style="color:#000;">Batch</label>
                                        <select name="batch[]"  class="form-control">
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
                                 <div class="form-group">
                                        <label for="" style="color:#000;">Department</label>
                                        <select name="department[]"  class="form-control">
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
                                

                                <div class="form-group">
                                    <button class="btn btn-success btn-lg btn-block" type="submit" name="eventpost_submit">Publish Event</button>
                                </div>
                                
                            </form>

                        </div>
                    </div>
            </div>
    </div>


<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>