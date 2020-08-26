<?php
    $page_title = 'Contact List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT * FROM contacts";
    $contacts = $db->getData($query);
   // $insert_query = "INSERT INTO contacts ( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    //$run = $db->store($insert_query);
?>

    <div class="card">
        <div class="card-header">
            <h3 style="border:2px solid #5c5c5e; border-radius:5px; padding: 7px;"  class="card-title">Contact List</h3>
            
        </div>
        <div class="card-body">
        <?php 

        if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="11" style="text-align:center; background: #17a2b8; color:white;"><h3><b>Category Record</b></h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($contacts) {
                            while($contact = $contacts->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $contact['id'] ?></td>
                                        <td><?php echo $contact['name'] ?></td>
                                        <td><?php echo $contact['email'] ?></td>
                                        <td><?php echo $contact['subject'] ?></td>
                                        <td><?php echo $contact['message'] ?></td>
                                        <td><?php echo $contact['created_at'] ?></td>
                                        <td>
                                            <a href="edit-category.php?edit=<?php echo $contact['id']; ?>" class="btn btn-success"><i class="fas fa-user-edit"></i><b>Edit</b></a>
                                            <a href="delete-category.php?delete=<?php echo $contact['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i><b>Delete</b></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>