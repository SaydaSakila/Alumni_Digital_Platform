<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  margin-top:0px;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 100px;
  padding-left:20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size:15px;
  color: #000;
  display: block;
}

.sidenav a:hover {
  color: #444;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<?php
    $page_title = 'Blog Details';
    // header include
    //include dirname(__FILE__). '/includes/header.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        
        //$query = "SELECT * FROM uposts WHERE id='$id'";
        $query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id
            WHERE uposts.id = '$id'";
        $posts =  $db->conn->query($query);
        $posts1 = $db->getData($query);

        $user_id= $_SESSION['id'];
        $post = $posts->fetch_assoc();
        $query1 = "SELECT * FROM categories";
        $categories = $db->getData($query1);

    }
?>
   <div class="sidenav">
              
              <div class="dropdown">
                  <a class=" btn btn-success btn-block" style="color:#fff" href="#">View Profile</a>
                </div><br>
                <div class="dropdown">
                  <a class=" btn btn-success btn-block" style="color:#fff" href="edit-userreg.php?edit=<?php echo $id; ?>">Update Profile</a>
                </div><br>
                <div class="dropdown">
                  <a class=" btn btn-success btn-block" style="color:#fff" href="post-add.php">Add Blog</a>
                </div><br>
                <div class="dropdown">
                  <a class=" btn btn-success btn-block" style="color:#fff" href="posts.php">Blog List</a>
                </div><br>
                <div class="dropdown ">
                    <button type="button" class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category List
                    </button>
                  
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <?php 
                            if ($categories) {
                                while($category = $categories->fetch_assoc()) {
                        ?>
                                    <a class="dropdown-item" href="#"><?php echo $category['name'] ?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div><br>
                <div class="dropdown ">
                    <button type="button" class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        My Blog
                    </button>
                    
                     <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <?php 
                            if ($posts1) {
                                while($post = $posts1->fetch_assoc()) {
                        ?>
                                    <a class="dropdown-item" href="#"><?php echo $post['title'];?></a>
                        <?php
                                }
                            }
                        ?>
                    </div><br>
                  <div class="dropdown">
                    <a class=" btn btn-success btn-block" style="color:#fff" href="logout.php">LogOut</a>
                </div><br>
                </div>
                
          </div>       

   
</body>
</html> 
