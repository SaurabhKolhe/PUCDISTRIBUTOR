<?php
session_start();
$day=$_SESSION['day'];
echo'
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Saykar Service Station</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts2/icomoon/style.css">

    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/jquery-ui.css">
    <link rel="stylesheet" href="css2/owl.carousel.min.css">
    <link rel="stylesheet" href="css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="css2/owl.theme.default.min.css">

    <link rel="stylesheet" href="css2/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css2/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts2/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css2/aos.css">

    <link rel="stylesheet" href="css2/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="ClientHome.php">Saykar Service Station</a></div>
        </div>
      </div>
      
	   <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="ClientHome.php" class="nav-link">Home</a></li>
                <li><a href="#contact" class="nav-link">Contact Us</a></li>
                <li><a href="#contact" class="nav-link">About</a></li>
                <li class="cta"><a href="Logout.php" class="nav-link"><span>Logout</span></a></li>
              </ul>
            </nav></li>
			 
          </div>

	  
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url(images1/background1.jpg");" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
			<marquee><div class="site-logo mr-auto w-25"><p> Your PUC Slips will Expire after '.$day->format('%a').' days</p></div></marquee>
              <div class="row align-items-center">
                  <div class="col-lg-6 mb-4">
                 <form action="Feedback.php" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Feedback</h3>
                    <div class="form-group">
                      <select name="title">
					      <option ="Title">Title</option>
3					      <option value="Change Mobile Number">Change Mobile Number</option>
						  <option value="Change Address">Change Address</option>
						  <option value="Change Email">Change Email</option>
						  <option value="Complaint">Complaint</option>
						  <option value="Other">Suggesions</option>
					 </select>
                    </div>
                    <div class="form-group">
                    <textarea rows="5" cols="45" name="message" id="title" placeholder="Message" required ></textarea>
                    </div>
                    
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Send Feedback">
			     </div>
			</form>
				 </div> 
				 
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
				  <h1  data-aos="fade-up" data-aos-delay="100">Slip Request</h1>
                 <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"> You can Request for Slip by click below</p>
                 <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                 <li class="cta"><a href="ClientRequest.html" class="nav-link"><span>Request Slip</span></a></li>
                 </ul>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
     
    <footer class="footer-section bg-white">
        <div id="contact">
	  <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Saykar Service Station</h3>
            <h5><strong>PUC Distributor Pimpri-Chinchwad</strong></h5>
            <p> Battery Dealers-Exide
			Inverter Dealers
			Battery Dealers
			Car Battery Dealers
			Automobile Battery Dealers
			UPS Battery Dealers
			Industrial Battery Dealers
			UPS Battery Dealers-Exide
			Car Battery Dealers-Exide
			Motorcycle Battery Dealers
			Motorcycle Battery Dealers-Exide
			Industrial Battery Dealers-Exide
			Traction Battery Dealers
			Traction Battery Dealers-Exide
			Emergency Light Battery Dealers
			Emergency Light Battery Dealers-Exide
			</p>
			</div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="ClientHome.html">Home</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Contact Us</h3>
            <p>+919921992200</p>
			<p>Bhoi Ali, Chinchwadgaon, Pune - 411033, Near New English School & Chaphekar Chowk (Map)</p>
            <a href="https://www.google.com/maps/place/Saykar+Service+Station/@18.6278748,73.7811332,18.82z/data=!4m8!1m2!2m1!1sBhoi+Ali,+Chinchwadgaon,+Pune+-+411033,+Near+New+English+School+%26+Chaphekar+Chowk!3m4!1s0x3bc2b9bab8278861:0xf4c86c156b8ec167!8m2!3d18.627685!4d73.781745">Click here to get Location on Google Maps</a>
          </div>

        </div>

        
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js2/jquery-3.3.1.min.js"></script>
  <script src="js2/jquery-migrate-3.0.1.min.js"></script>
  <script src="js2/jquery-ui.js"></script>
  <script src="js2/popper.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>
  <script src="js2/owl.carousel.min.js"></script>
  <script src="js2/jquery.stellar.min.js"></script>
  <script src="js2/jquery.countdown.min.js"></script>
  <script src="js2/bootstrap-datepicker.min.js"></script>
  <script src="js2/jquery.easing.1.3.js"></script>
  <script src="js2/aos.js"></script>
  <script src="js2/jquery.fancybox.min.js"></script>
  <script src="js2/jquery.sticky.js"></script>

  
  <script src="js2/main.js"></script>
    
  </body>
</html>';
?>