<?php

$error="";

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}

if(isset($_POST['submit'])){

$username = $_POST['username'];

$password = $_POST['password'];

if(isset($username) && isset($password)){

$query="SELECT * FROM login WHERE username='$username' and password='$password'";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

//$id=$row['id'];

$count=mysqli_num_rows($result);

if($count==1){

//session_register("username");
session_start();
$_SESSION['name']=$username;
$_SESSION['id']=$id;
 
 

header("location: main.php");


}else{

$error = 'Invalid User or Password';

}

}

}

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="login.css";>
<link rel=stylesheet href="header.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>login</title>

<style>

input{

color:#4A0000;

border:1px solid #4A0000;

}

</style>
<?php // include('header.php');?>
</head>

<body>
<div class="header">
    <img class="blood1" src="blood-type.png">LIFEGIFT BLOOD BANK 
    
 </div>
 
<div class="all">
<div class="one">

<?php echo "$error"; ?>

<form name="login" action="" method="post">
<img class="type" src="blood-type.png">
<div class="name">Username :<br>
<input type="text" name="username"></div></br>

<div class="pass">Password :<br>
<input type="password" name="password"></div></br>

<div style="text-align:center;"><input type="submit" name="submit" value="login" style="margin: 0 0 2px 0;padding:10px 20px 10px 20px;border-radius:10px;box-shadow:2px 2px 5px;"></div>
<!--<div style="text-align:center;">Create new account?<button style="margin: 0 -64px 2px 20px;padding:10px 20px 10px 20px;border-radius:10px;box-shadow:2px 2px 2px;"><a href="signup.php">Signup</a></button></div>-->
</form>

</div>
</div>
</body>

</html>