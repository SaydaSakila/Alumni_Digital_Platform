
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/c16.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome To Alumni Digital Platform</h2>
               <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/c1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome To Alumni Digital Platform</h2>
               <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/aa5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome To Alumni Digital Platform</h2>
               <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/aa13.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome To Alumni Digital Platform</h2>
               <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/aa16.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome To Alumni Digital Platform</h2>
               <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">


    <!--==========================
      Featured Services Section
    ============================-->
    <!--
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section> -->
<!-- #featured-services -->


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <h4 style="margin-left:30px;font-size:25px;"><b>Objectives</b></h4>
          <p>Alumni Digital Platform plays a vital role by assisting the alumni in developing 
linkage with industries, multinational organizations as well as other firms and companies. 
Besides that, it assists the students by giving instructions about what to do or not. 
It also provides job opportunities to the alumni and students of IUBAT. Here Alumni and students botha
can read and write blog which is very helpfull for all.</p>
            <h4 style="margin-left:30px;font-size:25px;"><b>Preamble</b></h4>
          <p>
            We, the Alumni of the IUBAT—International University of Business Agriculture and Technology,
 develop mutual interest among ourselves, establish mutually beneficial relations between 
Student and Alumni, and promote the interests of students do hereby form into a
platform and adopt this constitution.</p>
        
        </header>

        
      </div>
    </section><!-- #about -->

     <!--==========================
      Services Section
    ============================-->
    <?php
    $page_title = 'User List - Alumni';
    // include header file
    //include dirname(__FILE__). '/includes/header.php';
    //get users list
    $query = "SELECT * FROM users";
    $users = $db->getData($query); 

    $query = "SELECT jobs.*, departments.name as department_name, users.name as user_name FROM `jobs` 
            LEFT JOIN departments ON jobs.dept_id=departments.id 
            LEFT JOIN users ON jobs.user_id=users.id ORDER BY id DESC";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];


?>
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Career Opportunity</h3>
          <p>This is the Platform where Alumni or Student both can view Job related any news.</p>
        </header>
        <div class="row " >
              <?php 
              if ($posts) 
                  {
                  while($post = $posts->fetch_assoc()) 
                  {
              ?>
              <div class="col-sm-1"></div>                       
                  <div class="col-sm-10 "  >
                      <div class="container" style="width:auto;height:auto;margin-top:20px;background-color:#ddd;border:2px solid #333;padding:5px;" >
                            <!--<img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                          <div class="hover" style="background-color: #fff">
                              <div class="card-header" style="display:flex;">
                              
                                  <a href="jobinfo.php?id=<?php echo $post['id'];?>">
                                  <h4 style="color:#0d4fb2;"><b><?php echo $post['title']; ?></b></h4></a> 
                                  <span style="margin-left:20px;padding:5px;"><small>Experience : <?php echo $post['experience']; ?></small></span>
                                  
                                  
                              </div>
                              <div class="" style="display:flex;margin-left:20px;margin-top:10px;">
                                  <h5 style="color:#0d4fb2"><img src="../img/company.png" alt="Location" > <?php echo $post['cname']; ?></h5><span style="margin-left:30px;margin-top:5px;"><img src="../img/location.png" alt="Location" > <?php echo $post['address']; ?></span>
                              </div>
                              <div class="" style="display:flex;margin-left:20px;margin-top:5px;">
                                  <h5 style=""><img src="../img/money.png" alt="Salary" > <b>Salary : <?php echo $post['salary']; ?></b></h5><span style="margin-left:55px;margin-top:5px;"><img src="../img/hour.png" alt="Time" > <?php echo $post['hour']; ?></span>
                              </div>    
                                <p style="margin-left:20px;margin-top:10px;">Educational Qualifications : <?php echo $post['education']; ?></p>
                                  <p style="margin-left:20px;"><?php //echo substr($post['info'],0,50); ?></p>
                                
                                  
                              
                              <div class="card-footer">
                                  Department : 
                                  <?php echo $post['department_name'];?>
                                  <small class="text-muted" style="margin-left:150px;"><img src="../img/posttime.png" alt="Time" > Posted On : <?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?></small>
                                  <small class="text-muted" style="margin-left:100px;"><img src="../img/deadline.png" alt="Time" >  Apply before : <?php $d=strtotime($post['deadline']); echo date("d M, Y",$d); ?></small>
                                          
                              </div>
                          </div>
                      </div>
                  </div>
                                            
                        <?php
                        break;
                            }     
                            } 
                            ?>
             </div>   <br>
              <div class="row">
          <div class="col-lg-12">
         
              <a href="job.php" class="btn btn-success btn-block"  >View All Job</a>
          </div>
        </div>    
<!--
        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>
-->
      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!--
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section>
    -->
    <!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!--
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>
-->
    <!--==========================
      Facts Section
    ============================-->
    <!--
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
  				</div>

  			</div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section>
    -->
    <!-- #facts -->

 <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Blogs</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <!--<li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Academic</li>
              <li data-filter=".filter-card">Career</li>
              <li data-filter=".filter-web">Others</li>-->
            </ul>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-12">
         
              <a href="post-add.php" class="btn btn-success btn-block"  >Add New Blog</a>
          </div>
        </div> -->
        

<!-- ######### Try -->
<?php 

//alumni blog
$query = "SELECT uposts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
            LEFT JOIN users ON uposts.user_id=users.id ORDER BY id DESC LIMIT 3";
    $posts = $db->getData($query);
    $user_id= $_SESSION['id'];

 
  //student blog
    $query1 = "SELECT sposts.*, categories.name as category_name, students.name as student_name FROM `sposts` 
            LEFT JOIN categories ON sposts.category_id=categories.id 
            LEFT JOIN students ON sposts.student_id=students.id ORDER BY id DESC";
    $posts1 = $db->getData($query1);
    $student_id= $_SESSION['id'];

    //admin blog
    $query2 = "SELECT posts.*, categories.name as category_name, admins.name as admin_name FROM `posts` 
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN admins ON posts.admin_id=admins.id ORDER BY id DESC";
    $posts2 = $db->getData($query2);

?>
        <div class="row ">
            <?php
            
                if ($posts) 
                {
                  while($post = $posts->fetch_assoc()) 
                  {
                    //if ($post === 1) 
                        //break;
    
              ?>
                                    
            <div class="col-sm-4 "  >
                <div class="card" style="width:auto;height:450px;margin-top:20px;" >
                    <!-- <img src="../img/portfolio/app1.jpg" class="card-img-top" alt="Card Image">-->
                         <img src="../uploads/<?php if($post['photo']!= NULL){ echo $post['photo'];}else{ ?>blog.jpg <?php  } ?>" style="width:auto;height: 200px;" class="card-img-top" alt="Blog Image">
                                    <div class="card-header">
                                        <?php echo $post['category_name'];?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $post['title'];?></h5>
                                        <small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?> By: <?php echo $post['user_name']; ?></small>
                                        
                                        <p class="card-text"><?php echo substr(Strip_tags($post['content']), 0, 20); ?>..</p>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="blog.php?id=<?php echo $post['id'];?>">Read More..</a>
                                        <?php /*echo $post['category_name']; */ 
                                                if($post['user_id']==$user_id){?>  
                                                <a href="edit-post.php?edit=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-success btn-sm"> <img src="../alumni-user/img/edit.png" alt="Avatar" ></a>
                                                <a onclick="return confirm('Do You Want to delete this Blog?')" href="delete-post.php?delete=<?php echo $post['id']; ?>" style="float:right;" class="btn btn-danger btn-sm"><img src="../alumni-user/img/delete.png" alt="Avatar" ></a>
                                                    
                                            <?php }?>
                                                <!-- <li class="list-group-item"><?php /*$d=strtotime("created_at");*/ //echo date("d M, Y"/*,$d*/); ?> By: <?php //echo $post['user_name']; ?> </li>
                                         <li class="list-group-item">Post Time : <?php // echo $post['created_at']; ?></li>-->
                                        
                                          <!--  <li class="list-group-item"><form action="" id="usrform" >
                                                <input type="text" name="comment" placeholder="Enter Your Comments">
                                                <input type="submit" name="submit" class="btn btn-success btn-sm" value="Post">
                                            </form></li>
                                            <li class="list-group-item"><input type="text" class="form-control" name="comment"  placeholder="Enter Your Comments" />&#160;<?php /*echo $post['comments']; */?>
                                            <input type="submit" class="form-control" name="submit" class="btn btn-success" value="submit" /></li>-->
                                    </div>
                </div>
            </div>
                                  
              <?php
                   // break;

                  }
             
                  } 

                
                  

                  else 
                  {
                ?>
                    <div class="card text-center"><p>No Blog found</p></div>
                <?php
                  }
                ?>
        </div><br>
        <div class="row">
          <div class="col-lg-12">
         
              <a href="posts.php" class="btn btn-success btn-block"  >Read All Blogs</a>
          </div>
        </div>

<!-- ######### Try -->
<!--==========================
      Portfolio Section
    ============================--> 
<!--          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App #</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>-->
          </div>

        </div>

      </div>


    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <!--
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>
    --><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!--
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>
    -->
    <!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <?php
    $page_title = 'Event List';
    // header include
    //include dirname(__FILE__). '/includes/header.php';
 
    // saidebar include
    //include dirname(__FILE__). '/includes/sidebar.php';

     $query1 = "SELECT * FROM `events` WHERE `status` = '1' ORDER BY id DESC";
        $events = $db->getData($query1);
        //$id= $_SESSION['id'];
    
?>
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Events</h3>
          
        </div>
            <div class="container ">
                        <?php
                        if ($events) {
                            while($event = $events->fetch_assoc()) {
                                ?><br>
                                    <div class="card mb-3" style="max-width: 800px;height:auto;;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4" style="background-color:#424949;color:#fff">
                                                <!--<img src="../img/portfolio/app1.jpg" class="card-img" style="height:100%;" alt="Events Image">
                                           --> <h2  style="padding:30px;text-align:center;"><?php $d=strtotime($event['date']); echo date("d M, Y h:i:sa",$d); ?></h2>
                                            </div>
                                            <div class="col-md-8" style="text-align:left;">
                                                <div class="card-header">
                                                    Event Name: <?php echo $event['name']; ?><br>
                                                   <small class="text-muted"><?php $d=strtotime($event['created_at']); echo date("d M, Y h:i:sa",$d); ?>
                                                    <b> [Batch: <?php //echo $event['batch_name']; 
                                                            $ids = json_decode($event['batch_id']);
                                                            $ids = implode(',', $ids);
                                                            
                                                            $batches = $db->getData("SELECT batches.name FROM `batches` WHERE id IN ($ids)");
                                                            if ($batches->num_rows > 0) {
                                                                while($batch = $batches->fetch_assoc()) {
                                                                    echo $batch['name']. ', ';
                                                                }
                                                            }?>
                                                    Department: <?php //echo $event['department_name']; 
                                                        $ids = json_decode($event['dept_id']);
                                            
                                                        $ids = implode(',', $ids);
                                                        
                                                        $departments = $db->getData("SELECT departments.name FROM `departments` WHERE id IN ($ids)");
                                                        if ($departments->num_rows > 0) {
                                                            while($department = $departments->fetch_assoc()) {
                                                                echo $department['name']. ', ';
                                                            }
                                                        }
                                                ?>]</b></small>
                                                </div>
                                                <div class="card-body" style="padding:20px;">
                                                    
                                                    <p class="card-text"><?php echo substr(Strip_tags($event['content']), 0, 50); ?>..</p>
                                                    <a href="eventdetail.php?id=<?php echo $event['id'];?>" style="float:right;padding:10px;text-align:right;" >Read Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>              
                       
                                            
                        <?php
                        break;
                            }
                        
                                    
                            } 

                     

                            else 
                            {
                        ?>
                                <div class="card text-center"><p>No Events found</p></div>
                            <?php
                            }
                            ?>
                    </div>
            <div class="row">
          <div class="col-lg-12">
         
              <a href="allevents.php" class="btn btn-success btn-block"  >View All Events</a>
          </div>
        </div>
      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <!--
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
      -->
       </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" >
    <div class="footer-top" >
      <div class="container" >
        <div class="row" >

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Alumni Digital Platform</h3>
           </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
               <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="user-list.php">Alumni List</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="job.php">Career Opportunity</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="posts.php">Blog</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="events.php">Events</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>  
              1283 (Level 5), <br>
              Begum Rokeya Sarani,<br>
              Mirpur, Dhaka-1216. <br>
              <strong>Phone:</strong> +8801907-092600<br>
              <strong>Email:</strong> info@datatrixsoft.com<br>
            </p>


          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>About US</h4>
            <p>This system is a platform where alumni and current students can get opportunity to enhance their career and build up a communication with each other. From this platform an alumni can easily get noticed about upcoming events which might be useful to them. To keep record of alumni is one of the missions of this system..</p>
            
          </div>
