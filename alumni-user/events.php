<?php
    $page_title = 'My Event List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    // saidebar include
    //include dirname(__FILE__). '/includes/sidebar.php';
        // $query1 = "SELECT * FROM `events` WHERE `status` = '1' AND JSON_CONTAINS(batch_id, '[$batch]') ORDER BY id DESC";
       
        // $events = $db->getData($query1);
        //$id= $_SESSION['id'];    
?>
    <div class="row" >
    
        <div class="container" >
                                    
            <div class="row" style="margin-top:150px;margin-left:auto;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
    
                <div class="container" style="width:850px;padding:20px;">
                    <div class="">
                        <h3 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>My Events</b></h3>
                        
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
                    <div class="container ">
                        <?php
                        if ($events) {
                            while($event = $events->fetch_assoc()) {
                                ?>
                                    <div class="card mb-4" style="max-width: 740px;height:auto;;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4" style="background-color:#424949;color:#fff">
                                               <h2  style="padding:30px;text-align:center;"><?php $d=strtotime($event['date']); echo date("d M, Y h:i:s a",$d); ?></h2>
                                            </div>
                                            <div class="col-md-8" style="text-align:left;">
                                                <div class="card-header">
                                                    Event Name: <?php echo $event['name']; ?><br>
                                                   <small class="text-muted"><?php $d=strtotime($event['created_at']); echo date("d M, Y h:i:sa",$d); ?>
                                                    <b> [Batch: <?php  
                                                            $ids = json_decode($event['batch_id']);
                                                            $ids = implode(',', $ids);
                                                            
                                                            $batches = $db->getData("SELECT batches.name FROM `batches` WHERE id IN ($ids)");
                                                            if ($batches->num_rows > 0) {
                                                                while($batch = $batches->fetch_assoc()) {
                                                                    echo $batch['name']. ', ';
                                                                }
                                                            }?>
                                                    Department: <?php  
                                                        $ids = json_decode($event['dept_id']);
                                            
                                                        $ids = implode(',', $ids);
                                                        
                                                        $departments = $db->getData("SELECT departments.name FROM `departments` WHERE id IN ($ids)");
                                                        if ($departments->num_rows > 0) {
                                                            while($department = $departments->fetch_assoc()) {
                                                                echo $department['name']. ', ';
                                                            }
                                                        }
                                                ?>]</b></small>
                                                </div>
                                                <div class="card-body" style="padding:5px;">
                                                    <p class="card-text"><?php echo substr(Strip_tags($event['content']), 0, 100); ?>..</p>
                                                    
                                                   <p> <a href="eventdetail.php?id=<?php echo $event['id'];?>" style="float:right;padding:10px;text-align:right;" >Read Details</a></p>
                                                </div>
                                                <div class="card-footer">
                                                        <p><a href="https://docs.google.com/forms/d/1xLlbKx7Oo5As-iSOayKieAh8bmyf1B3O8DAmvsODn2w/edit" target="_blank">For Registration Click Here</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>              
                       
                                            
                        <?php
                            }
                        
                                    
                            } 

                     

                            else 
                            {
                        ?>
                                <div class="card text-center" style="margin-top:100px;margin-bottom:100px;"><h2>No Events Found for My Batch</h2></div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
              
            </div>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
