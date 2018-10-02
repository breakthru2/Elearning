<?php include 'includes/header.php'; ?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Register or Sign in</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
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
                                <form role="form" class="clearfix" action="course-joined.html">
                                    <div class="form-group">
                                        <label for="new-account-name">Full Name</label>
                                        <input type="text" class="form-control" id="new-account-name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-email">Email address</label>
                                        <input type="email" class="form-control" id="new-account-email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-password">Password</label>
                                        <input type="password" class="form-control" id="new-account-password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-repeat-password">Repeat Password</label>
                                        <input type="password" class="form-control" id="new-account-repeat-password" placeholder="Repeat Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">I Understand <a href="#">Terms & Conditions</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right">Create New Account</button>
                                </form>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <section id="account-sign-in" class="account-block">
                                <header><h2>Have an Account?</h2></header>
                                <form role="form" class="clearfix" action="course-joined.html">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn pull-right">Sign In</button>
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
<!-- end Page Content -->

<!-- Footer -->
<footer id="page-footer">
    <section id="footer-top">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-social">
                    <figure>Follow us:</figure>
                    <div class="icons">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-youtube-play"></i></a>
                    </div><!-- /.icons -->
                </div><!-- /.social -->
                <div class="search pull-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </span>
                    </div><!-- /input-group -->
                </div><!-- /.pull-right -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-top -->

    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <aside class="logo">
                        <img src="assets/img/logo-white.png" class="vertical-center">
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Contact Us</h4></header>
                        <address>
                            <strong>University of Universo</strong>
                            <br>
                            <span>4877 Spruce Drive</span>
                            <br><br>
                            <span>West Newton, PA 15089</span>
                            <br>
                            <abbr title="Telephone">Telephone:</abbr> +1 (734) 123-4567
                            <br>
                            <abbr title="Email">Email:</abbr> <a href="#">questions@youruniversity.com</a>
                        </address>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Important Links</h4></header>
                        <ul class="list-links">
                            <li><a href="#">Future Students</a></li>
                            <li><a href="#">Alumni</a></li>
                            <li><a href="#">Give a Donation</a></li>
                            <li><a href="#">Professors</a></li>
                            <li><a href="#">Libary & Health</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>About Universo</h4></header>
                        <p>Aliquam feugiat turpis quis felis adipiscing, non pulvinar odio lacinia.
                            Aliquam elementum pharetra fringilla. Duis blandit, sapien in semper vehicula,
                            tellus elit gravida odio, ac tincidunt nisl mi at ante. Vivamus tincidunt nunc nibh.
                        </p>
                        <div>
                            <a href="" class="read-more">All News</a>
                        </div>
                    </aside>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="assets/img/background-city.png" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright">© Theme Starz, All rights reserved</div><!-- /.copyright -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-bottom -->

</footer>
<!-- end Footer -->

</div>
<!-- end Wrapper -->

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/selectize.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>