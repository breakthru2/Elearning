
<?php 
include 'includes/header.php';
                            	include 'admin/includes/connection.php';
                            	$sn = $_SESSION['id'];

$sql = "SELECT progress.post_id,posts.post_title,categories.cat_name,progress.Score,posts.post_image FROM `progress` INNER JOIN posts ON posts.post_id = progress.post_id INNER JOIN categories on categories.cat_id = posts.cat_id WHERE progress.student_id = '$sn'";
                               
                                $query = mysqli_query($con, $sql);
                                if ($query) {
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($row = mysqli_fetch_array($query)) {
                                            $Score = $row['Score'];
                                            $post_image = $row['post_image'];
                                            $cat_name = $row['cat_name'];
                                            $post_title = $row['post_title'];
                                        							
                            	 ?>

<img src="<?php echo "admin/images/".$post_image; ?>" width="100" height="100">

                         <?php }
                                    }
                                }  ?>
                                 </div>
           

                                <div style="margin-top:40px">
                <?php include("includes/sidebar.php");?>
            </div> 
        
    </div>
</section>  
<?php include 'includes/footer.php'; ?>