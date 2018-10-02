<?php include("includes/header.php");?>


<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Learners</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Learners Id</th>
                            <th>Name</th>
                            <th>Matric Number</th>
                            <th>Department</th>
                            <th>Delete</th>
                            <th>Edit</th>  
                             
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $user = "select * from student";
                        $run_user = mysqli_query($con,$user); 
                        $count = 1;
                        while($user_row = mysqli_fetch_array($run_user)):
                        $user_id = $count++; 
                        $id = $user_row['id'];  
                        $fname = $user_row ['name']; 
                        $lname = $user_row ['matric_no']; 
                        $uemail = $user_row ['dept'];   
                        
                        ?>             
                          <tr>
                            <td><?php echo $user_id;?></td>
                            <td><?php echo $fname;?></td>
                            <td><?php echo $lname;?></td>
                            <td><?php echo $uemail;?></td> 
                            <td><a href="delete_student.php?del_user=<?php echo $id;?>">Delete</a></td>
                            <td><a href="edit_student.php?edit_user=<?php echo $id;?>">Edit</a></td>
                          </tr>
                        <?php endwhile;?>   
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
 

<?php include("includes/footer.php");?>


