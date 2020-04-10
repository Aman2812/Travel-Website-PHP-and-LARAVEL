<?php
include "logindb.php";
?>
<!Doctype html>
<html>
<head>
    <title>SignUp page</title>
    <link rel="stylesheet" href="index1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" type="text/css" href="bootstrap.css">
<style type="text/css">
  
       body{
  background: url(https://images.wallpaperscraft.com/image/silhouette_lonely_mountain_129665_3840x2160.jpg);
    background-size: cover;
    background-position: center;
background-attachment: fixed;
 background-repeat: no-repeat;
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;



    font-family: 'Lobster', cursive;
    color: black;
    height: 100%;
    width: 100%;

}
.footer{

  padding: 5px 0;
   background-color: #101010;
   color:#9d9d9d;
  bottom: 0;
   position: fixed;
  width: 100%; 
  opacity: 0.7;
  color: white;
}

.custom_nav .navbar.navbar-fixed-top .navbar-inner{
    background: rgba(255, 255, 255, 0.8);
}
</style>
</head>
<body>
<div class="alert alert-success" role="alert">
  <p> <a href="mainPage.php"><b>MainPage </b></a>Seems like you're new here?. Thank you for connecting with us. <a href="signup.php"><b>Click here</b></a> to SignUp </p>
</div>


    <form action="Login2.php" method="POST">
    <h1 style="color: black;">Log In</h1>
    
    <input type="email" name="lemail" placeholder="Enter Your Email" >
    <br>
        <input type="password" name="lpassword" placeholder="Enter Your Password"></br>
        
    <button class="submit-btn" type="submit" name="log" >Log In</button>
        <div>
                    <center>
                        <h4 style="color: white;">Not a member?<span style="color:slateblue; cursor: pointer;" onclick="newUser()">Sign
                                Up</span></h4>
                      </center>
                </div>
    </form>
                    <footer class="footer">
    <div class="container">
        <center><p>Copyright © Explorica. All Rights Reserved | Contact Us: +91 90000 00000</p></center>     
    </div>
</footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>