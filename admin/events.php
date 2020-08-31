<?php
    $page_title = 'Event List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    // saidebar include
    //include dirname(__FILE__). '/includes/sidebar.php';

     $query1 = "SELECT events.*, departments.name as department_name, `batches`.name as batch_name FROM `events` 
        LEFT JOIN `batches` ON events.batch_id=`batches`.id 
        LEFT JOIN departments ON events.dept_id=departments.id
         ORDER BY id DESC";
        $events = $db->getData($query1);
        //$id= $_SESSION['id'];
    
?>
    <div class="row" >
    
        <div class="container" >
            <!--<div class="card" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                    border-radius:10px;">-->
                                    
            <div class="row" >
    
                <div class="card" style="padding:20px;">
                    <div class="">
                        <h3 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Event List</b></h3>
                        <div class="card-header-action">
                            <a href="event-add.php" class="btn btn-primary">Add New Event</a>
                        </div>
                    </div>
                    <?php 

                        if (isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                                <?php 
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                ?>
                            </div>
                        <?php endif ?>
                    <table class="table">
                <thead>
                    <tr>
                        <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Event Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Event Name</th>
                        <th>Event Details</th>
                        <th>Event Date</th>
                        <th>Event Create Time</th>
                        <th>Photo</th>
                        <th>Batch</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($events) {
                            while($event = $events->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $event['id'] ?></td>
                                        <td><?php echo $event['name'] ?></td>
                                        <td><?php echo $event['content'] ?></td>
                                        <td><?php echo $event['date'] ?></td>
                                       <td><?php echo $event['created_at'] ?></td>
                                       <td><?php echo $event['photo'] ?></td>
                                       <td><?php echo $event['batch_name'] ?></td>
                                       <td><?php echo $event['department_name'] ?></td>
                                      
                                       <?php  
                                            if($event['status']==0){
                                            ?> 
                                                <td style="text-align:center;">
                                                    <a style="color:#800000; border:2px solid #800000;
                                                        background:white;border-radius:5px;padding: 5px;">Hide</a>
                                                </td>
                                        <?php
                                            }
                                            else{
                                            ?> 
                                                <td style="text-align:center;">
                                                <a style="color:#2E8857;border-radius:5px; border:2px solid #2E8857;
                                                        background:white;padding: 5px;">
                                                    Show</a>
                                                </td>
                                        <?php            
                                            }
                                            ?>

                                        <td>
                                            <a href="edit-event.php?edit=<?php echo $event['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                            <a href="delete-event.php?delete=<?php echo $event['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
                </div>
              
            </div>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
