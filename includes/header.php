<?php 
  //database file include
  include dirname(__FILE__).'/../database/database.php';

  session_start();
  /*if (isset($_SESSION['username'])) {
    header("location:../index.php");
  }*/
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
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
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

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
	.gallery-container{
			max-width:1000px;
			margin:auto;
			overflow:auto;
			text-align:center;
		}
		.gallery-container h1{
			margin-top:100px;
			width:100%;
      text-align:center;
			
		}
		.gallery{
			margin:10px;
			border:1px solid #ccc;
			float:left;
			width:300px;
		}
    
		.gallery img{
			width:100%;
			height:150px;
			
		}
    
		.gallery-desc{
			padding:15px;
			text-align:center;
			color:#333;
			 
		}
    .zoom {
      padding: 0px;
    
      transition: transform .2s;
      width: 100%;
      height: auto;
      margin: 0 auto;
    }

    .zoom:hover {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(1.5); 
    }
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 0%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
  padding: 10px;
}
</style>
</head>

<body>


   <!--==========================
    Header
  ============================-->
  <header id="header" class="header-scrolled">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!--<h1><a href="#intro" class="scrollto">BizPage</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="img/logoadp.png" alt="Logo" title="Alumni Digital Platform" style="width:50px;height:50px;" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
   <li class="<?= ($activePage == 'index') ? 'menu-active':''; ?>"><a href="index.php">Home</a></li>
   <li class="menu-has-children <?= ($activePage == 'memory') ? 'menu-active':''; ?>"><a href="memory.php">Memories</a></li>
          <li class="<?= ($activePage == 'user-list') ? 'menu-active':''; ?>"><a href="user-list.php">Alumni List</a></li>
          <li class="<?= ($activePage == 'job') ? 'menu-active':''; ?>"><a href="job.php">Career Opportunity</a></li>
          <li class="menu-has-children <?= ($activePage == 'posts') ? 'menu-active':''; ?>"><a href="posts.php">Blog</a></li>
          <li class="menu-has-children <?= ($activePage == 'events') ? 'menu-active':''; ?>"><a href="events.php">Events</a></li>
          
                    
          <li class="menu-has-children"><a href="login.php">LOG-IN</a>
            <ul class="nav-menu">
              <li><a href="alumni-user/login.php">ALUMNI</a></li>
              <li><a href="student-user/stulogin.php">STUDENT</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  
