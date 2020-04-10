<?php
$rr=array("email"=>'',"fname"=>'',"lname"=>'',"number"=>'',"password"=>'');
if(isset($_POST['submit'])){

  $fname = trim($_POST["fname"]);
  if(empty($fname))
  {
    $rr['fname']="<h5 style=color:red;>name can't be blank!!!</h5>"."<br>";

  }
  else
  {
    if(!preg_match("/^[a-zA-Z ]+$/",$fname))
    {
      $rr['fname']= "<h5 style=color:red;>name can be alphabets and spaces only</h5>"."<br>";
    }
    
  }
   $lname = trim($_POST["lname"]);
  if(empty($lname))
  {
    $rr['lname']="<h5 style=color:red;>name can't be blank!!!</h5>"."<br>";
  }
  else
  {
    if(!preg_match("/^[a-zA-Z ]+$/",$lname))
    {
      $rr['lname']= "<h5 style=color:red;>name can be alphabets and spaces only</h5>"."<br>";
    }
    
  }
 
  $email = trim($_POST["email"]);
  if(empty($email))
  {
    $rr['email']="<h5 style=color:red;>enter valid mail!!!</h5>"."<br>";
  }
  else
  {
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $rr['email']="<h5 style=color:red;>email has to be valid email address</h5>"."<br>";
    }
  }
  

   $number = trim($_POST["number"]);
  if(empty($number))
  {
    $rr['number']="<h5 style=color:red;>number can't be blank!!!</h5>"."<br>";
  }
  else
  {
    if(!preg_match("/^((\+){1}91){1}[1-9]{1}[0-9]{9}$/",$number))
    {
      $rr['number']= "<h5 style=color:red;>number must begin with +91 and should only have 10 digits</h5>"."<br>";
    }
    
  }

  $password = trim($_POST["password"]);
  if(empty($password))
  {
    $rr['password']="<h5 style=color:red;>enter This Field!!!</h5>"."<br>";
  }
  else
  {
    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}$/",$password))
    {
      $rr['password']="<h5 style=color:red;>Password matching expression. Password must be at least 4 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.</h5>"."<br>";
    }
  }
}
include "signUpdb.php";
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
  background: url(https://www.2020lead.com/wp-content/uploads/2015/07/Travel.jpg);
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

.custom_nav .navbar.navbar-fixed-top .navbar-inner{
    background: rgba(255, 255, 255, 0.8);
}


</style>

</head>
<body>
<div class="alert alert-success" role="alert">
  <p> <a href="mainPage.php"><b>MainPage </b></a>Seems like you're new here?. Thank you for connecting with us. <a href="Login2.php"><b>Click here</b></a> to Login </p>
</div>


    
    <form name="myForm" action="signup.php" method="POST">
    <h1 style="color: black;">Sign up</h1>
  
    <input type="text" name="fname" placeholder="Enter Your First Name" >
    <div class="rr-msg"><?php echo $rr['fname']?></div>
  <br>
    <input type="text" name="lname" placeholder="Enter Your Last Name" >
    <div class="rr-msg"><?php echo $rr['lname']?></div>
    <br>
    <input type="email" name="email" placeholder="Enter Your Email">
    <div class="rr-msg"><?php echo $rr['email']?></div>
    <br>
    <input type="password"  name="password" placeholder="Enter Your Password">
    <div class="rr-msg"><?php echo $rr['password']?></div><br>    
    <input type="number" name="number" placeholder="Enter Your Phone Number"><br>
    <div class="rr-msg"><?php echo $rr['number']?></div>
    <input type="submit" class="submit" name="submit" value="Sign Up">
    </form>

  
        
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>

</html>