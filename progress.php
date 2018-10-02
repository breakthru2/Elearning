<?php include 'includes/header.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section class="course-listing" id="courses">
                        <header><h1>Quiz Scores</h1></header>
                        <div class="row">
                            <?php 
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



                        
                                
                                 <div class="section-content">
                            <article class="event">
                                <figure class="date">
                                    
                                </figure>
                                <aside>
                                    <!-- <img src="<?php echo "admin/images/".$post_image; ?>" width="100" height="100"> -->
                                    <header>
                                       <h1><?php echo $post_title; ?></h1>
                                    </header>

                                    <h3><?php echo $cat_name; ?></h3>
                                    <div class="description">
                                        <p style="color: red">Your Score Was - 
                                        </p>
                                        <div style="width:100px; height: 100px; background-color: AliceBlue; font-size: 40px; padding-left: 10px; "><h1><?php echo $Score."%"; ?></h1></div>
                                    </div>
                                   
                                </aside>
                            </article><!-- /article -->
                           <?php }
                                    }
                                }  ?>
                            
                        </div><!-- /.section-content -->
                        </div><!-- /.row -->
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div style="margin-top:40px">
                <?php include("includes/sidebar.php");?>
            </div> 
        <!-- /.row -->
    </div><!-- /.container -->
</div>


<?php include 'includes/footer.php'; ?>