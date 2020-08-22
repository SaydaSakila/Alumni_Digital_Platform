<div class="col-md-3" >
    <div class="dashboard-sidebar" style="width: 220px;background-color:#ddd;color:#000;padding:10px;position:fixed;">
        <h3>Dashboard</h3>
        <ul class="dashboard-nav block">
            <li><a href="profile.php?id=<?php echo $id;?>" style="color:#000">My Profile</a>
            <ul>
                    <li><a href="edit-userreg.php?edit=<?php echo $id; ?>" style="color:#000">Update Profile</a></li>
                    
            </ul>
            </li>
            <li>
                <a href="" style="color:#000">Blog Manage</a>
                <ul>
                    <li><a href="post-add.php" style="color:#000">Add New Blog</a></li>
                    <li><a href="dashboard.php" style="color:#000">My Blog List</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>