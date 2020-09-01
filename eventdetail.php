<?php
    $page_title = 'Event Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
   if(isset($_GET['id'])){
        $event_id=$_GET['id'];
    // saidebar include
    //include dirname(__FILE__). '/includes/sidebar.php';

    $query = "SELECT * FROM `events` 
            WHERE id = '$event_id'";
            
    $events = $db->getData($query);
   
    

   }
?>
    <div class="row" >
    
        <div class="container" >
          
            <div class="row" style="margin-top:160px;margin-left:auto;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
    
                <div class="container">
                    <div class="">
                        <h3 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Event Details</b></h3>
                        
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
                    <div class="row ">
                        <?php
                        
                            if ($events) {
                            while($event = $events->fetch_assoc()) {
                               
                        ?>
                                                
                        <div class="container"  >
                            <div class="" style="width:auto;height:auto;margin-top:20px;" >
                            
                                    <div class="card-header">
                                        <h1  style="padding:30px;text-align:center;"><b><?php  $d=strtotime($event['date']); echo date("d M, Y ",$d); ?></b></h1>
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-title">Event Name: <?php echo $event['name']; ?></h2>
                                        <small class="text-muted">Posted at: <?php $d=strtotime($event['created_at']); echo date("d M, Y h:i:sa",$d); ?></small>
                                        <p class="card-text"><?php echo $event['content']; ?></p>
                                      
                                        
                                    </div>
                                    
                            </div>
                        </div>
                                            
                        <?php
                            }
                        
                                    
                            } 

                            
                            else 
                            {
                        
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
