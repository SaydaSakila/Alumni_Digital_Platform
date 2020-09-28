<?php    
    include dirname(__FILE__). '/includes/header.php';

    $page_title = 'Photo List';
    
    $query = "SELECT * FROM `images`";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];
   
?>

<div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
                <div class="container" style="margin-top:100px;margin-bottom:70px;
                                    border-radius:10px;">
                    
                    <div class="row" >
                    <?php
                        // contents include
                        include dirname(__FILE__). '/includes/dashsidebar.php';
                    ?>
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
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Current Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                if($post['user_id']==$user_id)
                                {?>
                                
                                    <tr>
                                       <td><?php echo $post['id']; ?></td>
                                       <td><?php echo $post['title']; ?></td>
                                       <td><img src="../uploads/<?php echo $post['image']; ?>" style="width:100px;height: auto"></td>
                                        <?php  
                                            if($post['status']==1){
                                            ?> 
                                                <td style="text-align:center;color:white;">
                                                    <a  class=" btn-warning btn-sm">Pending</a>
                                                </td>
                                        <?php
                                            }
                                            else{
                                            ?> 
                                                <td style="text-align:center;color:white;">
                                                    <a  class="btn-success btn-sm">Approved</a>
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
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
               
                