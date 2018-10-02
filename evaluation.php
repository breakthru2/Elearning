<?php include 'includes/header.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>

		<section class="content_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top:40px"> 
            	<h1 class="page-header text-center">Simple True or False Quiz</h1>
<div class="col-md-6 col-md-offset-3">

			<form method="POST" action="check.php">
				<?php
					$iterate = 1;
					$conn = new mysqli('localhost', 'root', '', 'elearning');
					$post_get_id = $_GET['post_id'];
					$_SESSION['my_post_id'] = $post_get_id;
					$sn = $_SESSION['id'];

				$run = "SELECT * from progress WHERE student_id = '$sn' AND post_id = '$post_get_id'";
					$query = mysqli_query($conn,$run);

					if (mysqli_num_rows($query)> 0) {
			 echo "<script>window.open('written.php','_self');</script>"; 
		}else{
					//this will arrange the questions randomly and 10 only
					$sql = "SELECT * FROM truefalse WHERE post_id = $post_get_id ORDER BY rand() LIMIT 10";
					$query = $conn->query($sql);
					if(mysqli_num_rows($query)> 0 ){
						while($row = $query->fetch_array()){
						?>
						<div>
							<input type="hidden" value="<?php echo $row['questionid']; ?>||<?php echo $iterate; ?>" name="questionid[]">
							<p><?php echo $iterate; ?>. <?php echo $row['question']; ?></p>
							<input type="radio" name="answer_<?php echo $iterate; ?>" value="1"> True
	  						<input type="radio" name="answer_<?php echo $iterate; ?>" value="0"> False

						</div><br>
						<?php

					$iterate++;	
					}
				
				
					
				?>
				<button type="submit" class="btn btn-primary">Save</button>
				<?php }else{
					

					?>
					<article class="course-schedule-block">
					<header><h4>No Quiz Under this Course yet!</h4></header>
				</article>
					<?php 
					} } ?>
				<br><br>
				
			</form>
		</div>
            </div>
            
        </div>
    </div>
</section> 
<?php include 'includes/footer.php'; ?>