<?php 
include 'admin/includes/connection.php';
include 'includes/snippet.php';
if(isset($_POST['register'])){

        //Getting the values from the forms
        $name = sanitize(trim($_POST['name']));
        $username = sanitize(trim($_POST['username']));
        $password1 = sanitize(trim($_POST['password1']));
        $password2 = sanitize(trim($_POST['password2']));
        $address = sanitize(trim($_POST['address']));
        $age = sanitize(trim($_POST['age']));
        $dept = sanitize(trim($_POST['dept']));
        $matric_no = sanitize(trim($_POST['matric_no']));
        $dob = sanitize(trim($_POST['dob']));
//Check if the password matches
        if ($password1 == $password2) {
            //create an sql statement
        $sql =
         "INSERT INTO student(id, name, address, age, dept, matric_no, username, password, dob) values ('', '$name', '$address', '$age', '$dept', '$matric_no', '$username', '$password1', '$dob')";
         
         

        //query the database
        $query = mysqli_query($con, $sql);
        $error = false;

        if ($query) {
        $error = true;
         echo "<script>alert('Successfully added! Login here');
        location.href ='register.php';
                    </script>"; 
        //header("Location:index.php");
       
        }
        else {
        echo "<script>alert('Admin not added!');
        location.href ='index.php';
                    </script>"; 
        }

        }

        else {
            echo  "<script>alert('Password mismatched!')</script>";
        }

        
    } 
        
?> 