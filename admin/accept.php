
<?php
    include dirname(__FILE__).'/../database/database.php';
    session_start();
    $db = new Database();
    $errors = [];
    $success = [];
    $_SESSION['old_data'] = $_POST;
     $id = $_GET['id'];
    $query = "SELECT * FROM `requests` WHERE `id` = '$id'; ";
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
            $passingyear = $req['passingyear'];
        
        
                // store register
                $insert_query = "INSERT INTO users (`id`, `name`, `username`, `email`, `dept_id`, `password`, `batch_id`, `passingyear`) 
                    VALUES(NULL, '$name', '$username', '$email', $department, '$password', '$batch', '$passingyear')";
                $run = $db->store($insert_query);
                
                
                 //var_dump($run);
                if ($run) 
                {
                    
                   // $success['success_message'] = "Alumni $name Registered Successfully";
                    //$success['success_message'] = "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.!')</script>";
                    echo "Account has been accepted.";
                     //$success['success_message'] = "Alumni $name Account has been accepted.";

                } 
                else 
                {
                    $success['error_message'] = "Alumni Register Failed ".$db->error;
                }
                $_SESSION['success'] = $success;
                header('location:index.php');

        }
       $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        

    }


?>

