 <?php 
    include 'includes/header.php';
                    $post = "select * from posts ORDER BY rand() LIMIT 5";
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
                    <div class="single_latest">
                        <h4><a href="single.php?post_id=<?php echo $post_id;?>"><?php echo $post_title;?></a></h4>
                        <p style="margin-bottom:10px"><strong><span>Course Author: <em><?php echo $post_author;?></em></span><span> | </span><span>Started Date: <em><?php echo $post_date;?></em></span></strong></p>
                        <?php echo $post_content;?>
                        <?php echo 'images/'.$post_image;?>
                        <div class="readmore clearfix"><a href="single.php?post_id=<?php echo $post_id;?>">Read More</a></div>
                    </div> 
                    <?php endwhile;

    include 'includes/footer.php';
?> 



<div class="col-md-3 col-sm-3">
                        <article class="featured-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-02.jpg"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html"><h3>Architecture Photography: Power of Light and Shadows</h3></a>
                                <a href="#" class="course-category">Photography</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class="stick-to-bottom"><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.featured-course -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <article class="featured-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-03.jpg"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html"><h3>How to find long term customers</h3></a>
                                <a href="#" class="course-category">Marketing</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class="stick-to-bottom"><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.featured-course -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <article class="featured-course clearfix">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-04.jpg"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html"><h3>Neuroscience for the Beginners: Complete Course</h3></a>
                                <a href="#" class="course-category">Science</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class="stick-to-bottom"><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.featured-course -->
                    </div>