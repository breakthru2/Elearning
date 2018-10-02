<?php include 'includes/header.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<!-- end Header -->

<!-- Homepage Slider -->
<section id="homepage-slider">
    <div class="flexslider">
        <ul class="slides">
            <li class="slide">
                <figure>
                    <div class="slide-wrapper">
                        <div class="inner">
                            <div class="container">
                                
                            </div>
                        </div><!-- /.inner -->
                    </div><!-- /.wrapper -->
                </figure>
                <img src="images/1.jpg">
            </li>
            <li class="slide">
                <figure>
                    <div class="slide-wrapper">
                        <div class="inner">
                            <div class="container">
                               
                            </div>
                        </div><!-- /.inner -->
                    </div><!-- /.wrapper -->
                </figure>
                <img src="images/2.jpg">
            </li>
        </ul>
    </div>
</section>
<!-- end Homepage Slider -->

<!-- Page Content -->
<div id="page-content">
    <section id="featured-courses">
        <div class="block">
            <div class="container">
                <header><h2>Featured Courses</h2></header>
                <div class="row">
                     <?php 
    include 'admin/includes/connection.php';
                    $post = "select * from posts LIMIT 4";
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
                    <div class="col-md-3 col-sm-3">
                        <article class="featured-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="single.php?post_id=<?php echo $post_id;?>"><img src="<?php echo 'images/'.$post_image;?>"></a></div>
                            </figure>
                            <div class="description">
                                <a href="single.php?post_id=<?php echo $post_id;?>"><h3><?php echo $post_title;?></h3></a>
                                <a href="#" class="course-category"><?php echo $post_author;?></a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i><?php echo $post_date;?></span>
                                    <!-- <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span> -->
                                </div>
                                <div class="stick-to-bottom"><a href="single.php?post_id=<?php echo $post_id;?>" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.featured-course -->
                    </div><!-- /.col-md-3 -->
                     <?php endwhile;?> 
                    <!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="background background-color-grey-background"></div>
        </div><!-- /.block -->
    </section>
    <!-- /#featured-courses -->

    <section id="latest-courses">
        <div class="block">
            <div class="container">
                <header><h2>Categories</h2></header>
                <div class="row">
                     <?php 
            $category = "select * from categories ORDER BY rand() LIMIT 6";
            $run_category = mysqli_query($con,$category); 
            while($category_row = mysqli_fetch_array($run_category)):    
            $cat_id = $category_row ['cat_id'];   
            $cat_name = $category_row ['cat_name'];   
            $cat_desc = substr($category_row ['cat_desc'],0,100);   
            $cat_icon = $category_row ['cat_icon'];    
            ?>
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="single-category.php?cat_id=<?php echo $cat_id;?>"><i class="<?php echo $cat_icon; ?>"></i></a></div>
                            </figure>
                            <aside class="description">
                                <a href="single-category.php?cat_id=<?php echo $cat_id;?>"><h4><?php echo $cat_name; ?></h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p><?php echo $cat_desc; ?></p>
                                
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                     <?php endwhile;?>  
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- /#latest-courses -->

   

    

   
   

</div>
<!-- end Page Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>