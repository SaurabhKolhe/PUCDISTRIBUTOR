<?php
    session_start();
	$user=$_SESSION['user'];
	$mobile=$_SESSION['mobile'];
	include("config.php"); 
	// Check connection	
	if($conn === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$result="select * from client where name='$user' and mobile='$mobile'";
				while($row=mysqli_fetch_array($result)) 
               {
				$location=$row["location"];
				break;
	           }								
    mysqli_close($conn);
	echo'<html>
	      
	
	</html>';
?>