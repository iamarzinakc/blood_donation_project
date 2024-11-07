<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script>
            function openform(){
                document.getElementById("myform").style.display="block";
            }

            functiion closeform(){
                document.getElementById("myform").style.display="none";
            }
            </script>
</head>
<style>
body{
	font-family: 'Titillium Web', sans-serif;
}
	input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F7EDED;

}
input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F7EDED;

}
input[type=time], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F7EDED;

}
input[type=text]:hover{
    transition: 0.1s ease-in;
    background-color: #EFDEDE;
 }
 </style>
<body>
    
    <div class="form" id="myform">
    <h4>Donor Form</h4>
    

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name:<input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span><br><br>
        Date Of Birth:<input type="date" name="date">
        <span class="error">* <?php echo $dateErr;?></span><br><br>
        <!--Age:<input type="number" name="age"><br><br>-->
        Gender:<input type="radio" name="gender" value="female" >Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span><br><br>

    Blood Group:<select name="blood">
    <option value="">Select...</option>
        <option value="O-">O-</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="A+">A+</option>
        
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="AB-">AB-</option>
        <option value="AB+">AB+</option>
</select><span class="error">* <?php echo $optionErr;?></span><br><br>
 Address:<input type="text" name="add"><span class="error">* <?php echo $addErr;?></span><br><br>
 Phone:<input type="text" name="phone"><span class="error">* <?php echo $phoneErr;?></span><br><br>
 Email:<input type="email" name="email"><br><br>
<input type="submit" name="submit" value="Submit">
<button type="button" class="cancel" onclick="closeform()">Close</button>

</form>
</div>
</body>
</html>
<?php
// define variables and set to empty values
$nameErr =$ $emailErr = $genderErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
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
    echo" REcord created successfully";
    
}
else{
    echo"Error".mysqli_error($conn);
}
}
?>