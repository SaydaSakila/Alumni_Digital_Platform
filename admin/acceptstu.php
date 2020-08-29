
<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;
     $id = $_GET['id'];
    $query1 = "SELECT * FROM `sturequests` WHERE `id` = '$id'";
    $request = $db->getData($query1);
  
        $req = $request->fetch_assoc();

            $name = $req['name'];
            $username = $req['username'];
            $email = htmlspecialchars(trim($req['email']));
            $department = htmlspecialchars(trim($req['dept_id']));
            $password = $req['password'];
           // $confpassword = $req['confpassword'];
            $batch = $req['batch_id'];
            
                // store register
                $insert_query = "INSERT INTO students (`id`, `name`, `username`, `email`, `dept_id`, `password`, `batch_id`) 
                    VALUES(NULL, '$name', '$username', '$email', $department, '$password', '$batch')";
                $run = $db->store($insert_query);

                if ($run) 
                {
                    echo "Account has been accepted.";
                    $query = "DELETE FROM `sturequests` WHERE `sturequests`.`id` = '$id'";
                    $result = $db->conn->query($query);

                } 
                else 
                {
                    $success['error_message'] = "Student Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:index.php');

?>

