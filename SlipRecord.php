<?php
   $mob=$_POST['mobile'];
   $user=$_POST['user'];
   $firstnumber=$_POST['first'];
   $lastnumber=$_POST['last'];
   $total=$_POST['total'];
   $Sdate=$_POST['Sdate'];
   $Sdate = date("d M Y", strtotime($Sdate));
   $Edate = new DateTime("$Sdate");
   $Edate->modify("+180 days");
   $Date = $Edate->format('d M Y');

//$Edate=strtotime($Edate);
 include("config.php");
				if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}

				$result="insert into slip values('$user','$mob','$Sdate','$Date','$firstnumber','$lastnumber','$total')";
				if(mysqli_query($conn,$result)){
					       
								header("Location:AdminHome.html");
	            }								
			   else{
				echo "ERROR: Could not able to execute $result. " . mysqli_error($conn);
				}
			
	mysqli_close($conn);
		  
?>