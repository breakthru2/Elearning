<?php include("includes/header.php");?>  
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>Edit Student</h2>
                    <?php 
                    if(isset($_GET['edit_user'])){
                    $user_get_id = $_GET['edit_user'];
                    $user = "select * from student where id = '$user_get_id'";
                    $run_user = mysqli_query($con,$user); 
                    while($user_row = mysqli_fetch_array($run_user)):  
                    $id = $user_row ['id']; 
                    $name = $user_row ['name'];
                    $address = $user_row ['address'];
                    $age = $user_row ['age'];
                    $dept = $user_row ['dept'];
                    $matric_no = $user_row ['matric_no'];
                    $username = $user_row ['username'];
                    $password = $user_row ['password'];
                    $dob = $user_row ['dob'];
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                        <p>
                            <label for="user_fname">Name</label>
                            <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name;?>" required>
                        </p> 
                        <p>
                            <label for="user_fname">Address</label>
                            <input type="text" placeholder="Enter Address" name="address" value="<?php echo $address;?>" required>
                        </p> 
                        <p>
                            <label for="user_fname">Age</label>
                            <input type="number" placeholder="Enter Age" name="age" value="<?php echo $age;?>" required>
                        </p>
                        <p>
                            <label for="user_fname">Address</label>
                            <input type="text" placeholder="Enter Address" name="address" value="<?php echo $address;?>" required>
                        </p>
                        <p>
                            <label for="user_fname">Matric Number</label>
                            <input type="text" placeholder="Enter Matric Number" name="matric_no" value="<?php echo $matric_no;?>" required>
                        </p>
                        <p>
                            <label for="user_fname">Username</label>
                            <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username;?>" required>
                        </p>
                        <p>
                            <label for="user_fname">Password</label>
                            <input type="text" placeholder="Enter password" name="password" value="<?php echo $password;?>" required>
                        </p>
                        <p>
                            <label for="user_fname">Date of birth</label>
                            <input type="date" placeholder="Enter Date of birth" name="dob" value="<?php echo $dob;?>" required>
                        </p>
                        
                        <p> 
                            <input type="submit" value="Update" name="update_user">
                        </p>
                    </form>
                    <?php endwhile;?>
                    <?php };?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
if(isset($_POST['update_user'])){  
                    $id = $_POST ['id']; 
                    $name = $_POST ['name'];
                    $address = $_POST ['address'];
                    $age = $_POST ['age'];
                    $dept = $_POST ['dept'];
                    $matric_no = $_POST ['matric_no'];
                    $username = $_POST ['username'];
                    $password = $_POST ['password'];
                    $dob = $_POST ['dob'];

    $update_user = "UPDATE student SET name='".$name."',address='".$address."',age='".$age."',dept='".$dept."',matric_no='".$matric_no."',username='".$username."',password='".$password."',dob='".$dob."' WHERE id='".$user_get_id."'"; 
    $run_update_user = mysqli_query($con,$update_user);  
        if($run_update_user){
            echo "<script>alert('Student Updated Successfully!!')</script>";
            echo "<script>window.open('all_learners.php','_self');</script>"; 
        }
    } 
?> 
<?php include("includes/footer.php");?>


