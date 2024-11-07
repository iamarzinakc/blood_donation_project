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




    <div class="view">
 <div class="camp"> <h2 align = "center"> Blood Collection </h2></div>
  <a style="text-decoration:none;" href="collect.php"><button class="add">Add</button></a>
    <table border=1 style=border-collapse:collapse align="center">
    <tr>
        <th>  Name </th>
        <th>/Hospital Name </th>
        <th>  Blood Group</th>
       
        
        <th>Bags</th>
        <th>Date</th>
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
         
      $sql = "select * from colection";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr> 
            
            <td> <?php echo $row["Name"] ?> </td>
            <td> <?php echo $row["cam_hos"] ?> </td>
            <td> <?php echo $row["type"] ?> </td>
            <td> <?php echo $row["bags"] ?> </td>
            <td> <?php echo $row["date"] ?> </td>
            
            
            <td><button style="border:2px solid #add8e6;background-color:#add8e6;color:black;border-radius:2px;padding:15px;"> <a style="text-decoration:none;color:inherit;" href = "collecte.php?id= <?php echo $row["id"] ?>"> Edit </a></button> </td>
            <td><button style="border:2px solid #e3242b;background-color:#e3243b;border-radius:2px;color:black;padding:10px;"> <a style="text-decoration:none;color:inherit;"href = "collectd.php?id= <?php echo $row["id"] ?>"> Delete </a></button ></td>
        </tr>

        <?php }
      } 
      else {
        echo "0 results";
      }
    
//closing the connection
mysqli_close($conn);

?>

</table>
    </div>
</body>
</html>