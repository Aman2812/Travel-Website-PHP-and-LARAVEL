
<!DOCTYPE html>
<html>
<head>
 <title>Delhi</title>
<?php include"headerfile.php" ?>
        <!--link rel="stylesheet" type="text/css" href="front1.css"-->

 
  <style>
  /* Make the image fully responsive */
<?php include "style.php"; ?>
  </style>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
    $('button').addClass('btn-primary').text('Switch to Orange Tab');
    $('button').click(function(){
      $('#tabs a[href=#booking]').tab('show');
    });
</script> 


    </head>
<body>


<?php include"Navbar.php"; ?>

<!-- Carasoul -->

<div style="margin-top: -20px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" class="active"></li>

    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://wallpaperaccess.com/full/328218.jpg" alt="Los Angeles" style="width:100%; ">
        <div class="carousel-caption">
          <h3>San Francisco</h3>
          <p>LA is always so much fun!</p>
         
        </div>
      </div>

  
    </div>
</div>
</div>





<!--Card for statements-->
<?php  include"cardstatement.php"; ?>



<hr style="border-top: 1px solid chartreuse;">


<!--Content -->


<div class="container" style="margin-top: 20px; font-family: 'Lato', sans-serif;">
<div class="row">
  <!--first row first flight-->
  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail" style="font-family: 'Lato', sans-serif;">
  <a href="Destination_2_hotel_1.php "><img src="h5.jpg" class="image"></a>
  <div class="caption middle">
                           
                            <div> <span class="fas fa-plane">  The Leela Palace New Delhi</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 7 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1800</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1500</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><a class="btn btn-primary" href="Booking.php" role="button">Book Now</a></center>
                        </div>
  </div>
  </div>



    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination_2_hotel_2.php  "><img src="h6.jpg" class="image"></a>
  <div class="caption middle">
                         
                            <div> <span class="fas fa-plane">  Taj Palace, New Delhi</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 8 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1900</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1300</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><a class="btn btn-primary" href="Booking.php" role="button">Book Now</a></center>
                        </div>
  </div>
  </div>



  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination_2_hotel_3.php  "><img src="h7.jpeg" class="image"></a>
  <div class="caption middle">
                           
                            <div> <span class="fas fa-plane">   The Lodhi – A member of The Leading Hotels Of The World</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 4 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1200</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1000</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><a class="btn btn-primary" href="Booking.php" role="button">Book Now</a></center>
                        </div>
  </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination_2_hotel_4.php  "><img src="h8.jpg" class="image"></a>
  <div class="caption middle">
                          
                            <div> <span class="fas fa-plane">  The Imperial, New Delhi</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 7 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1900</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1200</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><a class="btn btn-primary" href="Booking.php" role="button">Book Now</a></center>
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

