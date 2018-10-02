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
                        <header><h1>Searches</h1></header>
                        <div class="row">
                             <?php 
                    include 'admin/includes/connection.php';
                    if(isset($_GET['search_submit'])){
                    $search_key = $_GET['search'];
                    $search = "select * from posts where post_content like '%$search_key%'";  
                    $run_search = mysqli_query($con,$search);   
                    $count = mysqli_num_rows($run_search);    
                    if($count == 0){
                    echo "<h2>No Result Found.Please Try With Another Keywords.</h2>";        
                    }else{                        
                    while($search_row = mysqli_fetch_array($run_search)): 
                    $post_id = $search_row ['post_id'];   
                    $post_title = $search_row ['post_title']; 
                    $post_date = $search_row ['post_date']; 
                    $post_author = $search_row ['post_author']; 
                    $post_featured_image = $search_row ['post_image'];  
                    $post_keywords = $search_row ['post_keywords'];
                    $post_content = substr($search_row ['post_content'],0,200); 
                    ?> 
                    <div class="single_latest">
                        <h2>Search Result For "<?php echo $search_key;?>" </h2><br>
                        <h1><a href="single.php?post_id=<?php echo $post_id;?>"><?php echo $post_title;?></a></h1>
                        <p style="margin-bottom:10px"><strong><span>Course Author: <em><?php echo $post_author;?></em></span><span> | </span><span>Started Date: <em><?php echo $post_date;?></em></span></strong></p>
                        <?php echo $post_content;?>
                        <div class="readmore clearfix"><a href="single.php?post_id=<?php echo $post_id;?>">Read More</a></div>
                    </div> 
                    <?php endwhile;?> 
                    <?php
                    };};
                    ?>
                
                                
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