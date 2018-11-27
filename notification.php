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
                <a class="navbar-brand" href="#"><h2 class="white">DOCTOR</h2></a>
            </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li class=""><a href="view_bookingdetails.php">View booking details</a></li>
                <li class=""><a href="doc_apply_leave.php">Apply leave</a></li>
                <li class=""><a href="notification.html">Notification</a></li>
                <li class=""><a href="index.html">Logout</a></li>
                
                
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
              <h2 class="white">Notification</h2>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
 <!--     </div>
    </div>
  </section>-->
  <!--/ banner-->
  <!--service-->
<form method="=post" action="">
<!--<label>Patient name:</label><input type="text" name="pname" /><br />-->
<br />
<!--<p align="center"><label>Patient name:</label><input type="text" name="pname"/></p>-->
<?php
include 'session.php';
 $con=mysqli_connect("localhost","root","","edpp") or die('error');
               $sql="select doc_id from tbl_doc_reg where username='$login_session'";
               $result=mysqli_query($con,$sql);
               $count=$count=mysqli_num_rows($result);
               $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
               $did=$row['doc_id'];
              // $con=mysqli_connect("localhost","root","","edpp") or die('error');
               $sqln="select leave_date,leave_status from tbl_doc_leave where doc_id='$did' and leave_status='approved'";
	       $resultn=mysqli_query($con,$sqln);
               $countn=mysqli_num_rows($resultn);
              
               
               
?>
<table border="1" align="center">
<tr>
    <th class="white">LEAVE DATE</th><th class="white">LEAVE STATUS</th>
</tr>
<?php
 
	while($countn>0)
	{
                $rown=mysqli_fetch_array($resultn,MYSQLI_ASSOC);
		echo"<tr>";
		echo"<td class='white'>".$rown['leave_date']."</td>";
		echo"<td class='white'>".$rown['leave_status']."</td>";
		$countn--;
	}
        
     echo  "</table>";
     
      echo "<br />";
      echo "<br />";
     	 
?>
<!--</table>
<br />
<br />
<p align="center"><a href="doc_add_prescription.php?"><input type="button" value="Add prescription"/></a></p>-->
</form>
<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>