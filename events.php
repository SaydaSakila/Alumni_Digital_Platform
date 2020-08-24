<?php
    $page_title = 'Event List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
 
    // saidebar include
    //include dirname(__FILE__). '/includes/sidebar.php';

     $query1 = "SELECT * FROM `events`";
        $events = $db->getData($query1);
        //$id= $_SESSION['id'];
    
?>
    <div class="row" >
    
        <div class="container" >
            <!--<div class="card" style="margin-top:100px;margin-bottom:70px;background-color:#333;
                                    border-radius:10px;">-->
                                    
            <div class="row" style="margin-top:150px;margin-left:auto;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
    
                <div class="container" style="background-color:#ddd;padding:20px;">
                    <div class="">
                        <h3 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Events</b></h3>
                        
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
                                ?><br>
                                    <div class="card mb-3" style="max-width: 740px;height:auto;">
                                        <div class="row no-gutters">
                                            <div class="col-md-3" style="background-color:#424949;color:#fff">
                                                <!--<img src="../img/portfolio/app1.jpg" class="card-img" style="height:100%;" alt="Events Image">
                                           --> <h2  style="padding:30px;text-align:center;"><?php $d=strtotime($event['date']); echo date("d M, Y ",$d); ?></h2>
                                            </div>
                                            <div class="col-md-8" style="text-align:left;">
                                                <div class="card-header"><h4>
                                                    Event Name: <?php echo $event['name']; ?></h4>
                                                    <small class="text-muted"><?php $d=strtotime($event['created_at']); echo date("d M, Y h:i:sa",$d); ?></small>
                                                </div>
                                                <div class="card-body">
                                                    
                                                    <p class="card-text"><?php echo substr($event['content'], 0, 10); ?>..</p>
                                                    <p><a href="eventdetail.php?id=<?php echo $event['id'];?>" style="float:right;padding:10px;" >Read Details</a></p>
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
                                <div class="card text-center"><p>No Events found</p></div>
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
