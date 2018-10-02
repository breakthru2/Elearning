<?php include("includes/header.php");?>


<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Questions</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>S/N</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Delete Question</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $cat = "select * from truefalse";
                        $run_cat = mysqli_query($con,$cat); 
                         $count = 1;
                        while($cat_row = mysqli_fetch_array($run_cat)):
                        $questionid = $cat_row ['questionid'];    
                        $answer = $cat_row ['answer']; 
                        $question = substr($cat_row ['question'],0,100); 
                       
                        ?> 
                                    
                          <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $question;?></td>
                            <td><?php 
                            if($answer == 1){
                                echo "True";
                            }else{
                                echo "False";
                            }
                            ?></td>
                            
                            <td><a href="delete_question.php?delete_question=<?php echo $questionid;?>">Delete</a></td>
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


