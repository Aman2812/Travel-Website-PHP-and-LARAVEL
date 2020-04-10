<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST["log"]))
	{
		$s="select Email, Password from customer";
		$rs= $conn->query($s);
		while($row = $rs->fetch_assoc()){
		if($row['Email']==$_POST['lemail'])
		{
		if($row['Password']==$_POST['lpassword'])
		{
			
			header('Location:mainPage.php');
		}
		else
		{
			
		}
		}
		else{
           
		}

			


		}
	}

?>