<?php
date_default_timezone_set("Asia/Kolkata");
$date=date("d-m-Y");

$your_date =("31-12-2019");
$interval = date_diff($date, $your_date); 
  
// Display the result 
echo $interval->format('Difference between two dates: %R%a days');
?>