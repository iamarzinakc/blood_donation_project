<?php include("header.php");?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        
            
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
	
input[type=datetime-local], select, textarea {
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
input[type=number], select, textarea {
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
 input[type=submit] {
    background-color: #534C4C;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    padding: 5px;
    font-family: 'Titillium Web', sans-serif;
}

input[type=submit]:hover {
    background-color: #3B3333;
}
.collect{
	border:1px solid #F7EDED;
    border-radius: 10px;
    padding: 20px;
    display: block;
    margin-left: 500px;;
    background-color:#ab9393;
    margin-top:-1000px;
    width: 30%;
}

</style>
<body>
    
    <div class="collect" >
    <h4>Blood Collection  Form</h4>
        <form action="" method="post">
        Name:<input type="text" name="name"><br><br>
 Cmpaign/Hospital:<input type="text" name="cam"><br><br>
        <!--Age:<input type="number" name="age"><br><br>-->
        <!--Gender:<input type="radio" name="gender" value="female" >Female
    <input type="radio" name="gender" value="male">Male<br><br>-->
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
</select><br><br>
 Bags:<input type="number" name="add"><br><br>
 
 Date:<input type="datetime-local" name="date"><br><br>
<input type="submit" name="submit" value="Submit">

</form>
</div>
</body>
</html>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if(isset($_POST['submit'])){
$one=test_input($_POST['name']);
$two=test_input($_POST['cam']);
//$three=$_POST['age'];
$four=test_input($_POST['blood']);

$six=test_input($_POST['add']);
$seven=test_input($_POST['date']);


$sql="INSERT INTO colection(Name,cam_hos,type,bags,date)
VALUES('$one','$two','$four','$six','$seven')";
$result=mysqli_query($conn,$sql);
if($result){
    echo" REcord created successfully";
    
}
else{
    echo"Error".mysqli_error($conn);
}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>