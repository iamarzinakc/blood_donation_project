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
      $two=$_POST['cam'];
      //$three=$_POST['age'];
      $four=$_POST['blood'];
      
      $six=$_POST['add'];
      $seven=$_POST['date'];
    
      $sql= "UPDATE colection SET Name='$one', cam_hos= '$two', type = '$four', bags= '$six', date= '$seven'  WHERE iD = '$id'";
      $result = mysqli_query($conn,$sql);

      if ($result) {
        
        
        echo '<script>alert("updated successfully")</script>';
          
        
        header('location:collectv.php');
        } else 
        {
        echo "Error updating record: " . mysqli_error($conn);
        }
      
//closing the connection
mysqli_close($conn);

?>