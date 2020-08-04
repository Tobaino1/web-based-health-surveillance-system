<?php
ini_set('display_errors', '1');
?>

<!-- session && auth -->

<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:lodge_login.php");
}
?>

<?php 

if (isset($_POST['cases'], $_POST['days'])) {
$cases=$_POST['cases'];
$days=$_POST['days'];

if($cases <='250' && $days <= '5')

{
    echo "Dear Public health Officer," . "<br>";
    echo "The signal value shows that this is an ENDEMIC" . "<br>"."<br>";
}

else
{
   if($cases <='999999' && $days <= '10')
{
    echo "Dear Public health Officer," . "<br>";
    echo "The signal value shows that this is an EPIDEMIC" . "<br>"."<br>";
}

 if($cases >='1000000' && $days <= '21')
{
    echo "Dear Public health Officer," . "<br>";
    echo "The signal value shows that this is a PANDEMIC" . "<br>"."<br>";
}

}

}

?>

<?php 

if (isset($_POST['y'], $_POST['a'], $_POST['t'], $_POST['k'], $_POST['z'])) {
$y=$_POST['y'];
$a=$_POST['a'];
$t=$_POST['t'];
$z=$_POST['z'];
$k=$_POST['k'];

"Calculating the exponential growth  y(t) = a__ekt";
"ln function, natural logarithm is the inverse function of ex " . $z = ($y/$a) ."<br />";

"k = ln / t";
echo "Exponential growth 'K' for the disease is : " . $k = ($z/$t) . "<br />";

}
?>

<?php
$conn=new PDO('mysql:host=localhost; dbname=health_surveillance_system', 'root', '');
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
                    
                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                            <li class="current-menu-item"><a href="lodge_data.php">Home</a></li>
                            <li><a href="lodge_data.php">Lodge Disease Related Ailments</a></li>
                            <li><a href="sentinel_input.php">Sentinel Feed Form</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </nav>

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
        <th width="20%" align="center"> LOCATION</th>
        <th align="center">DAYS </th>
         <th align="center">NUMBER OF CASES</th>
       <th align="center"> IDENTITY </TH>

                </tr>
            </thead>
            <?php
//          $query=$conn->query("select * from disease order by id desc");
            $query=$conn->query("select * from sentinel");


//            while ($row = mysqli_fetch_array($query)){
                        while($row=$query->fetch()) {

                $location=$row['location'];
                $days=$row['days'];
                $no_of_cases=$row['no_of_cases'];
                $id=$row['id'];
            ?>
            <tr>
            
                <td>&nbsp;<?php echo $location ;?>  </td>
                <td> &nbsp;<?php echo $days ;?>  </td>
                <td>  &nbsp;<?php echo $no_of_cases ;?>  </td>
                <td>  &nbsp;<?php echo $id ;?> </td>
            
            <?php }?>
        </table>

      
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
  

  <br><br><br>
  <hr/>
       <span>  <i class="fa fa-television" style="color: blue">Get the Signal Value </i> </span>
        <div align="left">
       <form enctype="multipart/form-data" action="#" method="POST">
       Cases <input type="number" name="cases" size="10" required="required">
       <br><br>
       Days  <input type="number" name="days" size="10" required="required">

       <br><br>
       <input type="reset" value="Reset">
       <input type="submit" value="Submit">
      </form>


        <br>
        <hr/>
      <span>  <i class="fa fa-book" style="color: blue">Get the Exponential growth  'k' </i> </span>
      <div align="left">
       <form enctype="multipart/form-data" action="#" method="POST">
      Population at the time i.e y(t) <input type="number" name="y" size="10" required="required">
       <br><br>
       Value case(s) at start i.e a  <input type="number" name="a" size="10" required="required">
      <br><br>
       Cummulative time (days) i.e t  <input type="number" name="t" size="10" required="required">
       <input type="hidden" name="z" size="10" required="required">
        <input type="hidden" name="k" size="10" required="required">

       <br><br>
       <input type="reset" value="Reset">
       <input type="submit" value="Submit">
      </form>
      </div>
<!--     <img alt="" class="header-img" src="images/news-bg.png">
 --></header><!-- .site-header -->
  


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