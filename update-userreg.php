<?php 
     $page_title = 'Update User';
    // include header file
    include dirname(__FILE__). '/includes/header.php';


    if(isset($_POST['update_userinfo'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];


        if(!empty($name) && !empty($username) && !empty($phone) && !empty($email) && !empty($address) && !empty($password) ){
            $sql = "UPDATE users SET name='$name', username='$username',
            phone='$phone', email='$email', address='$address', password='$password' where id='$id' ";
            //var_dump($sql) ; die();

            $result = $this->conn->query($sql);
            //var_dump($result) ; die();

            if($result){
                 $message='Data Updated Successfully';
                header('Location:user-list.php');
            } 
            else{
                 $message='Something went wrong';
                
            }
            
        }
        else{
             $message = 'All fields are required';
            
        }
         
    }
    

    
?>
<?php
    // include footer file
    include dirname(__FILE__). '/includes/footer.php';
?>