
<?php include("header.php");
include("secure.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 3px;
    margin-bottom: 3px;
    resize: vertical;
     background-color: #F7EDED;

}	
	
input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F7EDED;

}
input[type=time], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F7EDED;

}
input[type=text]:hover{
    transition: 0.1s ease-in;
    background-color: #EFDEDE;
 }
 input[type=submit] {
    background-color: #534C4C;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    padding: 15px;
    font-family: 'Titillium Web', sans-serif;
}

input[type=submit]:hover {
    background-color: #3B3333;
}
.container {
	border:1px solid #F7EDED;
    border-radius: 10px;
    padding: 20px;
    display: block;
    margin-left: 500px;;
    
    margin-top:30px;
    width: 30%;
}
.title{
	margin-left: 40%;
    margin-top:-1000px;
}
</style>

	<div class="title">
		<h2>Create a New Campaign</h2>
	</div>
	<div class="container">
  <form action="campaign.php" method="post">
    <label >Enter Campaign Name</label>
    <input type="text"  name="cname" required>

    <label >Enter Organizer Name</label>
    <input type="text"  name="oname"  required>
    <label >Select Campaign Date</label>
    <input type="date"  name="date" required>

    <label >Select Campaign Time</label>
    <input type="time"  name="time" required>
    <label >Enter Campaign Location</label>
    <input type="text"  name="location" required>
    <input type="submit" value="Create a New Campaign">
</form>
</div>
</body>
</html>

<?php

	if(isset($_POST['cname'])){
		$cname=$_POST['cname'];
		$oname=$_POST['oname'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$location=$_POST['location'];

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="demo";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
	
	$qry="insert into campaign(cam_name,org_name,cam_date,cam_time,cam_location) values ('$cname','$oname','$date','$time','$location')";
	$result=mysqli_query($conn,$qry);

	if($result){
		echo'<script type="text/javascript">window.onload=function(){alert(Campaign Successfully Created);}</script>';
	}
	else{
		echo"Error while inserting data";

	
	}

	
	}
?>