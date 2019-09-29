<?php
session_start();
if(count($_POST)>0){
	if($_SESSION['otp']==$_POST['otpvalue']){
		unset ($_SESSION['otp']);
		echo "Veified Successfully !";
		header("Location:NewPassword.html");
	}
	else{
		echo "Invalid OTP!";
		header("Location:AdminSMS.html");
	}
}
?>