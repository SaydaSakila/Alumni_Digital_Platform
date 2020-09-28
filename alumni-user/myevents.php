<?php
    $page_title = 'Event List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   
        $query = "SELECT * FROM `events` ORDER by id DESC";
        $events = $db->getData($query);
$user_id= $_SESSION['id'];
?>
<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
    
        <div class="container" style="margin-top:100px;margin-bottom:70px;
                                    border-radius:10px;">
                                    
            <div class="row" >
             <?php
                        // contents include
                        include dirname(__FILE__). '/includes/dashsidebar.php';
                    ?>
                <div class="col-md-9 " >
        
        <div class="container">
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
                
                        <th>Batch</th>
                        <th>Department</th>
                        <th>Current Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($events) {
                            while($event = $events->fetch_assoc()) {
                                if($event['user_id']==$user_id)
                                {?>
                                    <tr>
                                        <td><?php echo $event['id'] ?></td>
                                        <td><?php echo $event['name'] ?></td>
                                        <td><?php echo $event['content'] ?></td>
                                        <td><?php echo $event['date'] ?></td>
                                        <td><?php echo $event['created_at'] ?></td>
                                       
                                        <td><?php 
                                                $ids = json_decode($event['batch_id']);
                                                $ids = implode(',', $ids);
                                                
                                                $batches = $db->getData("SELECT batches.name FROM `batches` WHERE id IN ($ids)");
                                                if ($batches->num_rows > 0) {
                                                    while($batch = $batches->fetch_assoc()) {
                                                        echo $batch['name']. ', ';
                                                    }
                                                }     
                                        ?></td> 
                                         <td><?php 
                                            $ids = json_decode($event['dept_id']);
                                                $ids = implode(',', $ids);
                                                
                                                $departments = $db->getData("SELECT departments.name FROM `departments` WHERE id IN ($ids)");
                                                if ($departments->num_rows > 0) {
                                                    while($department = $departments->fetch_assoc()) {
                                                        echo $department['name']. ', ';
                                                    }
                                                }
                                       ?></td>
                                       <?php  
                                            if($event['status']==0){
                                            ?> 
                                                <td style="text-align:center;color:white;">
                                                    <a  class=" btn-warning btn-sm ">Pending</a>
                                                </td>
                                        <?php
                                            }
                                            else{
                                            ?> 
                                                <td style="text-align:center;color:white;">
                                                    <a  class="btn-success btn-sm">Approved</a>
                                                </td>
                                        <?php            
                                            }
                                            ?>

                                        <td>
                                            <a href="edit-event.php?edit=<?php echo $event['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="delete-event.php?delete=<?php echo $event['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
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
