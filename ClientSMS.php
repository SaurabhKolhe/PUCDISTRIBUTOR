<?php
    session_start();

	$mob=$_POST['mobile'];
	$user=$_POST['user'];
	$email=$_POST['email'];
	$addr=$_POST['addr'];
	$center=$_POST['center'];
	date_default_timezone_set("Asia/Kolkata");
    $date=date("d-m-Y");


	$_SESSION['user']=$user;
	$_SESSION['mobile']=$mob;
    $_SESSION['email']=$email;
    $_SESSION['addr']=$addr;
	$_SESSION['center']=$center;
	$_SESSION['date']=$date;


	   $rndno=rand(100000, 999999);//OTP generate
	   $otp =$rndno;
	   $numbers = str_replace("-", "", $mob);   // A single number or a comma-seperated list of numbers
	   $username = "psquareacademy@gmail.com";
	   $hash = "eba04c690ecc9d4dc37ec4b73ed25dc653e36f7b972f501fcafe8da41cd65369";

		// Config variables. Consult http://api.textlocal.in/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "TXTLCL"; // This is who the message appears to be from.
		
		$message = "This is a message from Saykar Service Station for Mobile Verification.Your One-Time-Password is ".$otp.".Do not Share with Anyone";
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
		
		
	$_SESSION['otp']=$otp;	
				
			$target_dir = "images/";
			$location = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($location,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($location)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $location)) {
					header( "Location:ClientSMS.html" );
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}

				$_SESSION['location']=$location;
		

	
     
     
?>