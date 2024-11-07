<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "demo";

     $conn = mysqli_connect($servername, $username, $password, $db_name);

    // checking a connection

    if (!$conn){
        die("Connection Failed" . mysqli_connect_error());
    }
      $id = $_GET['id'];
    
      $sql = "delete from donor where ID = $id";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        header('location:view.php');
        } else 
        {
        echo "Error deleting record: " . mysqli_error($conn);
        }

//closing the connection
mysqli_close($conn);

?>