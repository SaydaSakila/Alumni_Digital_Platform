<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="assets/img/data.png"
           alt="Datatrix Logo"
           class="brand-image  elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-dark">Soft</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/avataar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $name; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-users"></i>
              <p>
                Batch Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="batch-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Batch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="batch.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Batch List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-building"></i>
              <p>
                Department Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="department-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="department.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department List</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- User manage list-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Alumni Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user-register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user-list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alumni List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-users"></i>
              <p>
                Student Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student-register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student-list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fab fa-blogger"></i>
            <p>
              Blog Manage
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="category.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Categories</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="uposts.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Alumnis Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="sposts.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Students Blog</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
                <a href="comments.php" class="nav-link"  >
                  <i class="nav-icon fas fa-address-book"></i>
                  <p >Comment List</p>
                </a>
              </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Job Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="job-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Job</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jobboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job List</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Event Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="event-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="events.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event List</p>
                </a>
              </li>
            </ul>
          </li>
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Gallery Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="image-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Photo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gallery.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo List</p>
                </a>
              </li>
            </ul>
          </li>

              <li class="nav-item">
                <a href="contact.php" class="nav-link"  >
                  <i class="nav-icon fas fa-address-book"></i>
                  <p >Contact List</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="logout.php" class="nav-link"  >
                  <i class="fas fa-sign-out-alt" style="margin-left:5px"></i>
                  <p style="margin-left:9px;">Logout</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>