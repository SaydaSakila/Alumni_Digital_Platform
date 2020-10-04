<?php
    $page_title = 'Memory Create';
    // header include
	include dirname(__FILE__).'/includes/header.php';
	 $query = "SELECT * FROM `images` WHERE `status`=0";
    $posts = $db->getData($query);
?>
 <div class="row">
            <div class="container" style="margin-top:150px;margin-bottom:200px;margin-left:400px;">
            
				<h1 class="section-title" style="margin-left:400px;">Gallery</h1>
				<?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>	
								<div class="gallery">
									<div class="zoom">
										<img src="uploads/<?php echo $post['image']; ?>" >
									</div>
									<div class="title" style="text-align:center;"><?php echo $post['title']; ?></div>
								</div>
								   <?php
                               
                            }
                        } else {
                            ?>
                            <div class="img">No Image found</div>
                        <?php
                        }
                    ?>	
            
			</div>
</div>
<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>