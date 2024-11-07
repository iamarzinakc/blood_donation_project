
<?php include("header.php");
include("secure.php");?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 3px;
    margin-bottom: 3px;
    resize: vertical;
     background-color: #F7EDED;

}

input[type=number], select, textarea {
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
input[type=datetime-local], select, textarea {
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
input[type=text]:hover{
    transition: 0.1s ease-in;
    background-color: #EFDEDE;
 }
 .container{
  width:500px;
  border:1px solid #F7EDED;
    border-radius: 10px;
    padding: 20px;
    display: block;
    margin-left: 30%;
    margin-right: auto;
    margin-top:-1100px;
 }

 </style>
<body>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  

  // checking a connection

  
       
  $id = $_GET['id'];
    
  $sql = "select * from colection where id = $id";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  ?>
<div class="container">
   <form action = "collectu.php?id=<?php echo $id ?>" method = "post" >
   Name:<input type="text" name="name" value ="<?php echo $row["Name"]?>"><br><br>
        Cmpaign/Hospital:<input type="text" name="cam" value ="<?php echo $row["cam_hos"]?>"><br><br>
        <!--Age:<input type="number" name="age"><br><br>-->
        
    
    Blood Group:<select name="blood" value ="<?php echo $row["type"]?>">
    <option value="">Select...</option>
        <option value="O-">O-</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="A+">A+</option>
        
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="AB-">AB-</option>
        <option value="AB+">AB+</option>
</select><br><br>
 Bags:<input type="number" name="add" value ="<?php echo $row["bags"]?>"><br><br>
 
 Date/time:<input type="datetime-local" name="date" value ="<?php echo $row["date"]?>"><br><br>
    <input type = "submit" value = "Update">

   </form>
</div>
<?php
    }
 }
//closing the connection
mysqli_close($conn);
?>

</body>
</html>