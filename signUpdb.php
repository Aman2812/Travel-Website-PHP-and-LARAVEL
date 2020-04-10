<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=new mysqli($servername,$username,$password,$dbname);
$q="insert into customer(First_Name,Last_Name,Email,Password,Phone_Number)
values('$fname','$lname','$email','$password','$number')";
$res=$conn->query($q);
if($res==true)
{
    
}

else{
    echo "error:$conn->error"; //we can give both the conditions that to check where the error is in the code
}
?>