<?php include("includes/header.php");?>
 
 <?php 
    if(isset($_GET['delete_question'])){
    $delete_question_id = $_GET['delete_question'];
    $delete_question = "delete from truefalse where questionid = '$delete_question_id'";
    $del_post = mysqli_query($con,$delete_question);  
      
    echo "<script>alert('Question Deleted Successfully!!')</script>";
    echo "<script>window.open('view_question.php','_self');</script>"; 
        
    };
?>
 

<?php include("includes/footer.php");?>


