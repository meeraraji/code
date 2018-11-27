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
              <h4 class="white">Prescription</h4>
              
            </div>
            
          </div>
        </div>
      </div>
   
  <!--/ banner-->
  <!--service-->
 
<!--<img src="prjimage1.jpg" style="height: 109px;width: 1000px;align-content: center;margin-left: 404px;margin-top: 9px;" width="100%" height="40%">-->
<form method="POST" action="doc_add_prec.php">
    
<fieldset style="width: 745px;align-content: left;align-content: right;margin-left: 400px;margin-top: 80px;">

  <!--<legend style="font-size:70%;">  </legend>-->
  
<table align="center">
<tbody>
<tr><td>Date         :    </td><td>     <input type="date" name="ddate" required="" /></td></tr>
<tr><td>Disease      :      </td>  <td> <input type="text" name="disease" required=""/></td></tr>
<tr><td>prescription :     </td><td>    <textarea rows="4" cols="50" name="prescription"></textarea></td></tr>              
<tr><td>                   <input name="abutton" value="Add" type="submit"/></td></tr>
</tbody>
</table>
</fieldset>
</form>
<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
        
</body>
</html>