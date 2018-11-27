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
                <a class="navbar-brand" href="#"><h2 class="white">EFFICIENT DOCTOR PATIENT PORTAL</h2></a>
            </div>
              <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="admhome.php">Home</a></li>
                <li class=""><a href="doctor page.php">Registration</a></li>
                
                
              </ul>
            </div>
          </div>
        </div>
      </nav>
        <div class="container">
        <div class="row">
          <div class="banner-info"> 
            
            <div class="banner-text text-center">
                
            <!--  <h1 class="white">EFFICIENT DOCTOR PATIENT PORTAL</h1>-->
              <h3 class="white">DOCTOR REGISTRATION</h3>
              
            </div>
          </div>
        </div>
      </div>
  <!--/ banner-->
  <!--service-->
  
  <form method="POST" action="docadddetails.php">
      <table align="center" border:"none">
         
                  <tr>
                 <td>Doctor id:</td>
                 <td><input type="text" name="doctorid" value=" " autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Doctor Name:</td>
                 <td><input type="text" name="docname" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Department Name:</td>
                 <td><input type="text" name="depname" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Gender:</td>
                 <td><input type="radio" name="gendermale" value="" autocomplete="off"/>Male</td>
                 <td><input type="radio" name="genderfemale" value="" autocomplete="off"/>Female</td>
                 <td><input type="radio" name="genderother" value="" autocomplete="off"/>Others</td>
             </tr>
             <tr>
                 <td>Dob:</td>
                 <td><input type="date" name="dob" value="" autocomplete="off" /></td>
             </tr>
             <tr>
                 <td>Age:</td>
                 <td><input type="text" name="age" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Qualification:</td>
                 <td><input type="text" name="quali" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Category:</td>
                 <td> <select name="category">
             <option value="select">select...</option>
             <option value="regular">regular</option>
             <option value="weekly">weekly</option>
             <option value="monthly">monthly</option>
         </select>
                 </td>
             </tr>
             <tr>
                 <td>Count</td>
                 <td><input type="text" name="cntnum" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>House No:</td>
                 <td><input type="text" name="hno" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Street:</td>
                 <td><input type="text" name="street" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>City:</td>
                 <td><input type="text" name="city" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>District:</td>
                 <td><input type="text" name="dist" value="" autocomplete="off"/></td>
             </tr>
             <tr>
                 <td>Pincode:</td>
                 <td><input type="text" name="pin" value="" autocomplete="off"/></td>
              </tr>
              <tr>
                  <td>Email:</td>
                  <td><input type="text" name="email" placeholder="example@gmail.com" autocomplete="off"/></td>
              </tr>
              
              <tr>
                  <td>Username:</td>
                  <td><input type="text" name="username" value="" autocomplete="off"/></td>
              </tr>
              <tr>
                  <td>Password:</td>
                  <td><input type="password" name="password" value=""/></td>
               </tr>
               <tr>
                   <td><input type="submit" name="submit" value="SUBMIT"/></td> <td><input type="submit" name="submit" value="NEXT" formaction="docpageconti.php"/></td>
               </tr>
               
                  
               
         </table>
      
      
           </form>
  
<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
