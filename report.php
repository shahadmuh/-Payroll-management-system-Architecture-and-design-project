<!DOCTYPE html>
<html lang="en" class=" js no-touch">

<head>
  <?php
session_start();

if(!isset($_SESSION['usernme'])){
header("location: login.php");
}
$servername = "localhost";
$username = "436201525";
$password = "1234";
$dbname = "Payroll";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<script>
xmlhttp.onreadystatechange = function()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
    }
    else 
    </script>
  <?php  
    $servername = "localhost";
$username = "1234";
$password = "1234";
$dbname = "Payroll";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
}
?>

  <title>Employee Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/slick-team-slider.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Tempo
    Theme URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--HEADER START-->
  <div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
          <a class="navbar-brand" href="index.html">Acme</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#service" name="vacay">Remaining Vacation Time</a></li>
            <li><a href="#portfolio" name="hoursWorked">Total Hours Worked</a></li>
            <li><a href="#about" name="spec">Specific Project Hours</a></li>
            <li><a href="#contact" name="totalPay">Total Pay received year-to-date</a></li>
            <li><button class="button-medium" id="contact-submit" type="submit" value="logout"> logout</button></li> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <!--BANNER START-->
  <div id="banner" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1 class="small">Welcome To <span class="bold">Payroll Management System</span></h1>
          
          <div class="container">
	<div class="row">
		
	</div>
</div>
           
           
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->

  <!--CTA1 START-->
  <div class="cta-1">
    <div class="container">
      <div class="row text-center white">
        <h1 class="cta-title">Say Hey to Acme</h1>
       
      </div>
    </div>
  </div>
  <!--CTA1 END-->

  <!--SERVICE START-->
  <div id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Remaining Vacation Time</h1>
          
        <p><div  class="col-md-12 row">

					
					        <p><div class="col-md-12 row">
          <hr class="pg-titl-bdr-btm"></hr>
          </p>
        </div>
       </div>
    </div>
  </div>
  <!--SERVICE END-->
  

  
  
  
  
  
  <div id="portfolio">
    <div class="container">
      <div class="page-title text-center">
        <h1>Total Hours Worked</h1>
   
					
        <p><div class="col-md-12 row">



        <hr class="pg-titl-bdr-btm"></hr>
      </p>
        </div>
      </div>
    </div>
  </div>

  <!--TEAM START-->
  <div id="about" class="section-padding">
    <div class="container">
        <div class="page-title text-center">
    <h1>Specific Project Hours</h1>
    
    <h3> enter project name : </h3>
    	<form action="" method="post" role="form" class="ProjectForm">
					<div class="input-group">
						<input type="text" id="name" class="form-control" name="proName" placeholder="project name">
						
						<input class="button-medium" id="contact-submit" name="specSub" type="submit" value="project"> 
					</div>
				</form>
   
					
        <p><div class="col-md-12 row">



        <hr class="pg-titl-bdr-btm"></hr>
      </p>
        </div>
      </div>
    </div>
  </div>
  <!--TEAM END-->

  <!--CTA2 START-->
  <div class="cta2">
    <div class="container">
      <div class="row white text-center">
        <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
   
      </div>
    </div>
  </div>
  <!--CTA2 END-->

  <!--CONTACT START-->
  <div id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Total Pay Received year-to-date</h1>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        
      </div>
    </div>
  </div>
  <!--CONTACT END-->

  <!--FOOTER START-->
  <footer class="footer section-padding">
    <div class="container">
      <div class="row">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
          <h3>Follow us on</h3>
          <div class="footer_social">
            <ul>
              <li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
  </footer>
  <!--FOOTER END-->
  <div class="footer-bottom">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
        <div class="footer_copyright">
          <p> © Copyright, All Rights Reserved.</p>
          
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
