
<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;
     $id = $_GET['id'];
    $query1 = "SELECT * FROM `requests` WHERE `id` = '$id' ";
    $request = $db->getData($query1);
   
        $req = $request->fetch_assoc();

            $name = $req['name'];
            $username = $req['username'];
            $email = htmlspecialchars(trim($req['email']));
            $department = htmlspecialchars(trim($req['dept_id']));
            $password = $req['password'];
            $batch = $req['batch_id'];
            $passingyear = $req['passingyear'];

                // store register
                $insert_query = "INSERT INTO users (`id`, `name`, `username`, `email`, `dept_id`, `password`, `batch_id`, `passingyear`) 
                    VALUES(NULL, '$name', '$username', '$email', $department, '$password', '$batch', '$passingyear')";
                $run = $db->store($insert_query);
                 //var_dump($run);
                if ($run) 
                {
                   
                    echo "Account has been accepted.";
                     $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id'";
                     $result = $db->conn->query($query);
                } 
                else 
                {
                    $success['error_message'] = "Alumni Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:index.php');

?>

