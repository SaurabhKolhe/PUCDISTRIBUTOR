<?php
    session_start();

	$message=$_POST['message'];
	$title=$_POST['title'];
   
	$user=$_SESSION['user'];
	$mobile=$_SESSION['mobile'];

		$username = "psquareacademy@gmail.com";
	    $hash = "eba04c690ecc9d4dc37ec4b73ed25dc653e36f7b972f501fcafe8da41cd65369";

		// Config variables. Consult http://api.textlocal.in/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "TXTLCL"; // This is who the message appears to be from.
		$numbers ="919503028202";
		$message = "Message From Client ".$user." mobile ".$mobile." Title : ".$title." Message=>".$message;
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.textlocal.in/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		curl_close($ch);
		
		

	
     
    header( "Location:ClientHome.php" ); 
?>