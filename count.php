<?php

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}


$sql1="INSERT INTO count (donor)
    SELECT COUNT(Name)
    FROM donor";
     $result=mysqli_query($conn,$sql1);
     
     if($result){
         echo"Campaign Successfully Created";
     }
     else{
         echo"Error while inserting data";
 
     
     }
 
     ?>