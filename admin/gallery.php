<?php  
 $page_title = 'Photo List';  
   include dirname(__FILE__). '/includes/header.php';

    $query = "SELECT * FROM `images` ORDER BY id DESC";
    $posts = $db->getData($query);
   
?>


<div class="container" >
    
    <div class="row" >
    
        <div class="col-md-9 " >
        
        <div class="container">
        <?php 

        if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="12" style="text-align:center; background: #17a2b8; color:white;"><h3><b>My Uploaded Image</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>
                                
                                    <tr>
                                       <td><?php echo $post['id']; ?></td>
                                       <td><?php echo $post['user_id']; ?></td>
                                       <td><?php echo $post['title']; ?></td>
                                       <td><img src="../uploads/<?php echo $post['image']; ?>" style="width:100px;height: auto"></td>
                                       <!-- <td><?php //echo $post['status']; ?></td> -->
                                       <?php  
                                            if($post['status']==0){
                                            ?> 
                                                <td style="text-align:center;">
                                                    <a href="imagestatus.php?edit=<?php echo $post['id']; ?>&&status=<?php echo $post['status']; ?>" class=" btn-success btn-block">Show</a>
                                                </td>
                                        <?php
                                            }
                                            else{
                                            ?> 
                                                <td style="text-align:center;">
                                                    <a href="imagestatus.php?edit=<?php echo $post['id']; ?>&&status=<?php echo $post['status']; ?>" class="btn-danger btn-block">Hide</a>
                                                </td>
                                        <?php            
                                            }
                                            ?>
                                       <td><?php echo $post['created_at']; ?></td>
                                       <td>
                                            
                                            <a onclick="return confirm('Do You Want to delete this Image?')" href="delete-image.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                       </td>
                                    </tr>
                                <?php
                               
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No Image found</td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>


<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
               
                