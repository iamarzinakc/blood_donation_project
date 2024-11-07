<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data in table format</title>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<button type="submit" value="change" class="change"><a style="text-decoration:none;color:inherit;" href="logout.php">Change password</a></button>


<button type="submit" value="logout" class="zero"><a style="text-decoration:none;color:inherit;" href="logout.php">Logout</a></button>
<div class="sidebar">
<a  style="text-decoration:none;color:inherit;" href="main.php"> <div class="home">Home</div></a>
<a  style="text-decoration:none;color:inherit;" href="view.php"><div class="one">Donors Info</div></a>
<a style="text-decoration:none;color:inherit;" href="view1.php"><div class="two">Campaign</div></a>

<a style="text-decoration:none;color:inherit;" href="collectu.php"><div class="two">Blood Collection</div></a>
</div>
    <div class="view">
 
  
    <table border=1 style=border-collapse:collapse align="center">
    <tr>
        <th> Blood type </th>
        <th>Volume</th>
</tr>
<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="demo";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        
          // checking a connection
      
          if (!$conn){
              die("Connection Failed" . mysqli_connect_error());
          }
               
            $sql = "select * from blood";
            $result = mysqli_query($conn, $sql);
      
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
      
              ?>
      
              <tr> 
                  
                  <td> <?php echo $row["Blood_group"] ?> </td>
                  <td> <?php echo $row["Volume"] ?> </td>
                  
                  
                  
                  
              </tr>
    
              <?php }
            } 
            else {
              echo "0 results";
            }
         ?> 
