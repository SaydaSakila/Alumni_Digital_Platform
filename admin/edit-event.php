<?php
    $page_title = 'Update Event Information';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();
if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $sql = "SELECT * from events where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();   
         $query = "SELECT * FROM batches";
        $batches = $db->getData($query);
         $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);
    }
    
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Event Information</h3>
            </div>
            <form action="update-event.php" method="POST">
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
                    
                   
                    <div class="form-group">
                        <label for="" >Event Name</label>
                        <input type="text" name="name" class="form-control" value='<?php  echo $data['name']; ?>' placeholder="Update Event Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group" >
                        <label for="" >Event Details</label>
                        <textarea name="content"  rows="5"  class="form-control"  placeholder="Update Event Information"> <?php  echo $data['content']; ?></textarea>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['content'])) {
                                    echo $err['content'];
                                }
                            ?>
                        </span>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" >Update Event Date</label>
                        <input type="date" name="date" value="<?php echo database_date_formatted($data['date']); ?>" class="form-control-file" id="exampleFormControlFile1">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['date'])) {
                                    echo $err['date'];
                                }
                            ?>
                        </span>
                    </div>
                    <?php  
                        $ids = json_decode($data['batch_id']); 
                    ?>
                   <div class="form-group ">
                        <label for="" style="color:#000;">Mark Batch</label>
                            <select name="batch[]"class="select2 form-control"  multiple="multiple" data-placeholder="Select Batch" style="width: 100%;">
                                
                                <?php
                                     if ($batches) {
                                         while($batch = $batches->fetch_assoc()) {
                                         ?>
                                             <option value="<?php echo $batch['id']; ?>" <?php echo in_array($batch['id'], $ids) ? "selected" : ""; ?>><?php echo $batch['name']; ?></option>
                                                
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
                    <?php  
                         $ids = json_decode($data['dept_id']); 
                    ?>
                    <div class="form-group">
                        <label for="" style="color:#000;">Mark Department</label>
                        <select name="department[]"  class="select2 form-control"  multiple="multiple" data-placeholder="Select Department" style="width: 100%;">
                            
                            <?php
                                 if ($departments) {
                                     while($department = $departments->fetch_assoc()) {
                                         ?>
                                             <option value="<?php echo $department['id']; ?>" <?php echo in_array($department['id'], $ids) ? "selected" : ""; ?>><?php echo $department['name']; ?></option>
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
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Active Status</label>
                        </div>
                        <select class="custom-select" name='status' id="inputGroupSelect01" >
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>

                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="update_event">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>