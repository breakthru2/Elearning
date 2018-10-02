<?php include 'includes/header.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<section class="content_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top:40px"> 
                <div class="our_latest_courses">
                    <?php 
                    include 'admin/includes/connection.php';
                    if(isset($_GET['post_id'])){
                    $post_get_id = $_GET['post_id'];
                    $post = "select * from posts where post_id = '$post_get_id'";
                    $run_post = mysqli_query($con,$post); 
                    while($post_row = mysqli_fetch_array($run_post)):
                    $post_id = $post_row ['post_id']; 
                    $cat_id = $post_row ['cat_id']; 
                    $post_title = $post_row ['post_title']; 
                    $post_date = $post_row ['post_date']; 
                    $post_author = $post_row ['post_author']; 
                    $post_featured_image = $post_row ['post_image'];  
                    $post_keywords = $post_row ['post_keywords'];
                    $post_content = $post_row ['post_content']; 
                    $post_video = $post_row ['video_link']; 
                    $post_pdf = $post_row ['pdf']; 
                    ?>

                    <div class="single_latest"> 
                        <div class="section_title text-center">
                         <h2><?php echo $post_title;?></h2>
                          <?php    
                            if(isset($_SESSION['name'])):
                           ?> 

                            <img src="admin/images/<?php echo $post_featured_image;?>" width="600" height="300">

                            <?php echo $post_content;?>                            
                           <iframe src="<?php echo $post_video;?>" width="100%" height="350" frameborder="0" style="border:0"></iframe>


                            <?php else:?>
                            <p>You must <a href="login.php">Login</a> to see this course.</p></br>
                            <?php endif;?>
                            <div class="course_meta">
                                <span><strong>Author : </strong><?php echo $post_author;?></span> 
                                <span><strong>Keywords : </strong><?php echo $post_keywords;?></span> 
                                <span><strong>Publish Date : </strong><?php echo $post_date;?></span>
                                <span><strong>PDF : </strong><a href="<?php echo 'admin/uploads/'.$post_pdf;?>"><?php echo $post_pdf;?></a></span> <br>
                                <span><strong>Progress </strong><a href="evaluation.php?post_id=<?php echo $post_id?>" style="font-size: 20px; color: red; font-family: tahoma;">Click Here To Answer Quiz</a></span> 

                            </div>
                        </div> 
                    </div> 
                    <?php endwhile;?> 
                    <?php };?>

                </div>
            </div>
            <div style="margin-top:40px">
                <?php include("includes/sidebar.php");?>
           
        </div>
    </div>
</section> 
<?php include 'includes/footer.php'; ?>