<?php
$conn=new PDO('mysql:host=localhost; dbname=health_surveillance_system', 'root', '');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>disease related Ailments</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <!-- Swiper CSS -->
    <link href="css/swiper.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="style.css" rel="stylesheet">
</head>
<body class="single-page">
<header class="site-header">
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
<!--                    <div class="site-branding d-flex align-items-center">-->
<!--                        <a class="d-block" href="index.html" rel="home"><img alt="logo" class="d-block"-->
<!--                                                                             src="images/logo.png"></a>-->
<!--                    </div><!-- .site-branding -->

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
                    </nav><!-- .site-navigation -->

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
                <h2>Disease Related Ailments</h2>
            <p> This page shows the collected information about
                <p> disease related ailments lodge into the database
                    <p> by the admin / personnel in charge
                <br><br><br><br>

                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
<th width="20%" align="center">DISEASE NAME</th>
 <th align="center">POSSIBLE SYMPTOM(s) </th>
  <th align="center">AREA / COMMUNITY TO BE AFFECTED</th>
  <th align="center">PEOPLE TO BE LIKELY AFFECTED </th>
  <th align="center">SPREAD / MORTALITY RATE </th>
                    <th align="center">NUMBER OF PAST OCCURRENCE (in 2years) </th>
                    <th align="center"> S/N (by recent entry) </TH>

				</tr>
			</thead>
			<?php
//			$query=$conn->query("select * from disease order by id desc");
            $query=$conn->query("select * from disease");


//            while ($row = mysqli_fetch_array($query)){
            			while($row=$query->fetch()) {

                $disease_name=$row['disease_name'];
                $possible_symptoms=$row['possible_symptoms'];
				$area_community=$row['area_community'];
				$affected_people=$row['affected_people'];
				$spread_mortality_rate=$row['spread_mortality_rate'];
                $no_times_occured=$row['id']=$row['no_times_occured'];
				$id=$row['id'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $disease_name ;?>  </td>

								<td>		&nbsp;<?php echo $possible_symptoms ;?>  </td>
				<td>	&nbsp;<?php echo $area_community ;?>

				</td>
				<td>
                &nbsp;<?php echo $affected_people ;?>
                </td>
                <td>
                &nbsp;<?php echo $spread_mortality_rate ;?>
                </td>
                <td>                 &nbsp;<?php echo $no_times_occured ;?> </td>
                <td>                 &nbsp;<?php echo $id ;?> </td>

			</tr>
			<?php }?>
		</table>
            </div>
        </div>
    </div>

    <img alt="" class="header-img" src="images/about-bg.png">
</header><!-- .site-header -->

<div class="med-history">
    <div class="container">
        <div class="row align-items-end">
            <!-- <div class="col-12 col-lg-6"> -->

               <!-- <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
<th width="20%" align="center">DISEASE NAME</th>
 <th align="center">POSSIBLE SYMPTOM(s) </th>
  <th align="center">AREA / COMMUNITY TO BE AFFECTED</th>
  <th align="center">PEOPLE TO BE LIKELY AFFECTED </th>
  <th align="center">SPREAD / MORTALITY RATE </th>
  <th align="center"> S/N (by recent entry) </TH>

				</tr>
			</thead>
<!--			--><?php
//			$query=$conn->query("select * from disease order by id desc");
//			while($row=$query->fetch()){
//                $disease_name=$row['disease_name'];
//                $possible_symptoms=$row['possible_symptoms'];
//				$area_community=$row['area_community'];
//				$affected_people=$row['affected_people'];
//				$spread_mortality_rate=$row['spread_mortality_rate'];
//				$id=$row['id'];
//			?>
<!--			<tr>-->
<!--			-->
<!--				<td>-->
<!--					&nbsp;--><?php //echo $disease_name ;?><!--  </td>-->
<!---->
<!--								<td>		&nbsp;--><?php //echo $possible_symptoms ;?><!--  </td>-->
<!--				<td>	&nbsp;--><?php //echo $area_community ;?>
<!---->
<!--				</td>-->
<!--				<td>-->
<!--                &nbsp;--><?php //echo $affected_people ;?>
<!--                </td>-->
<!--                <td>-->
<!--                &nbsp;--><?php //echo $spread_mortality_rate ;?>
<!--                </td>-->
<!--                <td>                 &nbsp;--><?php //echo $id ;?><!-- </td>-->
<!---->
<!--			</tr>-->
<!--			--><?php //}?>
<!--		</table> -->
            </div>

            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                <img alt="" class="responsive" src="images/about.jpg">
            </div>
        </div>
    </div>
</div>
<!-- 
<div class="subscribe-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h2>Subscribe to our newsletter</h2>

                <form>
                    <input placeholder="E-mail address" type="email">
                    <input class="button gradient-bg" type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>
 -->
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