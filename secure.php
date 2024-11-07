<?php

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}

session_start();
$check=$_SESSION['name'];

$query=mysqli_query($conn,"select username from login where username='$check' ");

$data=mysqli_fetch_array($query);

$user=$data['username'];

if(!isset($user))

{

header('Location: login.php');

}

?>