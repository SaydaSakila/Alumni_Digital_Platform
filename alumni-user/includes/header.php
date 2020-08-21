<?php 
  //header file include
  include dirname(__FILE__).'/../../database/database.php';

  session_start();
  if (!isset($_SESSION['username']) || ($_SESSION['actor']!== "users")) {
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
    $id = $_SESSION['id'];
    $name = $_SESSION['username'];

    $db = new Database();
    //var_dump($db);die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alumni Digital Platform</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/   SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  margin-top:0px;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 100px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="../index.php" class="scrollto"><img src="../alumni-user/img/logoadp.png" alt="Avatar" style="width:50px;height:50px;"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Career Opportunity</a></li>
          <li class="menu-has-children"><a href="#portfolio">Blog</a>
            <ul>
              <li><a href="post-add.php">Post Blog</a></li>
              <!--<li><a href="posts.php">View Blogs</a></li>-->
              <li><a href="posts.php">All Blogs</a></li>

            </ul>
          </li>
          <li class="menu-has-children"><a href="#team">Events</a>
            <ul>
              <li><a href="">Post Event</a></li>
              <li><a href="">View Events</a></li>
            </ul>
          </li>
          
          <li class="menu-has-children"><a href="#home"><?php echo $name; ?> 
              <img src="../alumni-user/img/avater.png" alt="Avatar" style="width:30px;height:30px;"></a>
            <ul>
              <li><a href="">DASHBOARD</a></li>

              <li><a href="edit-userreg.php?edit=<?php echo $id; ?>">EDIT PROFILE</a></li>
              <li class="nav-item">
                  <a href="logout.php" class="nav-link" title="Logout">LOG-OUT
                      <i class="fas fa-sign-out-alt"></i>
                  </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
