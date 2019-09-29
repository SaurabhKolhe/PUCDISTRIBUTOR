<?php
session_start();
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result=mysqli_query($conn,"select *  from client ");

while($row=mysqli_fetch_array($result)) 
{
    $edate=$row['end_date'];
     $user=$row['name'];
     $mob=row['mobile'];
	 
	date_default_timezone_set("Asia/Kolkata");
    $date=date("d-m-Y");
	// Creates DateTime objects 
	$datetime1 = strtotime("$date"); 
	$datetime2 = strtotime("$edate"); 
	  
	// Calculates the difference between DateTime objects 
	$interval = $datetime2-$datetime1;
	$interval= floor($interval/(60*60*24));
if ($interval<6)
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
	
	$message = "Your PUC Slip will be expired after ".$interval." on ". $edate.".Please Renew before expiry date.Thank You :)";
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
}  

}
mysqli_close($conn);
?>