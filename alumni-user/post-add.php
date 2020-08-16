<?php
    $page_title = 'Post Create';
    // header include
   // include dirname(__FILE__). '/includes/header.php';

    //$query = "SELECT * FROM categories";
   // $categories = $db->getData($query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumni Digital Platform</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card" style="">
            <div class="card-header">
                <h3 style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;" class="card-title">Create Blog</h3>
                
            </div>
            <div class="card-body">
                <?php 
                    if (isset($message['success_message'])) {
                        echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
                    }
                    if (isset($message['error_message'])) {
                        echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
                    }
                ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['title'])) {
                                    echo $err['title'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Enter Blog Content"></textarea>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['content'])) {
                                    echo $err['content'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category"  class="form-control">
                            <option value="">Select Category</option>
                            <?php
                                if ($categories) {
                                    while($category = $categories->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['category'])) {
                                    echo $err['category'];
                                }
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="post_submit">Save Blog</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
                            </body>
                            </html>
<?php
    // footer include
   // include dirname(__FILE__). '/includes/footer.php';
?>