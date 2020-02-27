<?php //session_start(); ?>
<!---->
<?php //include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>lodge disease</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="css/swiper.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <!-- Styles -->
    <link href="style.css" rel="stylesheet">
</head>
<body class="single-page blog-page">
<header class="site-header">
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">

                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                            <li class="current-menu-item"><a href="index.html">Home</a></li>
                            <li><a href="view_disease.php">View Disease Related Ailments</a></li>
                            <li><a href="Org/chart/report.html">Report Screen</a></li>
                            <li><a href="lodge_login.php">Lodge Disease Related Ailments</a></li>
                            <li><a href="contact.html">Contact</a></li>

                            <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                <a class="d-flex justify-content-center align-items-center" href="#"><img
                                            src="images/emergency-call.png"> +234 706 614 4702</a>
                            </li>
                        </ul>
                    </nav><!-- .site-navigation

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Disease / Ailment lodging page</h3>

                <div class="breadcrumbs">
                    <br>
                    <!--<ul class="d-flex flex-wrap align-items-center p-0 m-0">-->
                    <br>
                    <h4>Only the admin(s) / designated personnel(s) </h4>
                        <h4> have access to this operation </h4>
                    <li>If you have any information that you want us lodge about any disease related ailments, </li>
                       <li> kindly use the contact form via the contact link on the menu bar and your request will be processed </li>
<!---->
<!--                    <li>kindly use the contact form via the contact link on the menu bar and your request will be processed.</li>-->
<br><br>
<!--                    <form action="#" method="post">-->
<!--                        <h3>ADMINISTRATOR'S  LOGIN PAGE</h3>-->
<!---->
<!--                        <div class="form-item">-->
<!--                            <span><i class="fa fa-user" style="color: green"></i></span>-->
<!--                            <input type="text" name="user" required="required" placeholder="Username" autofocus required></input>-->
<!--                        </div>-->
<!--                        <br>-->
<!--                        <div class="form-item">-->
<!--                            <span><i class="fa fa-key" style="color: green"></i></span>-->
<!--                            <input type="password" name="pass" required="required" placeholder="Password" required></input>-->
<!--                        </div>-->
<!--                        <br>-->
<!--                        <div class="button-panel">-->
<!--                            <input type="submit" class="button" title="Log In" name="login" value="Login"></input>-->
<!--                        </div>-->
<!--                    </form>-->

                    <!--<div class="form-wrapper">-->

                </div>
            </div>
        </div>
    </div>
<!--    --><?php
//    if (isset($_POST['login']))
//    {
//        $username = mysqli_real_escape_string($con, $_POST['user']);
//        $password = mysqli_real_escape_string($con, $_POST['pass']);
//
//        $query 		= mysqli_query($con, "SELECT * FROM users WHERE  username='$username and 'password='$password' ");
//        $row		= mysqli_fetch_array($query);
//        $num_row 	= mysqli_num_rows($query);
//
//        if ($num_row > 0)
//        {
////            $_SESSION['user_id']=$row['user_id'];
//            header('location:lodge_data.php');
////
//        }
//        else
//        {
//            echo 'Invalid Username and Password Combination';
//        }
//    }
//    ?>


    </ul>
                </div><!-- .breadcrumbs -->
            </div>
        </div>
    </div>

    <img alt="" class="header-img" src="images/news-bg.png">
</header><!-- .site-header -->


<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <!--<div class="col-12 col-md-6 col-lg-4">-->
                    <div class="foot-about">
                        <!--<h2><a href="#"><img alt="" src="images/logo.png"></a></h2>-->

                        <p align="center">A project research by Williams Omobolaji for the Award of MSc</p>

                        <p align="center" class="copyright">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | Dept. Computer Science, Lagos State University <i aria-hidden="true"
                                                                                                    class="fa fa-heart"></i> by <a
                                href="https://github/Tobaino1.com" target="_blank">Tobaino</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .foot-about -->
                <!--</div>-->
                <!-- .col -->



            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->
</footer><!-- .site-footer -->

<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/jquery.collapsible.min.js' type='text/javascript'></script>
<script src='js/swiper.min.js' type='text/javascript'></script>
<script src='js/jquery.countdown.min.js' type='text/javascript'></script>
<script src='js/circle-progress.min.js' type='text/javascript'></script>
<script src='js/jquery.countTo.min.js' type='text/javascript'></script>
<script src='js/jquery.barfiller.js' type='text/javascript'></script>
<script src='js/custom.js' type='text/javascript'></script>
</body>
</html>