<?php
    $page_title = 'Home Page';
    // header include
    include dirname(__FILE__).'/includes/header.php';
      $query1 = "SELECT * FROM `events`";
          $events = $db->getData($query1);
          if($events==NULL){
            $numberEvent=0;
          }else{
          $numberEvent = mysqli_num_rows($events);
        }
        $aluquery = "SELECT * FROM `users`";
        $users = $db->getData($aluquery);
        if($users==NULL){
          $numberalu=0;
        }else{
        $numberalu = mysqli_num_rows($users);
      }
      $jobquery = "SELECT * FROM `jobs`";
        $jobs = $db->getData($jobquery);
        if($jobs==NULL){
          $numberjob=0;
        }else{
        $numberjob = mysqli_num_rows($jobs);
      }
?>
      <div class="center" style="margin-top:0px;align:center;margin-left:400px;">
        <h1>Welcome<small> to</small> <b>Admin Panel</b></h1>
        
      </div>
<!-- <img src="assets/img/welcomeadmin.png" alt="Welcome Icon" style="height:100%;weight:100%; align:center;margin-left:400px;" /> -->
  <!-- Main content -->
    <section class="content" style="margin-top:110px;align:center;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $pending; ?></h3>

                <p>Pending Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pending.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $numberalu; ?></h3>

                <p>Alumni List</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="user-list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $numberjob; ?></h3>

                <p>Job Board</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="jobboard.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info ">
              <div class="inner">
                <h3><?php echo $numberEvent; ?></h3>

                <p>Upcoming Event</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="events.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
                  
          </section>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>