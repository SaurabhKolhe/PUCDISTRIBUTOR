<?php
date_default_timezone_set("Asia/Kolkata");
    $date=date("d-m-Y");
	// Creates DateTime objects 
	$datetime1 = strtotime("$date"); 
	$datetime2 = strtotime("02/07/2019"); 
	  
	// Calculates the difference between DateTime objects 
	$interval = $datetime2-$datetime1;
	$interval= floor($interval/(60*60*24));
	
if ($interval<6)
{
echo" hiii ,essage";
}
?>