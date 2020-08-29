<?php
    $page_title = 'Home Page';
    // header include
    include dirname(__FILE__).'/includes/header.php';
?>

  <main role="main"><h1 class="text-center">Pending Requests for Join with this WebSite</h1>

      <section class="jumbotron text-center">
        <div class="row" >
            <?php
            
                $query = "SELECT * from `requests` ORDER by id DESC";
               $request = $db->getData($query);
               ?>
               <div class="container"><h2 style="color:#E74C3C">Login Requests from Alumni</h2>
               <?php
                if ($request) {
                            while($req = $request->fetch_assoc()) {
                        ?>
                
                    <h1 class="jumbotron-heading"><?php echo $req['name'] ?></h1>
                      <p class="lead text-muted"><?php echo $req['message'] ?></p>
                      <p>
                        <a href="accept.php?id=<?php echo $req['id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a onclick="return confirm('Do You Want to delete this Request?')" href="reject.php?id=<?php echo $req['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                      </p>
                    <small><i><?php echo $req['created_at'] ?></i></small>
            <?php
                    }
                }else{
                    echo "No Pending Requests From Alumni.";
                }
            ?>
            </div>
        </div>
        <div class="row" >
            <?php
            
                $query = "SELECT * from `sturequests` ORDER by id DESC";
               $request = $db->getData($query);
               ?>
               <div class="container"><h2 style="color:#E74C3C">Login Requests from Student</h2>
               <?php
                if ($request) {
                            while($req = $request->fetch_assoc()) {
                        ?>
                
                    <h1 class="jumbotron-heading"><?php echo $req['name'] ?></h1>
                      <p class="lead text-muted"><?php echo $req['message'] ?></p>
                      <p>
                        <a href="acceptstu.php?id=<?php echo $req['id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a onclick="return confirm('Do You Want to delete this Request?')" href="rejectstu.php?id=<?php echo $req['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                      </p>
                    <small><i><?php echo $req['created_at'] ?></i></small>
            <?php
                    }
                }else{
                    echo "No Pending Requests From Students.";
                }
            ?>
            </div>
        </div>
          
      </section>

    </main>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>