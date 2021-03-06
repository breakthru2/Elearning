<?php 
session_start();
if(isset($_SESSION['auth'])){
    $_SESSION['auth'] === true;
}else{
    header("Location: register.php");
}


?>
<!DOCTYPE html>

<html lang="en-US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Theme Starz">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">
    <link rel="stylesheet" href="assets/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>E Learning</title>

</head>

<body class="page-homepage-courses">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<div class="navigation-wrapper">
    <div class="secondary-navigation-wrapper" style="background-color: #955250">
        <div class="container">
            
            <ul class="secondary-navigation list-unstyled pull-right">
               
                <li><a href="logout.php">Log Out</a></li>
                <li><a href=""><i class="fa fa-user"></i> Welcome <?php echo $_SESSION['name']; ?></a></li>
            </ul>
        </div>
    </div><!-- /.secondary-navigation -->
    <div class="primary-navigation-wrapper" style="background-color: #955250">
        <header class="navbar" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="index_home.php"><img src="assets/img/logo.png" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation" >
                    <ul class="nav navbar-nav">
                        
                        <li>
                            <a href="index_home.php">Home</a>
                        </li>
                        <li>
                            <a href="course_listing.php">Courses</a>
                        </li>
                        <li>
                            <a href="categories.php">Categories</a>
                        </li>
                        <li>
                            <a href="progress.php">My Progress Report</a>
                        </li>
                         <li>
                            <a href="account.php#tab-profile">My Profile</a>
                        </li>
                        
                    </ul>
                </nav><!-- /.navbar collapse-->
            </div><!-- /.container -->
        </header><!-- /.navbar -->
    </div><!-- /.primary-navigation -->