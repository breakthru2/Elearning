<?php include 'includes/header2.php'; ?>
    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6">
                            <section id="account-register" class="account-block">
                                <header><h2>Create New Account</h2></header>
                                <form role="form" class="clearfix" action="register2.php" method="post">
                                    <div class="form-group">
                                        <label for="new-account-name">Full Name</label>
                                        <input id="fname" type="text" class="form-control" name="name" placeholder="Name" required=""> 
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-email">Address</label>
                                       <input id="lname" type="text" class="form-control" name="address" placeholder="Address" required=""> 
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-password">Age</label>
                                        <input id="uemail" type="number" class="form-control" name="age" placeholder="Age" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-password">Date of Birth</label>
                                        <input id="uemail" type="date" class="form-control" name="dob" placeholder="Date of Birth" required="">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="new-account-password">Matric Number</label>
                                        <input id="uemail" type="text" class="form-control" name="matric_no" placeholder="Matric text" required="">
                                    </div>
                                     <div class="form-group">
                                        <label for="new-account-password">Department</label>
                                        <input id="uemail" type="text" class="form-control" name="dept" placeholder="Department" required="">
                                    </div>
                                     <div class="form-group">
                                        <label for="new-account-password">Username</label>
                                        <input id="uemail" type="text" class="form-control" name="username" placeholder="Username" required="">
                                    </div>
                                     <div class="form-group">
                                        <label for="new-account-repeat-password">Password</label>
                                        <input type="password" class="form-control" id="new-account-repeat-password" placeholder="Password" name="password1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-repeat-password">Repeat Password</label>
                                        <input type="password" class="form-control" id="new-account-repeat-password" placeholder="Repeat Password" name="password2" required="">
                                    </div>
                                    <button type="submit" class="btn pull-right" name="register">Create New Account</button>
                                </form>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <section id="account-sign-in" class="account-block">
                                <header><h2>Have an Account?</h2></header>
                                <form role="form" class="clearfix" action="login.php" method="post">
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required="">
                                    </div>
                                    <button type="submit" class="btn pull-right" name="submit">Sign In</button>
                                </form>
                                <hr>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae tincidunt.</p>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<?php include 'includes/footer.php'; ?>