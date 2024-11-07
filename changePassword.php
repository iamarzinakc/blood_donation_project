
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
?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM login WHERE id='$id'";

$result=mysqli_query($conn,$query);

if(!$result->num_rows > 0){
echo "Given ID not found !";
}else{
?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="login.css";>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Change Password </title>

<style>

input{

color:#4A0000;

border:1px solid #4A0000;

}

</style>
<?php include('header.php');?>
</head>

<body>
<div class="all">
<div class="one">

<?php echo "$error"; ?>

<form name="login" action="changePassword.php?id=<?php echo $id ;?>" method="post">
<img class="type" src="blood-type.png">

<div class="pass">Password :<br>
<input type="password" name="password" value="<?php echo $password;?>"></div></br>

<div style="text-align:center;"><input type="submit" name="submit" value="Change Password" style="margin: 0 -64px 2px 115px;padding:10px 20px 10px 20px;border-radius:10px;box-shadow:2px 2px 5px;"></div>

</form>

</div>
</div>

<?php
}
}

if(isset($_POST['submit'])){
$password = $_POST['password'];

if(isset($password)){
$query="UPDATE login SET password='$password' WHERE ID = $id";
$result=mysqli_query($conn,$query);

header("location: login.php");


}else{

$error = 'Invalid User or Password';

}

}

?>
</body>

</html>