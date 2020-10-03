<?php 
    
    //include database 
     include dirname(__FILE__).'../../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if(isset($_POST['alu-update_post']))
	{
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category = $_POST['category'];


        if(!empty($title) && !empty($content) && !empty($category))
        {
             $file_rename = ''; 
            
            if (isset($_FILES['image'])) {
                $file_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $allow = ['jpg', 'png', 'jpeg', 'gif'];
        
                //extension
                $div = explode('.', $file_name);
                $ext = strtolower(end($div));

            
               //check extension
                if (!in_array($ext, $allow)) {
                    $file_errors[] = 'File must be the following type: '. implode(', ', $allow);
                }
                
                if ($file_size > (1024*5024)) {
                    $file_errors[] = "File size should be more than 4MB";
                } 
                
                if (empty($file_errors)) {
                    $file_rename = substr(md5(time()), 0, 10).'.'.$ext;
                    $upload_directory = '../uploads/'. $file_rename;

                    if (!move_uploaded_file($tmp_name, $upload_directory)) {
                        $_SESSION['file_errors'] = ['Faled to upload file'];
                        header('location:edit-post.php');
                    }
                } else {
                    $_SESSION['file_errors'] = $file_errors;
                    header('location:edit-post.php');
                }
            }
	        $sql = "UPDATE uposts SET title='$title', content='$content',
                category_id='$category', photo='$file_rename' where id='$id' ";
            $result = $db->conn->query($sql);

            if($result){
                $_SESSION['message'] = "Blog ID $id Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:posts.php');
            } 
            else{
                $_SESSION['message'] = "Blog Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:posts.php');
            }
            
        }
        else
        {
            if (empty($title)) 
            {
                $errors['title'] = "Blog Title Field Can not be Empty";            
            }
            if (empty($content)) 
            {
                $errors['content'] = "Blog Content Field Can not be Empty";            
            }
            if (empty($category)) 
            {
                $errors['category'] = "Blog Category Field Can not be Empty";            
            }
            $_SESSION['errors'] = $errors;
            header('location:edit-post.php');
        }
         
    }
 
?>