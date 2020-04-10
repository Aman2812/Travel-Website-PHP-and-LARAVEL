    <?php

    $connection=mysqli_connect('localhost','root','','destination');
    if(!$connection){
        die( "Oppps! Seems like there's an error");
    }

?>




<?php

function create_form(){
    if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $state=$_POST['state'];
            $zip=$_POST['zip'];
            $adult=$_POST['value1'];
            $children=$_POST['value2'];
            $final=$_POST['final'];
            
        global $connection;
        
    //$username=mysqli_real_escape_string($connection, $username);
     //$password=mysqli_real_escape_string($connection, $password);
        

    
    //Putting values in the database
    
    $query="INSERT INTO details(email,password, city, address, state, zip, adult, children, final) VALUES ('$email','$password','$city','$address','$state','$zip','$adult','$children','$final')";
    
    $result=mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed ".mysqli_error());
    }else{
        echo "Successfully inserted";
        header('Location:Success.php');
    }
 

}
}


?>




<?php 

function showrows(){
        //Reading values in the database
    
    $query="SELECT *FROM users";
    global $connection;
    
    $result=mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed ".mysqli_error());
    }else{
        //echo "Successfully inserted";
    }
    
    
                while($row=mysqli_fetch_assoc($result)){
       print_r($row); 
         
            }
            
    
}


function showAllData(){
    
    $query="SELECT *FROM details";
    global $connection;
    $result=mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed ".mysqli_error());
    }else{
        
    }  
        while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
        echo "<option value='$id'>$id</option>";
        
        }
}

?>