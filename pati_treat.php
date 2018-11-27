<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello World</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
                <a class="navbar-brand" href="#"><h2 class="white">PATIENT</h2></a>
            </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="pati_home.php">Home</a></li>
                <!--<li class=""><a href="view_bookingdetails.php">View booking details</a></li>
                <li class=""><a href="doc_apply_leave.php">Apply leave</a></li>
                <li class=""><a href="notification.html">Notification</a></li>
                <li class=""><a href="index.html">Logout</a></li>-->
                
                
              </ul>
            </div>
          </div>
        </div>
      </nav>
                              

          
      <div class="container">
        <div class="row">
          <div class="banner-info">
            
            <div class="banner-text text-center">
              <h1 class="white">EFFICIENT DOCTOR PATIENT PORTAL</h1>
              
            </div>
                      </div>
        </div>
      </div>
    
  <!--/ banner-->
  <!--service-->


<form method="=post" action="pati_treat.php">
<!--<label>Patient name:</label><input type="text" name="pname" /><br />-->
<!--<p align="center"><label>Patient name:</label><input type="text" name="pname"/></p>-->
     <table align="center">
            <tr>
            <caption align="center"><h3>Treatment History</h3></caption>
            </tr>
            <tr><td>Date</td><td>Disease</td><td>Prescription</td></tr>
                <?php
//session_start();
include("session.php");
 $conn=mysqli_connect("localhost","root","","edpp") or die('error');
 $sql1="select * from tbl_treat_hist where p_id='$login_session'";
	$result=mysqli_query($conn,$sql1);
	$count=mysqli_num_rows($result);
        while($count>0)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo"<tr>";
                echo "<td>".$row['tdate']."</td>";
		echo"<td>".$row['disease']."</td>";
		echo"<td>".$row['prescription']."</td>"; echo "</tr>";
                $count--;
               //$pid=$row['p_id'];
        }

?>

 <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  </body>
</html>