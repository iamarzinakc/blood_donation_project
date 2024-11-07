<?php $servername="localhost";
		$username="root";
		$password="";
		$dbname="demo";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
    
    $sql1="INSERT INTO blood (Blood_group, Volume)
    SELECT type, bags
    FROM colection";
    $result=mysqli_query($conn,$sql1);

	if($result){
		echo"Campaign Successfully Created";
	}
	else{
		echo"Error while inserting data";

	
	}

    ?>