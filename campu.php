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
      $cname=$_POST['cname'];
		$oname=$_POST['oname'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$location=$_POST['location'];

    
      $sql= "UPDATE campaign SET cam_name='$cname',org_name = '$oname', cam_date= '$date', cam_time= '$time', cam_location= '$location'  WHERE id = $id";
      $result = mysqli_query($conn,$sql);

      if ($result) {
        
        header('location:campe.php');
        } else 
        {
        echo "Error updating record: " . mysqli_error($conn);
        }
      
//closing the connection
mysqli_close($conn);

?>