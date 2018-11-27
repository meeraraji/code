<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <a class="navbar-brand" href="#"><h2 class="white">EDPP</h2></a>
            </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Login</a></li>
                <!--<li class=""><a href="login.php">login</a></li>-->
               <!-- <li class=""><a href="doc_apply_leave.php">Apply leave</a></li>
                <li class=""><a href="notification.html">Notification</a></li>
                <li class=""><a href="index.php">Logout</a></li>-->
                
                
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
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--<html>
    <head>
        <title>EDPP</title>
       
    </head>-->
<!--<html>
    <head>
        <title>EDPP</title>-->
        <script type="text/javascript">  
function validate()  
{  
 var valueDate = document.getElementById('Date').value;

if(!Date.parse(valueDate)){
  alert('date is invalid');
}
    var name=document.pati_reg.name.value; 
  if (name==null || name==""){  
  alert("Name can't be blank");  
  }
    var num=document.pati_reg.age.value;  
if (isNaN(age)|| age=""){  
  alert("Enter Numeric value only");   
  }
   var hnum=document.pati_reg.hno.value; 
  if (hnum==null || hnum==""){  
  alert("house number can't be blank");  
  }
 //var strt=document.pati_reg.street.value; 
 // if (strt==null || strt==""){  
  //alert("Street can't be blank");  
  //}
  //var p=document.pati_reg.password1.value;
  //var cp=document.pati_reg.confirmpas.value;
  //if(p!=cp){
      //alert("confirm password");
//}
var x=document.pati_reg.userEmail.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length||userEmail=""){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }  
    var pass=document.pati_reg.password1.value;
   var pass1=document.pati_reg.confirmpas.value;
  if(pass!==pass1)
  {
  alert("passwords should be match")
}  
}
</script>  

        <form name="pati_reg" method="POST" action="preg.php" onsubmit=" return validate();" >
            
<!DOCTYPE html>
<!--<html lang="en">

<head>-->
<!--  <meta charset="utf-8">
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
<!--</head>-->

<!--<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <!--<section id="banner" class="banner">
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
                <a class="navbar-brand" href="#"><h2 class="white">patient</h2></a>
            </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                 <li class="active"><a href="index.html">Home</a></li>
                
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
              <h3 class="white">Patient Registration</h3>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>

  <!--/ banner-->
  <!--service-->
	<table border="0" width="500" align="center">
               <tr>
                <caption ><h3>Patient Registration</h3>
                    </caption>	
                </tr>
               <!--<tr>
                    <td>Patient ID                                   :</td>
                    <td><output name="pid" ></output></td>
		</tr>-->
                <tr>
                    <td> Date</td>
                    <td><input type="date" name="Date1" id="Date"/>
                </tr>
                <tr><td>Name</td>
			<td><input type="text" name="name" ></td>
		</tr>
                <tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male" > Male
			<input type="radio" name="gender" value="Female" >Female
			<input type="radio" name="gender" value="Others">Others
                        </td>
			
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" ></td>
		</tr>
		<tr>
			<td>House Number</td>
			<td><input type="text" name="hno" ></td>
		</tr>
                <tr>
			<td>Street</td>
			<td><input type="text" name="street"></td>
		</tr>
                <tr>
			<td>City</td>
			<td><input type="text" name="city" ></td>
		</tr>
                <tr>
			<td>Pin Code</td>
			<td><input type="text" name="pin" ></td>
		</tr>
                <tr>
			<td>Contact Number</td>
			<td><input type="text"  name="contact"></td>
		</tr>
		
		<tr>
			<td>Email</td>
			<td><input type="text" name="userEmail" ></td>
		</tr>
                <tr>
			<td>Password</td>
			<td><input type="text" name="password1" value=""></td>
		</tr>
		<!--<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="confirmpas" value=""></td>
		</tr>-->
		<tr>
			<td colspan=2>
			<input type="submit" name="register-user" value="Register"></td>
		</tr>
                
	</table>
            </form>
  <!--<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
-->
        
    </body>
</html>
