<?php
    $page_title = 'Job Details';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/dashsidebar.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        
       $query = "SELECT jobs.*, departments.name as department_name, users.email as user_email FROM `jobs` 
            LEFT JOIN departments ON jobs.dept_id=departments.id 
            LEFT JOIN users ON jobs.user_id=users.id 
            ORDER BY id DESC";
        $posts =  $db->conn->query($query);
        $post = $posts->fetch_assoc();

        $user_id= $_SESSION['id'];
        $query1 = "SELECT * FROM departments";
        $departments = $db->getData($query1);

    }
?>
 <div id="dashboard" style="display:flex;flex-wrap:wrap;min-height:100vh;">
        <div class="container">
            <div class="row" style="padding:120px 0px;">
                    <?php //include dirname(__FILE__). '/includes/dashsidebar.php'; ?>
                    <div class="com-sm-5"></div>
                <div class="container"  style="margin:50px;">
                            <div class="container" style="width:auto;height:auto;background-color:#ddd;border:2px solid #fff;padding:20px;" >
                                 <!--<img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                                 <h2 style="border:2px solid #000;color:#000; border-radius:5px; padding: 7px;"  class="card-title text-center"><b>Job Details</b></h2>
                                <div class="col-md-12" style="background-color: #fff;">
                                    <div class="card-header" style="background-color: #fff">
                                    
                                       <!-- <a href="jobinfo.php?id=<?php //echo $post['id'];?>">-->
                                        <h4 style="color:#000;"><b><?php echo $post['title']; ?></b></h4> 
                                        <h5 style="color:#0d4fb2"><img src="img/company.png" alt="Location" > <?php echo $post['cname']; ?></h5>
                                        <h5 style="color:#000;"><img src="img/location.png" alt="Location" > <?php echo $post['address']; ?></h5>

                                    </div>
                                    <div class="card-body">
                                    <div class="row" style="padding:20px;">
                                        <div class="col-sm-5" >
                                        <p> Job For  : <?php echo $post['department_name'];?> Department<br>
                                        
                                        </p>
                                            </div>

                                        <div class="col-sm-4" style="margin-top:0px;">
                                        <p> Posted On    : <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?><br>
                                        <b> Apply Before     : <?php $d=strtotime($post['deadline']); echo date("d M, Y",$d); ?></b></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4><b>Job Description</b></h4>
                                        <?php echo $post['info']; ?>
                                    </div><br>
                                    <div class="col-sm-12">
                                        <h4><b>Job Nature</b></h4>
                                        <?php echo $post['hour']; ?>
                                    </div><br>
                                    <div class="col-sm-12">
                                        <h4><b>Educational Requirements</b></h4>
                                        <?php echo $post['education']; ?>
                                    </div><br>
                                    <div class="col-sm-12">
                                        <h4><b>Experience Requirements</b></h4>
                                        <?php echo $post['experience']; ?>
                                    </div><br>
                                    <div class="col-sm-12">
                                        <h4><b>Job Requirements</b></h4>
                                        <p>Both Male and Female can Apply</p>
                                    </div><br>
                                    <div class="col-sm-12">
                                        <h4><b>Salary Range</b></h4>
                                        <?php echo $post['salary']; ?>
                                    </div><br>
                                    <div class="col-sm-12">
                                        <h4><b>Vacancy</b></h4>
                                        <p>N/A</p>
                                    </div><br>
                                    </div>
                                    <div class="card-footer text-center" style="margin-top:40%;">
                                        For Apply Send Your CV to   
                                        "<b><i><u><?php echo $post['user_email'];?></u></i></b>" (*Photograph must be enclosed with CV.)
     
                                    </div>

                                    
                                    
                                </div>
                            </div>
                        </div>
            
        </div>  
    </div>
</div>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>