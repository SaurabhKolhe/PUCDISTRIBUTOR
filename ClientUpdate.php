<?php
session_start();
    $mob=$_POST['mobile'];
	$user=$_POST['user'];
	$email=$_POST['email'];
	$addr=$_POST['addr'];
	$center=$_POST['center'];
    $center=intval($center);
 include("config.php");
				if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
               $id=$_SESSION['id'];
				$result="Update client set name='$user',email='$email',mobile='$mob',address='$addr',center='$center' where id='$id'";
				if(mysqli_query($conn,$result)){
					       
								header("Location:AdminHome.html");
	            }								
			   else{
				echo "ERROR: Could not able to execute $result. " . mysqli_error($conn);
				}
				mysqli_close($conn);
?>			