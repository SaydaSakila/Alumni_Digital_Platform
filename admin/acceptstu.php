
<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;
     $id = $_GET['id'];
    $query = "SELECT * FROM `sturequests` WHERE `id` = '$id'; ";
    $request = $db->getData($query);
    if ($request) {
        while($req = $request->fetch_assoc()) {

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
                
                
                 //var_dump($run);
                if ($run) 
                {
                    
                   // $success['success_message'] = "Student $name Registered Successfully";
                    //$success['success_message'] = "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.!')</script>";
                    echo "Account has been accepted.";
                     //$success['success_message'] = "Student $name Account has been accepted.";

                } 
                else 
                {
                    $success['error_message'] = "Student Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:index.php');

        }
       $query .= "DELETE FROM `sturequests` WHERE `sturequests`.`id` = '$id';";
        

    }


?>

