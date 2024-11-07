
<?php include("header.php");
include("secure.php");?><!DOCTYPE html>
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
</div>
    <div class="view">
        <div class="top">
        <h2 align = "center" style="background-color:skyblue;" > Issued Info: </h2>
         
  
   <a style="text-decoration:none;" href="issue.php"><button class="add"><img src="plus.png">Add</button></a>
</div>
    <table border=1 style=border-collapse:collapse align="center">
    <tr>
        <th> Reference Code </th>
        <th> Issued To </th>
        <th> Issue Date</th>
        <th> Blood Group</th>
        
        <th> Amount</th>
        <th>Volume</th>
        
        <th> EDIT </th>
        <th> DELETE </th>
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
    
   
      $sql = "select * from handover";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        ?>

        


       

        <tr> 
            
            <td> <?php echo $row["ref_code"] ?> </td>
            <td> <?php echo $row["patient"] ?> </td>
            <td> <?php echo $row["issue"] ?> </td>
            <td> <?php echo $row["blood_group"] ?> </td>
            <td> <?php echo $row["amount"] ?> </td>
            <td> <?php echo $row["volume"] ?> </td>
          
            
            <td><button style="border:2px solid #add8e6;background-color:#add8e6;color:black;border-radius:2px;padding:15px;">  Edit </button> </td>
            <td><button  style="border:2px solid #e3242b;background-color:#e3243b;border-radius:2px;color:black;padding:10px;">  Delete </button ></td>
        </tr>
        
        <?php }
      } 
      else {
        echo "0 results";
      }
    
      mysqli_close($conn);

      ?>
