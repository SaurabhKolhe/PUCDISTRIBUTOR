<?php
session_start();
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$mob=$_POST['mobile'];
$user=$_POST['user'];

$result="select * from admin where Username='$user' and Mobile='$mob'";
if (mysqli_query($conn,$result)) 
{
   
   $rndno=rand(100000, 999999);//OTP generate
   $otp =$rndno;
   $numbers = str_replace("-", "", $mob);   // A single number or a comma-seperated list of numbers
   $username = "psquareacademy@gmail.com";
   $hash = "eba04c690ecc9d4dc37ec4b73ed25dc653e36f7b972f501fcafe8da41cd65369";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	
	$message = "This is OTP for Change Password.Please Don't Share it with Anyone ".$otp;
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
	$_SESSION['user']=$user;
    $_SESSION['otp']=$otp;
  
    header( "Location:AdminSMS.html" ); 
}
else
{
   header("location:AdminForget.html");
}
mysqli_close($conn);
?>