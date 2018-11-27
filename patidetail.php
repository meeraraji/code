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
    
<?php
include('session.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //if($_POST['mybutton']=='Update')
//{
  ///do save processing
	//include('connectionstring.php');
	
	//if(!$connection)
	//{
	//	die('Could not connect to database : '.mysql_error());
	//}
	$con=mysqli_connect("localhost","root","","edpp") or die('error');
	//$inputname=$_POST['Find'];
	
	$myquery="SELECT * FROM tbl_pati_reg WHERE p_id='$login_session'";
	//$fetched=mysql_query($myquery);
	$result=mysqli_query($con,$myquery);
        //$count=mysqli_num_rows($result);
        $rowvalue=mysqli_fetch_array($result,MYSQLI_ASSOC);
	//while($rowvalue=mysql_fetch_array($fetched))
	//{
		$n=$rowvalue['p_name'];
		$g=$rowvalue['p_gen'];
		$a=$rowvalue['p_age'];
		$num=$rowvalue['p_hno'];
		$s=$rowvalue['p_street'];
		$c=$rowvalue['p_city'];
                $pin=$rowvalue['p_pin'];
		$conn=$rowvalue['p_contact'];
		$email=$rowvalue['p_email'];
                //mysql_close($con);

        //}
                ?>

<div class="container">
<div class="fetched">
<form name="pdetail" method="post" action="patidetail.php">
        <table border="0" width="500" align="center">;
            <tr><td><caption><h3>Update Information</h3></caption></td></tr>
        <tr><td>Name  :</td>
        <td><input name="name" type="text" value='<?php echo $n; ?>'/></td></tr>
	<tr><td>Gender  :</td>
            <td><input name="gender" type="text" value='<?php echo $g; ?>'/></td></tr>
	<tr><td>Age</td>
            <td><input name="age" type="text" value='<?php echo $a; ?>'/></td></tr>
        <tr><td> House Number</td>
            <td><input name="num" type="text" value='<?php echo $num; ?>'/></td></tr>
	<tr><td>Street</td>
            <td><input name="s" type="text" value='<?php echo $s; ?>'/></td></tr>
	<tr><td>city</td>
            <td><input name="c" type="text" value='<?php echo $c; ?>'/></td></tr>
	<tr><td>Pin code</td>
            <td><input name="pin" type="text" value='<?php echo $pin; ?>'/></td></tr>
	<tr><td>Contact Number</td>
            <td><input name="conn" type="text" value='<?php echo $conn; ?>'/></td></tr>
        <tr><td>Email</td><td>
                <input name="e" type="text" value='<?php echo $email; ?>'/></td></tr>
        <tr><td><input type="submit" name="sub" value="Submit"></table>
	</form>
    </div>
</div>
    <?php
    //include('session.php');
//$con=mysqli_connect("localhost","root","","edpp") or die('error');
//$daten=filter_input(INPUT_POST,'Date1');
  $namen=filter_input(INPUT_POST,'name');
  $gendern=filter_input(INPUT_POST,'gender');
  $agen=filter_input(INPUT_POST,'age');
  $hnon=filter_input(INPUT_POST,'num');
  $streetn =filter_input(INPUT_POST,'s');
  $cityn=filter_input(INPUT_POST,'c');
  $pinn=filter_input(INPUT_POST,'pin');
  $contactn=filter_input(INPUT_POST,'conn');
  $emailn=filter_input(INPUT_POST,'e');
  //$passwordn=filter_input(INPUT_POST,'password1');
 
  //$sql= "INSERT INTO tble_pati_reg VALUES (NULL, '$daten,'$namen', '$gendern', '$agen',$emailn,$hnon,$streetn,$cityn,$pinn,$contactn,$passwordn);";
//$sql="INSERT INTO 'tble_pati_reg' ("p_id',`date`, `p_name`, `p_gen`, `p_age`, `p_email`, `p_hno`, `p_street`, `p_city`, `p_pin`, `p_contact`, `p_pwd`) VALUES($daten','$namen','$gendern', '$agen','$emailn','$hnon','$streetn','$cityn','$pinn','$contactn','$passwordn')";
  //$sql="INSERT INTO `tbl_pati_reg`(`date`, `p_name`, `p_gen`, `p_age`, `p_email`, `p_hno`, `p_street`, `p_city`, `p_pin`, `p_contact`, `p_pwd`) VALUES ('$daten','$namen','$gendern', '$agen','$emailn','$hnon','$streetn','$cityn','$pinn','$contactn','$passwordn')";
   $sql= "UPDATE `tbl_pati_reg` SET `p_name`='$namen',`p_gen`='$gendern',`p_age`='$agen',`p_email`='$emailn',`p_hno`='$hnon',
           `p_street`='$streetn',`p_city`='$cityn',`p_pin`='$pinn',`p_contact`='$contactn' 
           WHERE p_id='$login_session'";   
  $result=mysqli_query($con,$sql);
   //if($result)
   //{   
         	//header("location:patidetail.php");
                //echo "Your id: $row[p_id]";
				
 //}
//else
//{
	//echo "error";
//}
?>


 <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  </body>
</html>