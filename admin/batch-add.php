<?php
    $page_title = 'Department Create';
    // header include
    include dirname(__FILE__). '/includes/header.php';
     $db = new Database();

    if(isset($_SESSION['old_data']))
    {
      $data = $_SESSION['old_data'];
      unset($_SESSION['old_data']);
    }
?>

    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;" class="card-title">Create Batch</h3>
                <div class="card-header-action">
                    <a href="batch.php" class="btn btn-primary">Batch List</a>
                </div>
            </div>
            <div class="card-body">
                <?php 
                    if (isset($message['success_message'])) {
                        echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                    }
                    if (isset($message['error_message'])) {
                        echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                    }
                ?>
                <form action="submit/batch-add-submit.php" method="POST">
                    <div class="form-group">
                        <label for="">Batch Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Batch name">
                        <span class="text-danger">
                        <?php 
                            if(isset($err['name'])) {
                                echo $err['name'];
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="batch_submit">Save Batch</button>
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