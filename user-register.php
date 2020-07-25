<?php
    $page_title = 'Create User';
    // include header file
    include dirname(__FILE__). '/includes/header.php';
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New User</h3>
            </div>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="_name">Name</label>
                        <input type="text" name="name" id="_name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="_email">Email</label>
                        <input type="email" name="email" id="_email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="_username">Username</label>
                        <input type="text" name="username" id="_username" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="_pass">Password</label>
                        <input type="password" name="password" id="_pass" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="_phone">Phone</label>
                        <input type="text" name="phone" id="_phone" class="form-control" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="_address">Address</label>
                        <input type="text" name="address" id="_address" class="form-control" placeholder="Enter Address">
                    </div>
                </div>
                <div class="card-footer" style="width:100%">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="register_form">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>