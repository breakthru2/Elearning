<!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside id="related-courses">
                        <header>
                            <h2>Latest Courses</h2>
                        </header>
                         <?php 
    include 'admin/includes/connection.php';
                    $post = "select * from posts LIMIT 3";
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
                        <article class="course-thumbnail small">
                            <figure class="image">
                                <div class="image-wrapper"><a href="single.php?post_id=<?php echo $post_id;?>"><img src="<?php echo 'images/'.$post_image;?>"></a></div>
                            </figure>
                            <div class="description">
                                <a href="single.php?post_id=<?php echo $post_id;?>"><h3><?php echo $post_title;?></h3></a>
                               
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i><?php echo $post_date;?></span>
                                    
                                </div>
                                <div class=""><a href="single.php?post_id=<?php echo $post_id;?>" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.course-thumbnail .small -->
                         <?php endwhile;?>
                        </div><!-- /.section-content -->
                        
                    </aside><!-- /.news-small -->
                   
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->