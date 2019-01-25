<?php
ini_set('display_errors', '1');
?>




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
                            <li><a href="report.html">Report Screen</a></li>
                            <li><a href="lodge_data.php">Lodge Disease Related Ailments</a></li>

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
                <h2>ADMIN'S PAGE</h2>

                <h3>Disease / Ailment lodging form </h3>

                <div class="breadcrumbs">
                    <br>
                    <!--<ul class="d-flex flex-wrap align-items-center p-0 m-0">-->
                    <li>lodge disease related ailments by using the form  below</li>
                    <br>
                      <form action="logde_data_db.php" method="post">

                        <div class="modal-body" >

                            <div class="text-fields">
                                <div class="float-input">
                                    <span><i class="fa fa-book"></i></span>
                                    <input id="disease_name" name="disease_name" placeholder="NAME OF DISEASE(S)" required="required" size="50"
                                           type="text">
                                </div>
                                <br>
                                <div class="float-input">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <input id="possible_symptoms" name="possible_symptoms" placeholder="LIKELY SYMPTOMS" required="required" size="50"
                                           type="text">
                                </div>
                                <BR>
                                <div class="float-input">
                                    <span><i class="fa fa-building"></i></span>
                                    <input id="area_community" name="area_community" placeholder="AREA" required="required" size="50"
                                           type="text">
                                </div>
                                <br>
                                <div class="float-input">
                                    <span><i class="fa fa-user"></i></span>
                                    <input id="affected_people" name="affected_people" placeholder="PEOPLE TO BE LIKELY AFFECTED" required="required" size="50"
                                           type="text">
                                </div>
                                <br>
                                <div class="float-input">
                                    <span><i class="fa fa-bank"></i></span>
                                    <input id="spread_mortality_rate" name="spread_mortality_rate" placeholder="SPREAD RATE / MORTALITY RATE" required="required" size="50"
                                           type="text">
                                </div>
                                <br>
                                <div class="float-input">
                                    <span><i class="fa fa-chain"></i></span> Number of Occurence (in the last 36months)
                                    <input id="no_times_occured" name="no_times_occured" placeholder="E.g 2" required="required" size="8"
                                           type="text">

                                </div>
                                <br>


                                <input type="reset" value="Reset">
                                <input type="submit" value="Submit">
                    </form>



                    <br><br>


                    <h2>Disease / ailment related lodging for Report Screen </h2>
                    <li>lodge disease related ailments by using the form  below</li>

                    <form action="logde_data_db_report.php" method="post">

                        <div class="modal-body" >

                            <div class="text-fields">
                                <div class="float-input">
                                    <p>NAME OF DISEASE, AREA(S) AFFECTED, YEAR   Eg Malaria, Africa, Dec 2018</p>
                                    <span><i class="fa fa-book"></i></span>
                                    <input id="user" name="user" placeholder="NAME OF DISEASE, AREA(S) AFFECTED, YEAR" required="required" size="50"
                                           type="text">
                                </div>
                                <br><br>
                                <div class="float-input">
                                   <p> SELECT SIMILAR DISEASE / AILMENT IN THE PAST BASED ON SYMPTOMS</p>
                                    <span><i class="fa fa-calendar"></i></span>
                                    <select id="parent" type="text" name="parent" required><option value="">SELECT SIMILAR DISEASE / AILMENT IN THE PAST BASED ON SYMPTOMS </option>
                                        <option value="2"> Meningitis</option>
                                    <option value="3">Typhoid</option>
                                    <option value="4"> Malaria</option>
                                    <option value="13">Fever</option>
                                    <option value="12"> Polio</option>
                                    <option value="9">Lassa Fever</option>
                                    <option value="15"> Diarrhea</option>
                                    <option value="16">Cholera</option>
                                    <option value="15"> Ebola</option>
                                    <option value="13">Influenza</option>
                                    <option value="13">Yellow Fever </option>
                                    <option value="13">Measles</option>
                                    <option value="2">Plague</option>

                                </select></div>
                               <br>


                                <input type="reset" value="Reset">
                                <input type="submit" value="Submit">
                    </form>


                    <!--</ul>-->
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