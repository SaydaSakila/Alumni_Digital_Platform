<?php
    $page_title = 'Update Event Information';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $sql = "SELECT * from events where id='$id'";
        $run  = $db->conn->query($sql);
        $data = $run->fetch_assoc();   
    }
    if (isset($_SESSION['old_data'])) 
    {
        $data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
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
                        <textarea name="content" id="summernote" rows="5" value='<?php  echo $data['content']; ?>' class="form-control"  placeholder="Update Event Information"></textarea>
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
                        <input type="date" name="date" value='<?php  echo $data['date']; ?>' class="form-control-file" id="exampleFormControlFile1">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['date'])) {
                                    echo $err['date'];
                                }
                            ?>
                        </span>
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