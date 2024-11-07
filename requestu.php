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
      
$eight=$_POST['status'];
    
      $sql= "UPDATE request SET  status='$eight'  WHERE id= $id";
      $result = mysqli_query($conn,$sql);

      if ($result) {
        header('location:request.php');
        } else 
        {
        echo "Error updating record: " . mysqli_error($conn);
        }
      
//closing the connection
mysqli_close($conn);

?>