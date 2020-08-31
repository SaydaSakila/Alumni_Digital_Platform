<?php 
  //header file include
  include dirname(__FILE__).'/../../database/database.php';

  session_start();
  //if (!isset($_SESSION['username'])) {
    if (!isset($_SESSION['username']) || ($_SESSION['actor']!== "admins")) {
    header("location:login.php");
  }
  if(isset($_SESSION['errors']))
  {
      $err = $_SESSION['errors'];
      unset($_SESSION['errors']);
  }
  if(isset($_SESSION['success']))
  {
      $message = $_SESSION['success'];
      unset($_SESSION['success']);
  }
    $db = new Database();
    //var_dump($db);die();
        $query1 = "SELECT * FROM `events` WHERE `status` = 0";
        $events = $db->getData($query1);
        $numberEvent = mysqli_num_rows($events);

        $query = "SELECT * FROM `requests` ";
        $requests = $db->getData($query);
        $numberreq = mysqli_num_rows($requests);
        $querys = "SELECT * FROM `sturequests` ";
        $srequests = $db->getData($querys);
        $snumberreq = mysqli_num_rows($srequests);
        $res = $numberreq + $snumberreq;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumni Digital Platform</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>

.notification {
  
  
  text-decoration: none;
  
  position: relative;
  display: inline-block;
  border-radius: 2px;
}


.notification .badge {
  position: absolute;
  top: -0px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
 
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pending.php" class="nav-link notification"> 
        <span >Pending Request</span><span class="badge"><?php echo $res; ?></span></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="user-list.php" class="nav-link">Alumni List</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="student-list.php" class="nav-link">Student List</a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="uposts.php" class="nav-link">Alumni Blog List</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="sposts.php" class="nav-link">Student Blog List</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="jobboard.php" class="nav-link">Job List</a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="events.php" class="nav-link notification"> 
        <span >Events List</span><span class="badge"><?php echo $numberEvent; ?></span></a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
       <li class="nav-item">
            <a href="logout.php" class="nav-link" title="Logout" >
                <i class="fas fa-sign-out-alt" ></i>
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<?php 
    include dirname(__FILE__). '/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $page_title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
