<?php include("header.php")?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?
$id = $_GET['id'];
    
  $sql = "SELECT * FROM request WHERE Id= '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  ?>
<div class="container">
  <h3>Status</h3>
   <form action = "edit.php?id=<?php echo $id ?>" method = "post" >
   Reference no:<input type="number" name="ref"><br>
   
   Patient:<input type="text" name="patient"><br>
  Blood Group :<select name="blood">
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
   Volume:<input type="number" name="volume"><br><br>
   Status:<input type="number" name="name" value ="<?php echo $row["status"]?>"><br><br>
    </form>
    </div>
    <?php
    }
 }
?>
    


<?php 
 $id = $_GET['id'];
if(isset($_POST["submit"])){

$eight=$_POST['status'];
    
      $sql= "UPDATE request SET status='$eight' WHERE ID = $id";
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