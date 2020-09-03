<?php 
  //header file include
  include dirname(__FILE__).'/../../database/database.php';

  session_start();
    if (!isset($_SESSION['username']) || ($_SESSION['actor']!== "students")) {
    header("location:stulogin.php");
  }
  /*if (!isset($_SESSION['username'])) {
    header("location:stulogin.php");
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
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
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

</style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!--<h1><a href="#intro" class="scrollto">BizPage</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="../index.php"><img src="img/logoadp.png" alt="Logo" title="Alumni Digital Platform" style="width:50px;height:50px;" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="<?= ($activePage == 'index') ? 'menu-active':''; ?>"><a href="index.php">Home</a></li>
          <li class="<?= ($activePage == 'user-list') ? 'menu-active':''; ?>"><a href="user-list.php">Alumni List</a></li>
          <li class="<?= ($activePage == 'job') ? 'menu-active':''; ?>"><a href="job.php">Career Opportunity</a></li>
          <li class="menu-has-children <?= ($activePage == 'posts') ? 'menu-active':''; ?>"><a href="posts.php">Blog</a></li>
          <li class="menu-has-children <?= ($activePage == 'events') ? 'menu-active':''; ?>"><a href="events.php">Events</a></li>
          <li class="menu-has-children <?= ($activePage == 'memory') ? 'menu-active':''; ?>"><a href="memory.php">Memories</a></li>
                 
          <li class="menu-has-children <?= ($activePage == 'dashboard' || $activePage == 'profile' || $activePage == 'edit-userreg') ? 'menu-active':''; ?>"><a href="#home"><?php echo $name; ?> 
              <img src="../student-user/img/stuavater.png" alt="Avatar" style="width:30px;height:30px;"></a>
            <ul>
              <li><a href="dashboard.php">DASHBOARD</a></li>
              <li><a href="profile.php?id=<?php echo $id;?>">MY PROFILE</a></li>
              <li><a href="edit-userreg.php?edit=<?php echo $id; ?>">UPDATE PROFILE</a></li>
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
