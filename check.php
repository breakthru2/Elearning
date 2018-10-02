<?php include 'includes/header.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<section class="content_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top:40px"> 
            	<h1 class="page-header text-center">Quiz Answer</h1>
<div class="col-md-6 col-md-offset-3">

			<?php
			$conn = new mysqli('localhost', 'root', '', 'elearning');

			$score = 0;

			foreach($_POST['questionid'] as $question):
				$info = explode("||", $question);

				$questionid = $info[0];
				$iterate = $info[1];

				$sql = "SELECT * FROM truefalse WHERE questionid = '$questionid'";
				$query = $conn->query($sql);
				$row = $query->fetch_array(); 

				?>
				<div>
					<p><?php echo $iterate; ?>. <?php echo $row['question']; ?></p>
					<p>Correct Answer: <?php if($row['answer']==1){ echo 'True';} else{ echo 'False';} ?></p>
					<?php
						if (isset($_POST['answer_'.$iterate])){
							?>
							You Answered: <?php if($_POST['answer_'.$iterate] == 1){echo 'True';} else{echo 'False';} ?><br>
							<?php
							if ($_POST['answer_'.$iterate] == $row['answer']){
								echo '<span class="glyphicon glyphicon-check"></span> Correct<br><br>';
								$score = $score + 1;
							}
							else{
								echo '<span class="glyphicon glyphicon-remove"></span> Wrong<br><br>';
							}
						}
					?>		
				</div>
				<?php
				
			endforeach;

		?>
		<h2>Score: <?php echo $score."0%"; ?></h2>
		<?php 
		include 'admin/includes/connection.php';
		$post_id = $_SESSION['my_post_id'];
		$sn = $_SESSION['id'];
		$score_n = $score."0";
		$run = "SELECT * from progress WHERE student_id = '$sn' AND post_id = '$post_id'";
		$query = mysqli_query($con,$run);
		if (mysqli_num_rows($query)> 0) {
			 echo "<script>window.open('written.php','_self');</script>"; 
		}else{
			$sql = "INSERT INTO progress (Score,post_id,student_id) VALUES ('$score_n','$post_id','$sn')";
		//$sql = "UPDATE student SET Score = '$score_n' WHERE id = '$sn'";
		$run_query_cat = mysqli_query($con,$sql);
		if($run_query_cat){
            echo "<script>alert('Answers Submitted Successfully!!')</script>";
            //echo "<script>window.open('insert_category.php','_self');</script>"; 
        }
		}
		
		?>
		</div>
            </div>
            
        </div>
    </div>
</section> 
<?php include 'includes/footer.php'; ?>