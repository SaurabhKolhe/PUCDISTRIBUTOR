<?php
	session_start();

		$user     = $_SESSION['user'];
		$email    = $_SESSION['email'];
		$mob      = $_SESSION['mobile'];
		$addr     = $_SESSION['addr'];
		$center   = $_SESSION['center'];
		$location = $_SESSION['location'];
		$date     = $_SESSION['date'];
		$center   = intval($center);

		
	if(count($_POST)>0){
		if($_SESSION['otp']==$_POST['otpvalue']){
			unset ($_SESSION['otp']);
			
			    include("config.php");
				if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				$result="insert into client(name,email,mobile,address,center,location,date) values('$user','$email','$mob','$addr',$center,'$location','$date')";
				if(mysqli_query($conn,$result)){
					        header("Location:success.html");
	            }								
			   else{
				echo "ERROR: Could not able to execute $result. " . mysqli_error($conn);
				}
			
			
		  }
		else{
		
			 header("Location:ClientSMS.html");
		}
	}
	mysqli_close($conn);
?>