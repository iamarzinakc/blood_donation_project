
<?php include("header.php")?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>


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
    padding: 12px 20px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    padding: 10px;
    font-family: 'Titillium Web', sans-serif;
}

input[type=submit]:hover {
    background-color: #3B3333;
}
.container {
	border:1px solid #F7EDED;
    border-radius: 10px;
    padding: 30px;
    
    width: 30%;
    margin-top:-1000px;
    margin-left:500px;
}
.title{
	margin-left: 20%;
    margin-top:-5%;
}
</style>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  $id="";

  // checking a connection

  
   if(isset($_GET['id'])) {   
  $id = $_GET['id'];
   
  $sql = "select * from campaign where Id = $id";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  ?>
  
<div class="container">
<div class="title">
		<h3>Update Campaign</h3>
	</div>
   <form action = "campe.php?id=<?php echo $id ?>" method = "post" >
   <label >Enter Campaign Name</label>
    <input type="text"  name="cname" value ="<?php echo $row["cam_name"]?>"placeholder="Your newcampaign name..." required>

    <label >Enter Organizer Name</label>
    <input type="text"  name="oname" value ="<?php echo $row["org_name"]?>"placeholder="Your organizer name..." required>
    <label >Select Campaign Date</label>
    <input type="date"  name="date" value ="<?php echo $row["cam_date"]?>"placeholder="Campaign date" required>

    <label >Select Campaign Time</label>
    <input type="time"  name="time" value ="<?php echo $row["cam_time"]?>"placeholder="Campaign time" required>
    <label >Enter Campaign Location</label>
    <input type="text"  name="location" value ="<?php echo $row["cam_location"]?>" placeholder="Campaign location" required>
    
    <input type = "submit" value = "Update" name="submit">

   </form>
</div>
<?php
    }
 }
   }
?>


<?php 
if(isset($_POST["submit"])){
    $one=$_POST['cname'];
    $two=$_POST['oname'];
    //$three=$_POST['age'];
    $four=$_POST['date'];
    $five=$_POST['time'];
    $six=$_POST['location'];
        
          $sql= "UPDATE campaign SET cam_name='$one', org_name= '$two', cam_date = '$four', cam_time= '$five', cam_location= '$six' WHERE ID = $id";
          $result = mysqli_query($conn,$sql);
    
          if ($result) {
            header('location:view1.php');
            } else 
            {
            echo "Error updating record: " . mysqli_error($conn);
            }
            
//closing the connection
mysqli_close($conn);
          
}
?>


</body>
</html>