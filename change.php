<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>

</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>
<br>
<br>
</body>
</html>


<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "demo";
$pass1=$_POST['currentPassword']
   $conn = mysqli_connect($servername, $username, $password, $db_name);
   if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT * from login WHERE password='$pass1'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
mysqli_query($conn,"UPDATE login set password='" . $_POST["newPassword"] . "' WHERE username='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>

