<?php include 'includes/header.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<div id="page-content">
    <div class="container">
        <header><h1>My Account</h1></header>
        <div class="row">
            <div class="col-md-8">
                <section id="my-account">
                    <ul class="nav nav-tabs" id="tabs">
                        <li class="active"><a href="#tab-profile" data-toggle="tab">Profile</a></li>
                        
                        <li><a href="#tab-change-password" data-toggle="tab">Change Password</a></li>
                    </ul><!-- /#my-profile-tabs -->
                    <div class="tab-content my-account-tab-content">
                        <div class="tab-pane active" id="tab-profile">
                            <section id="my-profile">
                                <header><h3>My Profile</h3></header>
                                <div class="my-profile">
                                   
                                    <article>
                                    	 <?php 
                                    	 include 'admin/includes/connection.php';
                                    	 $sn = $_SESSION['id'];
                                    	
            $category = "select * from student where id = '$sn'";
            $run_category = mysqli_query($con,$category); 
            while($category_row = mysqli_fetch_array($run_category)):    
            $id = $category_row ['id'];   
            $name = $category_row ['name'];
            $matric_no = $category_row ['matric_no'];
            $dept = $category_row ['dept'];
            $address = $category_row ['address'];
            $password = $category_row ['password'];

               ?>
                                        <div class="table-responsive">
                                            <table class="my-profile-table">
                                                <tbody>
                                                <tr>
                                                    <td class="title">Full Name</td>
                                                    <td>
                                                       <?php echo $name; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Matric</td>
                                                    <td>
                                                        <?php echo $matric_no; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Department</td>
                                                    <td>
                                                        <?php echo $dept; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Address</td>
                                                    <td>
                                                        <?php echo $address; ?>
                                                    </td>
                                                </tr>
                                                 
                                                </tbody>
                                            </table>
                                        </div>

                                        
                                    </article>
                                </div><!-- /.my-profile -->
                            </section><!-- /#my-profile -->
                        </div><!-- /tab-pane -->
                        
                        <div class="tab-pane" id="tab-change-password">
                            <section id="password">
                                <header><h3>Change Password</h3></header>
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-4">
                                        <p>
                                            To change your password please use this tab
                                        </p>
                                        <form role="form" class="clearfix" action="account.php" method="post">
                                            <div class="form-group">
                                                <label for="current-password">Current Password</label>
                                                <input type="text" class="form-control" id="current-password" value="<?php echo $password;?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-password">New Password</label>
                                                <input type="text" class="form-control" id="new-password" name="password">
                                            </div>
                                            
                                            <button type="submit" class="btn pull-right" name="submit">Change Password</button>
                                        </form>
                                    </div>
                                    <?php endwhile;?> 
                                </div>
                            </section>
                        </div>
                    </div>

<?php include 'includes/footer.php'; ?>
<?php 

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