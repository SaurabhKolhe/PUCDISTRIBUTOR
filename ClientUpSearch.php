<?php
	session_start();
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$flag=0;

$result=mysqli_query($conn,"select *  from client where name='$user' and mobile='$mobile'");
while($row=mysqli_fetch_array($result)) 
{ 
$flag=1;         
$_SESSION['id']=$row['id'];
echo'<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Update Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form action="ClientUpdate.php" method="POST" class="appointment-form" id="appointment-form">
                <h2>Client Detail Update Form</h2>
                <div class="form-group-1">
                    
                    <h3>Name</h3>
					<input type="text" name="user" id="name" value='.$row['name'].' required />
					<h3>Mobile Number</h3>
					<input type="text" name="mobile" id="phone_number" value='.$row['mobile'].' required />
                    <h3>Email</h3>
					<input type="email" name="email" id="email" value='.$row['email'].' required />
					<h3>Address</h3>
					<textarea rows="5" cols="63" name="addr" id="title" placeholder="Address" required >'.$row['address'].'</textarea>
					<h3>Center Code</h3>
					<input type="number" name="center" id="name" value='.$row['center'].' required />   
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>';     
}
if($flag==0){
	 echo '<h1>Client not Exist in Record</h1>';
					 echo'<form action="ClientUpSearch.html" method="POST" class="appointment-form" id="appointment-form">';
					 echo'<input type="submit" name="submit" id="submit" class="submit" value="Back" />';
					 echo'</form>'; 
}
mysqli_close($conn);
?>