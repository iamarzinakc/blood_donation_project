
<?php include("header.php");?><!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
       
</head>
<style>
.h4{
    background-color:green;
    
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
.title {
	border:1px solid #F7EDED;
    border-radius: 10px;
    padding: 20px;
    display: block;
    margin-left: 500px;;
    
    margin-top:-1000px;
    width: 30%;
}
 </style>
<body>
    
    <div class="title" id="myform">
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