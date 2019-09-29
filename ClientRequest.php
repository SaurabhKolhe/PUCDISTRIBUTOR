<?php

$mob=$_POST['mobile'];
$user=$_POST['user'];
$center=$_POST['center'];
$sms=$_POST['message'];
$center=intval($center);


date_default_timezone_set("Asia/Kolkata");
$date=date("d-m-Y");
$day=date("l");
$time=date("h:i:sa");

include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result="insert into request(name,mobile,center,message,date,day,time) values('$user','$mob',$center,'$sms','$date','$day','$time')";
if (mysqli_query($conn,$result)) 
{
	$numbers="919503028202";
   //$numbers = str_replace("-", "", $mob);   // A single number or a comma-seperated list of numbers
   $username = "psquareacademy@gmail.com";
   $hash = "eba04c690ecc9d4dc37ec4b73ed25dc653e36f7b972f501fcafe8da41cd65369";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	
	$message ="Name:".$user.". Mobile Number:".$mob.". Center Code:".$center.". Send Message : ".$sms;
	// 612 chars or less+
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	header("Location:ClientHome.php");
    
}  
else
{
	echo "ERROR: Could not able to execute $result. " . mysqli_error($conn);
}
mysqli_close($conn);
?>