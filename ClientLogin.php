<?php
session_start();
   
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$flag=0;

    $_SESSION['user']=$user;
	$_SESSION['mobile']=$mobile;

$result=mysqli_query($conn,"select *  from client where name='$user' and mobile='$mobile'");

while($row=mysqli_fetch_array($result)) 
{
 
          if($user==$row['name'] && $mobile==$row['mobile'])
         {
                  $flag=1;
                  break;
         }    


}
if($flag==1)
{
	
	$result=mysqli_query($conn,"SELECT * FROM `slip` WHERE end_date=(SELECT max(end_date) FROM slip WHERE name='$user' and mobile='mobile')");
    
while($row=mysqli_fetch_array($result)) 
{
 $edate=$row['end_date'];
                  break;
}
	
	date_default_timezone_set("Asia/Kolkata");
    $date=date("d-m-Y");
	// Creates DateTime objects 
	$datetime1 = date_create("$date"); 
	$datetime2 = date_create("$edate"); 
	  
	// Calculates the difference between DateTime objects 
	$interval = date_diff($datetime1, $datetime2); 
	  
	// Display the result 
	//echo $interval->format('Difference between two dates: %a days'); 
	$_SESSION['day']=$interval;

    header("location:ClientHome.php");
  
}
else
{
    header("location:Home.html");

}
mysqli_close($conn);
?>