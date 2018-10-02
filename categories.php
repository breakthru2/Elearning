<?php include 'includes/header.php'; 
		include 'admin/includes/connection.php';
?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<section id="latest-courses">
        <div class="block">
            <div class="container">
                <header><h2>Categories</h2></header>
                <div class="row">
                     <?php 
            $category = "select * from categories";
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
<?php include 'includes/footer.php'; ?>