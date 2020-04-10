
<!DOCTYPE html>
<html>
<head>
 <title>Your Destination, Our services</title>
<?php include"headerfile.php"; ?>


        <!--link rel="stylesheet" type="text/css" href="front1.css"-->

 
  <style>
  /* Make the image fully responsive */
 <?php
include "style.php";
 ?>
  </style>


    </head>
<body>


<?php

include "Navbar.php";
 ?>

<!-- Carasoul -->

<div style="margin-top: -20px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://cdn.pixabay.com/photo/2016/01/06/00/15/city-1123363_960_720.jpg" alt="Los Angeles" style="width:100%; ">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://wallpaperplay.com/walls/full/9/7/1/195324.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://i.pinimg.com/originals/f5/b5/7c/f5b57cda329dd2e49374a3531133496a.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

  
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!--Card for statements-->

<?php include"mainpagecard.php";?>


<!--Content -->

<div class="container" style="margin-top: 20px;">
<div class="row">
  <!--first row-->
  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination1.php"><img src="NEW.jpg" class="image"></a>
  <div class="caption middle">
                            <h3>New York City</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination2.php"><img src="DEL1.webp"></a>
  <div class="caption">
                            <h3>Delhi</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination3.php "><img src="TAJ.jpg"></a>
  <div class="caption">
                           <h3>Agra</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>

<!--second row-->
  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination4.php"><img src="SPN.jpg"></a>
  <div class="caption">
                           <h3>Spain</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>

   <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination5.php"><img src="ITY.jpg"></a>
  <div class="caption">
                           <h3>Italy</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>


  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination6.php"><img src="DUB.jpg"></a>
  <div class="caption">
                           <h3>Dubai</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>
<!--third row-->
  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination7.php"><img src="AUS.jpg"></a>
  <div class="caption">
                           <h3>Capetown</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination8.php"><img src="SIN.jpg"></a>
  <div class="caption">
                           <h3>Singapore</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>


  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination9.php"><img src="CHI.jpg"></a>
  <div class="caption">
                           <h3>China</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>
  
</div>
</div>

              <footer class="footer">
    <div class="container">
        <center><p>Copyright © Explorica. All Rights Reserved | Contact Us: +91 90000 00000</p></center>     
    </div>
</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>

