<?php
    session_start();
	$user     = $_SESSION['user'];
	$mobile   = $_SESSION['mobile'];
	$email    = $_SESSION['email'];
    $address   = $_SESSION['addr'];
	$center   = $_SESSION['center'];
	$date     = $_SESSION['date'];
    $location = $_SESSION['location'];
	$center=intval($center);
	
	echo'
	<html>
	<head>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
<h2>Saykar Service Station</h2> <br> <br>
	<div class="row">
	
       <div class="col-md-10 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div> <img alt="User Pic" src="'.$location.'" id="profile-image1" class="img-circle img-responsive"> 
                     </div>
              <br>
    
              <!-- /input-group -->
            </div >
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">'.$user.'</h4></span>
              <span><p>Date: '.$date.'</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Client Name:</div><div class="col-sm-7 col-xs-6 ">'.$user.'</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Mobile Number:</div><div class="col-sm-7">'.$mobile.'</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email ID:</div><div class="col-sm-7">'.$email.'</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Address:</div><div class="col-sm-7">'.$address.'</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Center Code:</div><div class="col-sm-7">'.$center.'</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>
<br><br>
<button onclick="myFunction()"  style="background-color:grey;margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>         
</div>
</div>
</body>
</html>
';
?>
 