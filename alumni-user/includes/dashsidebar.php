<div class="col-md-3" >
    <div class="dashboard-sidebar" style="width: 220px;color:#17a2b8;padding:0px;position:fixed;">
        <h3><b>Dashboard</b></h3>
        <ul class="dashboard-nav block">
            <li><a href="profile.php?id=<?php echo $id;?>" style="color:#17a2b8">My Profile</a>
            <ul>
                    <li><a href="edit-userreg.php?edit=<?php echo $id; ?>" style="color:#2C3E50">Update Profile</a></li>
                    
            </ul>
            </li>
            <li>
                <a href="" style="color:#17a2b8">Job Section Manage</a>
                <ul>
                    <li><a href="job-add.php" style="color:#2C3E50">Add New Job</a></li>
                    <li><a href="jobboard.php" style="color:#2C3E50">My Job Post List</a></li>
                </ul>
            </li>
            <li>
                <a href="" style="color:#17a2b8">Blog Manage</a>
                <ul>
                    <li><a href="post-add.php" style="color:#2C3E50">Add New Blog</a></li>
                    <li><a href="dashboard.php" style="color:#2C3E50">My Blog List</a></li>
                </ul>
            </li>
            <li>
                <a href="" style="color:#17a2b8">Event Manage</a>
                <ul>
                    <li><a href="event-add.php" style="color:#2C3E50">Add New Events</a></li>
                    
                </ul>
            </li>
            
        </ul>
    </div>
</div>