<?php
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$pass=$_POST['pass'];
$repass=$_POST['repass'];
session_start();
$user=$_SESSION['user'];
$result="update admin set Password='$pass' where Username='$user'";
if($pass==$repass){

if(mysqli_query($conn,$result)){
				header("Location:AdminLogin.html");
				} else{
				echo "ERROR: Could not able to execute $result. " . mysqli_error($conn);
				}
}else{
 		header("Location:NewPassword.html");

}	
mysqli_close($conn);			
?>

