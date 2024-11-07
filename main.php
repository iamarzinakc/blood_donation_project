<?php

include('header.php');
include('secure.php');
if(isset($_SESSION['name'])){
    //if($_SESSION['name']){
   ?>

<!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" href="main.css"> 
         

         
         <title>LifeGift </title>
 </head>
 <body>
 

 
 


<div class="content" >
<div class="text"> BLOOD TYPES</div>
<div class="all"><img style="margin-top:5px;"src="blood6.png">O+</div>
<div class="aall"><img style="margin-top:5px;"src="blood6.png">O-</div>
<div class="ball"><img style="margin-top:5px;"src="blood6.png">A+</div>
<div class="bball"><img style="margin-top:5px;"src="blood6.png">A-</div>
<div class="call"><img style="margin-top:5px;"src="blood6.png">B+</div>
<div class="ccall"><img style="margin-top:5px;"src="blood6.png">B-</div>
<div class="abll"><img style="margin-top:5px;"src="blood6.png">AB+</div>
<div class="aabll"><img style="margin-top:5px;"src="blood6.png">AB-</div>

    </div>
    
</body>
</html>

<?php
}
 else{
 
     header("Location:login.php"); 
    // <input type="submit" name="submit" value="login"></a>';
   
     }
     ?>