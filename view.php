
<?php include("secure.php");?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data in table format</title>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="main.css">
    <script>
            function openform(){
                document.getElementById("myform").style.display="block";
            }

            function closeform(){
                document.getElementById("myform").style.display="none";
            }
            </script>
</head>
<style>

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
input[type=time], select, textarea {
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
 input[type=submit]{
    padding:10px;
 }
 
 </style>
<body>
<?php include('header.php'); ?>
 <!-- 
<button type="submit" value="change" class="change"><a style="text-decoration:none;color:inherit;" href="changePassword.php?id=<?php // echo $_SESSION['id'] ;?>">Change password</a></button>


<button type="submit" value="logout" class="zero"><a style="text-decoration:none;color:inherit;" href="logout.php">Logout</a></button> -->


<div class="form" id="myform">
    <h4>Donor Form</h4>
        <form action="" method="post">
        Name:<input type="text" name="name" required></span><br><br>
        Date Of Birth:<input type="date" name="date" required><br><br>
        <!--Age:<input type="number" name="age"><br><br>-->
        Gender:<input type="radio" name="gender" value="female" required>Female
    <input type="radio" name="gender" value="male" required>Male<br><br>
    Blood Group:<select name="blood" required>
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
 Address:<input type="text" name="add" required><br><br>
 Phone:<input type="text" name="phone"required><br><br>
 Email:<input type="email" name="email" required><br><br>
 <button type="button" id="success" class="btn btn-success m-1"><input type="submit" name="submit" value="Submit"></button>
<button style="padding:10px;" type="button" class="cancel" onclick="closeform()">Close</button>

</form>

</div>
    <div class="view">
        <div class="top">
        <h2 align = "center" style="background-color:skyblue;" > Donor Info: </h2>
         
  
   <!-- <a style="text-decoration:none;" href="donor1.php">--><button class="add" onclick="openform()"><img src="plus.png">Add</button>
</div>
    <table border=1 style=border-collapse:collapse align="center">
    <tr>
        <th> Name </th>
        <th> Date Of Birth </th>
        <th> Gender </th>
        <th> Blood Group</th>
        
        <th> Address</th>
        <th>Phone</th>
        <th>Email</th>
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
    
   
      $sql = "select * from donor";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        ?>

        


       

        <tr> 
            
            <td> <?php echo $row["Name"] ?> </td>
            <td> <?php echo $row["Date_of_Birth"] ?> </td>
            <td> <?php echo $row["Gender"] ?> </td>
            <td> <?php echo $row["Blood_Group"] ?> </td>
            <td> <?php echo $row["Address"] ?> </td>
            <td> <?php echo $row["Phone"] ?> </td>
            <td> <?php echo $row["Email"] ?> </td>
            
            <td><button style="border:2px solid #add8e6;background-color:#add8e6;color:black;border-radius:2px;padding:15px;"> <a style="text-decoration:none;color:inherit;" href = "edit.php?id= <?php echo $row["ID"] ?>"> Edit </a></button> </td>
            <td><button  style="border:2px solid #e3242b;background-color:#e3243b;border-radius:2px;color:black;padding:10px;">  <a style="text-decoration:none;color:inherit;" href = "delete.php?id= <?php echo $row["ID"] ?>"> Delete </a></button ></td>
        </tr>
        
        <?php }
      } 
      else {
        echo "0 results";
      }
    

?>
<?php
if(isset($_POST['submit'])){
    $one=$_POST['name'];
    $two=$_POST['date'];
    //$three=$_POST['age'];
    $four=$_POST['gender'];
    $five=$_POST['blood'];
    $six=$_POST['add'];
    $seven=$_POST['phone'];
    $eight=$_POST['email'];
    
    $sql="INSERT INTO donor(Name,Date_of_Birth,Gender,Blood_group,Address,Phone,Email)
    VALUES('$one','$two','$four','$five','$six','$seven','$eight')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo" Record created successfully";
       
    }
    else{
        echo"Error".mysqli_error($conn);
    }
    }
    
//closing the connection
mysqli_close($conn);

?>

</table>
    </div>
</body>
</html>