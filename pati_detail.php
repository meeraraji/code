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
                <li class="active"><a href="pati_home.php">Home</a></li>
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
            
          </div>
        </div>
      </div>
   
         <form name="pati_detail" method="post" action="patidetail.php">
             <!--<table border="0" width="500" align="center">;
           <? php
            //    session_start();
/*            
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($_POST['mybutton'] == 'Update')
{
  ///do save processing
	//include('connectionstring.php');
	
	//if(!$connection)
	//{
	//	die('Could not connect to database : '.mysql_error());
	//}
	$con=mysqli_connect("localhost","root","","edpp") or die('error');
	//$inputname=$_POST['Find'];
	
	$myquery="SELECT * FROM tbl_pati_reg WHERE username='$login_session'";
	//$fetched=mysql_query($myquery);
	$result=mysqli_query($con,$myquery);
        $row=mysqli_fetch_array($result);
	//while($rowvalue=mysql_fetch_array($fetched))
	//{
		$n=$rowvalue['p_name'];
		$g=$rowvalue['p_gen'];
		$a=$rowvalue['p_age'];
		$num=$rowvalue['P_hno'];
		$s=$rowvalue['p_street'];
		$c=$rowvalue['p_city'];
                $pin=$rowvalue['P_pin'];
		$con=$rowvalue['p_contact'];
		$email=$rowvalue['p_email'];
	
            
                echo "<tr>";
                echo "<caption ><h3>My Details</h3>";
                    echo "</caption>";	
                echo "</tr>";
                echo "<td>Name                         :</td>";
			<td><input type="text" name="name" value='$n' ></td>
		</tr>
                <tr>
			<td>Gender                       :</td>
			<td><input type="text" name="gender" value='$g'></td>
			
		</tr>
		<tr>
			<td>Age                           :</td>
			<td><input type="text" name="age" value='$a'></td>
		</tr>
		<tr>
			<td>House Number              :</td>
			<td><input type="text" name="hno" value='$h' ></td>
		</tr>
                <tr>
			<td>Street                  :</td>
			<td><input type="text" name="street" value='$s' ></td>
		</tr>
                <tr>
			<td>City                   :</td>
			<td><input type="text" name="city" value='$c' ></td>
		</tr>
                <tr>
			<td>Pin Code                 :</td>
			<td><input type="text" name="pin" value='$pin' ></td>
		</tr>
                <tr>
			<td>Contact Number               :</td>
			<td><input type="text" name="contact" value='$con' ></td>
		</tr>
		
		<tr>
			<td>Email                  :</td>
			<td><input type="text" name="email" value='$email' ></td>
		</tr>-->
             <table border="0" width="500" align="center">
                <tr>
                    <td>Do you want to update your data??<input type="submit" name="mybutton" value="Update" > </td>
                </tr>
                <tr><td>
                <!--<input type="submit" name="mybutton" value="Submit" ></td>
                         </tr>-->
             </table>
            


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <!--<php
  session_start();
  ?>-->
    </body>
</html>
