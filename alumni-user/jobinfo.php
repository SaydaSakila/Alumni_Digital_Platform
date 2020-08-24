<?php
    $page_title = 'Job Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/dashsidebar.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        
       $query = "SELECT jobs.*, departments.name as department_name, users.name as user_name FROM `jobs` 
            LEFT JOIN departments ON jobs.dept_id=departments.id 
            LEFT JOIN users ON jobs.user_id=users.id 
            ORDER BY id DESC";
        $posts =  $db->conn->query($query);
        $post = $posts->fetch_assoc();

       // $posts1 = $db->getData($query);

        $user_id= $_SESSION['id'];
        $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);

    }
?>
 <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container">
            <div class="row" style="padding:120px 0px;">
                    <?php include dirname(__FILE__). '/includes/dashsidebar.php'; ?>
                <div class="col-sm-9 " style="background-color:#fff;width:auto;height:auto;margin-top:0px;margin-bottom:100px;">
                    <img src="../img/portfolio/app3.jpg" class="card-img-top" alt="...">
                    <div class="card-header">Department: 
                        <?php echo $post['department_name'];
                        
                            if($post['user_id']==$user_id){?>  
                            <a href="edit-job.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                            <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-job.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                
                        <?php }?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                        <small class="text-muted">Uploaded at <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By <?php echo $post['user_name']; ?></p>
                        <p class="card-text"><?php echo $post['info']; ?></p>
                    </div>
                    <div class="card-footer" >
                        
                    </div>
                </div>
            
        </div>  
    </div>
</div>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>