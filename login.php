<?php 
include 'admin/includes/connection.php';
if(isset($_POST['submit'])){
$user = $_POST['username'];       
$pass = $_POST['password']; 
$login_query = "select * from student where username='$user' AND password='$pass'";
$run_login = mysqli_query($con,$login_query);
    session_start(); 
    while($row = mysqli_fetch_array($run_login)){
    	$name = $row ['name'];   
        $_SESSION['name'] = $name;
        $id = $row ['id'];   
        $_SESSION['id'] = $id;
    }
    if(mysqli_num_rows( $run_login ) > 0 ){
    	$_SESSION['auth'] = true;
        $_SESSION['username'] = $user; 
        echo "<script>window.open('index_home.php','_self');</script>"; 
 
    }
    else{
        echo "<script>alert('Username Or Password is incorrect !!!');
        window.open('register.php','_self');
        </script>";
    }
}        
        
?> 