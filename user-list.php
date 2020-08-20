<?php
    $page_title = 'User List - Alumni';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
    $users = $db->getData($query); 

?>
<div class="row" style="background-image: url('img/3.jpg');background-size: cover;
                            background-position: center center;
                            background-attachment: fixed;">
                            
<div class="col-sm" style="margin-top:150px;margin-left:80px;margin-right:50px;margin-bottom:50px;
                                    border-radius:10px;box-sizing: border-box;">
<div class="card" style="backgroung-color:#333;">
    <div class="card-header">
        <h3  style="border:2px solid #5c5c5e; border-radius:5px; margin-top:100px;padding: 5px;" class="card-title" ><b>Alumni List </b> </h3>
        
        
        
    </div>
    <div class="card-body">
        <?php 

        if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>

        <table class="table table-bordered" style="text-align:center;">
            <thead >
                <tr>
                    <th colspan="11" style="background: #17a2b8; color:white;"><h4><b>Alumnus Record</b></h4></th>
                </tr>

                <tr >
                    <!--<th>ID</th>-->
                    <th>University ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Job Location</th>
                    <th>Batch</th>
                    <th>Passing_Year</th>
                    <th>Photo</th> 
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($users) {
                        while($user = $users->fetch_assoc()) {
                            ?>
                                <tr>
                                    <!--<td><?php //echo $user['id'] ?></td>-->
                                    <td><?php echo $user['username'] ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo $user['phone'] ?></td>
                                    <td><?php echo $user['address'] ?></td>
                                    <td><?php echo $user['batch'] ?></td>
                                    <td><?php echo $user['passingyear'] ?></td>
                                    <td><?php /* echo $user['photo'] */ ?></td>
                                    
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="11">No User Found</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>

<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>