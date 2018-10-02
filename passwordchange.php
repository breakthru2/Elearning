<?php 
include 'admin/includes/connection.php';
if(isset($_POST['submit'])){  
                   
                    $password = $_POST ['password'];
                   
 $sn = $_SESSION['id'];
    $update_user = "UPDATE student SET password='".$password."' WHERE id='".$sn."'"; 
    $run_update_user = mysqli_query($con,$update_user);  
        if($run_update_user){
            echo "<script>alert('Password Updated Successfully!!')</script>";
            echo "<script>window.open('account.php','_self');</script>"; 
        }
    } 
?> 