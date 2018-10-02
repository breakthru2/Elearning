<?php include("includes/header.php");?>


<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Posts</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Post Id</th>
                            <th>Post Title</th>
                            <th>Category</th>
                            <th>Post Content</th>
                            <th>Post Image</th>  
                            <th>Delete Post</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $cat = "select * from posts";
                        $run_cat = mysqli_query($con,$cat); 
                         $count = 1;
                        while($cat_row = mysqli_fetch_array($run_cat)):
                        $cat_id = $cat_row ['cat_id'];
                        $post_id = $cat_row['post_id'];   
                        $cat_name = $cat_row ['post_title']; 
                        $cat_icon = $cat_row ['post_image'];   
                        $cat_desc = substr($cat_row ['post_content'],0,100); 
                       
                        ?> 
                        <?php 
                        $sql = "select * from categories where cat_id = $cat_id";
                        $query = mysqli_query($con,$sql); 
                         
                        while($row = mysqli_fetch_array($query)):
                        $category = $row['cat_name'];
                       
                        ?>             
                          <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $cat_name;?></td>
                            <td><?php echo $category;?></td>
                            <td><?php echo $cat_desc;?></td>
                            <td><img src="<?php echo 'images/'.$cat_icon; ?>" width="200" height="200"></td> 
                            <td><a href="delete_post.php?delete_post=<?php echo $post_id;?>">Delete</a></td>
                          </tr>
                        <?php endwhile;?>   
                        <?php endwhile;?>   
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
 

<?php include("includes/footer.php");?>


