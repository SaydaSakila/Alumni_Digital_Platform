<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login-wrapper">
        <div class="table">
            <div class="table-cell">
                <div class="login-box">
                    <div class="login-header">
                        <h2>ADMIN LOGIN</h2>
                    </div>
                    <div class="login-body">
                        <form action="submit/login-submit.php" method="POST">
                            <div class="form-group">
                                <label for="">Email or Username</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email or username">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login_submit" class="login-btn" value="LOGIN">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>