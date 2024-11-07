
<?php include("header.php")?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
  h3{
    margin-bottom:10px;
  }

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
input[type=email], select, textarea {
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
    margin-top:-1000px;
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
    
  $sql = "SELECT * FROM donor WHERE Id= '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  ?>
<div class="container">
  <h3>Update Donor Info</h3>
   <form action = "edit.php?id=<?php echo $id ?>" method = "post" >
   Name:<input type="text" name="name" value ="<?php echo $row["Name"]?>"><br><br>
        Date Of Birth:<input type="date" name="date" value ="<?php echo $row["Date_of_Birth"]?>"><br><br>
        <!--Age:<input type="number" name="age"><br><br>-->
        Gender:
        <input type="radio" name="gender" value="Female" >Female
    <input type="radio" name="gender"  value ="Male">Male
    <br><br>
    Blood Group:<select name="blood" value ="<?php echo $row["Blood"]?>">
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
 Address:<input type="text" name="add" value ="<?php echo $row["Address"]?>"><br><br>
 Phone:<input type="text" name="phone" value ="<?php echo $row["Phone"]?>"><br><br>
 Email:<input type="email" name="email" value ="<?php echo $row["Email"]?>"><br><br>
    <input type = "submit" value = "Update" name="submit">

   </form>
</div>
<?php
    }
 }
?>

<?php 
 $id = $_GET['id'];
if(isset($_POST["submit"])){
$one=$_POST['name'];
$two=$_POST['date'];
$four=$_POST['gender'];
$five=$_POST['blood'];
$six=$_POST['add'];
$seven=$_POST['phone'];
$eight=$_POST['email'];
    
      $sql= "UPDATE donor SET Name='$one', Date_of_Birth= '$two', Gender = '$four', Blood_Group= '$five', Address= '$six', Phone= '$seven',Email='$eight'  WHERE ID = $id";
      $result = mysqli_query($conn,$sql);

      if ($result) {
       echo "<div style='margin-left:400px;margin-top:-600px;background-color:green;width:fit-content;padding:5px;color:white;'>Updated Successfully!!</div>";
       
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