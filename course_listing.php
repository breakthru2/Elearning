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
                        <header><h1>Courses</h1></header>
                        <div class="row">
                        	 <?php 
    include 'admin/includes/connection.php';
                    $post = "select * from posts";
                    $run_post = mysqli_query($con,$post); 
                    while($post_row = mysqli_fetch_array($run_post)):
                    $post_id = $post_row ['post_id']; 
                    $cat_id = $post_row ['cat_id']; 
                    $post_title = $post_row ['post_title']; 
                    $post_date = $post_row ['post_date']; 
                    $post_author = $post_row ['post_author']; 
                    $post_keywords = $post_row ['post_keywords'];
                    $post_image = $post_row ['post_image'];
                    $post_content = substr($post_row ['post_content'],0,150); 
                    ?>
                            <div class="col-md-4 col-sm-4">
                                <article class="course-thumbnail">
                                    <figure class="image">
                                        <div class="image-wrapper"><a href="single.php?post_id=<?php echo $post_id;?>"><img src="<?php echo 'images/'.$post_image;?>"></a></div>
                                    </figure>
                                    <div class="description">
                                        <a href="single.php?post_id=<?php echo $post_id;?>"><h3><?php echo $post_title;?></h3></a>
                                        <a href="#" class="course-category"><?php echo $post_author;?></a>
                                        <hr>
                                        <div class="course-meta">
                                            <span class="course-date"><i class="fa fa-calendar-o"></i><?php echo $post_date;?></span>
                                           
                                        </div>
                                        <div class="stick-to-bottom"><a href="single.php?post_id=<?php echo $post_id;?>" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                                    </div>
                                </article><!-- /.featured-course -->
                            </div><!-- /.col-md-3 -->
                              <?php endwhile;?> 
                           
                                
                        </div><!-- /.row -->
                    </section><!-- /.course-listing -->
                    <!-- <div class="center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div> -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div style="margin-top:40px">
                <?php include("includes/sidebar.php");?>
            
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>


<?php include 'includes/footer.php'; ?>