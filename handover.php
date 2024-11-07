<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
       
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
    <h4>Issued Form</h4>
        <form action="" method="post">
        Reference code:<input type="text" name="ref"><br><br>
        Issued To:<input type="text" name="name"><br><br>
        Date of issue<input type="date" name="date"><br><br>
        <!--Age:<input type="number" name="age"><br><br>-->
    
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
 Amount Paid:<input type="text" name="add"><br><br>
 Volume:<input type="text" name="volume"><br><br>
<input type="submit" name="submit" value="Submit">

</form>
</div>
</body>
</html>



/*$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
if(isset($_POST['submit'])){
$one=$_POST['ref'];
$two=$_POST['name'];
//$three=$_POST['age'];
$four=$_POST['date'];
$five=$_POST['blood'];
$six=$_POST['add'];
$seven=$_POST['volume'];

$sql="INSERT INTO handover(ref_code,patient,issue,Blood_group,amount,volume)
VALUES('$one','$two','$four','$five','$six',$seven)";
$result=mysqli_query($conn,$sql);
if($result){
    echo" REcord created successfully";
    
}
else{
    echo"Error".mysqli_error($conn);
}
}*/