<?php include("includes/header.php");?>
<style type="text/css">
	input[type=checkbox]{
		width: 10%;
	}
</style>
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>Add Questions</h2>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                      	<p>
                            <label for="post_categories">Course Category</label>
                            <select name="post_id2" id="select_cat" required="">
                                <option value="Select a category">Select a Course</option>
                                <?php 
                                $cat = "select * from posts";
                                $run_cat = mysqli_query($con,$cat); 
                                while($cat_row = mysqli_fetch_array($run_cat)):
                                $post_id = $cat_row['post_id'];
                                $post_title = $cat_row['post_title'];
                                ?>
                                <option value="<?php echo $post_id;?>"><?php echo $post_title;?></option>
                                <?php endwhile;?>
                            </select>
                        </p> 
                        <p>
                            <label for="cat_name">Question 1</label>
                            <input type="text" placeholder="Question 1" name="question1" required="">
                            <input type="number" placeholder="True = 1 or False = 0" name="answer1" required="">
                        </p>
                        <p>
                            <label for="cat_name">Question 2</label>
                            <input type="text" placeholder="Question 2" name="question2" required="">
                            <input type="number" placeholder="True = 1 or False = 0" name="answer2" required="">
                        </p>
                        <p>
                            <label for="cat_name">Question 3</label>
                            <input type="text" placeholder="Question 3" name="question3" required="">
                            <input type="number" placeholder="True = 1 or False = 0" name="answer3" required="">
                        </p>
                        <p>
                            <label for="cat_name">Question 4</label>
                            <input type="text" placeholder="Question 4" name="question4" required="">
                            <input type="number" placeholder="True = 1 or False = 0" name="answer4" required="">
                        </p>
                        <p>
                            <label for="cat_name">Question 5</label>
                            <input type="text" placeholder="Question 5" name="question5" required="">
                            <input type="number" placeholder="True = 1 or False = 0" name="answer5" required=""     >
                        </p>
                        <p> 
                            <input type="submit" value="Publish" name="submit">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 




if(isset($_POST['submit'])){ 

$post_id2 = $_POST['post_id2']; 
$question1 = $_POST['question1']; 
$question2 = $_POST['question2']; 
$question3 = $_POST['question3']; 
$question4 = $_POST['question4']; 
$question5 = $_POST['question5']; 
//True and false options

$answer1 = $_POST['answer1']; 
$answer2 = $_POST['answer2']; 
$answer3 = $_POST['answer3']; 
$answer4 = $_POST['answer4']; 
$answer5 = $_POST['answer5'];

$question = array(

		array($question1, $answer1),
		array($question2, $answer2),
		array($question3, $answer3),
		array($question4, $answer4),
		array($question5, $answer5),
		
		);
$arrlength = count($question);

		
		
		for ($i=0; $i < $arrlength; $i++) { 
			$my_question = $question[$i][0];
				$my_ans = $question[$i][1];
				$sql = "INSERT INTO truefalse (question,answer,post_id) VALUES ('$my_question','$my_ans','$post_id2')";
		$run_query_cat = mysqli_query($con,$sql);
		}
		
        
		
		if($run_query_cat){
            echo "<script>alert('Questions Published Successfully!!')</script>";
            //echo "<script>window.open('insert_category.php','_self');</script>"; 
        }



  
    // if($question == '' OR $cat_desc == '' OR $cat_icon == ''){
    // echo "<script>alert('Please Fill All The Fields')</script>";
    //     exit();
    // }
    // else{
     
    // $insert_cat = "insert into categories (cat_name,cat_desc,cat_icon) values ('$cat_name','$cat_desc','$cat_icon')";
    // $run_query_cat = mysqli_query($con,$insert_cat);
    //     if($run_query_cat){
    //         echo "<script>alert('Category Published Successfully!!')</script>";
    //         echo "<script>window.open('insert_category.php','_self');</script>"; 
    //     }
    // }
}
?>

<?php include("includes/footer.php");?>