<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db_name = "demo";
   // creating a connection

     $conn = mysqli_connect($servername, $username, $password, $db_name);

    // checking a connection

    if (!$conn){
        die("Connection Failed" . mysqli_connect_error());
    }
   
      $id = $_GET['id'];
      $one=$_POST['name'];
$two=$_POST['date'];
//$three=$_POST['age'];
$four=$_POST['gender'];
$five=$_POST['blood'];
$six=$_POST['add'];
$seven=$_POST['phone'];
$eight=$_POST['email'];
    
      $sql= "UPDATE donor SET Name='$one', Date_of_Birth= '$two', Gender = '$four', Blood_Group= '$five', Address= '$six', Phone= '$seven',Email='$eight'  WHERE ID = $id";
      $result = mysqli_query($conn,$sql);

      if ($result) {
        header('location:view.php');
        } else 
        {
        echo "Error updating record: " . mysqli_error($conn);
        }
      
//closing the connection
mysqli_close($conn);

?>