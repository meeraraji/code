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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" >
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
                  <li class="active"><a href="admupdateremove.php">Home</a></li>
                
                
                
              </ul>
            </div>
          </div>
        </div>
      </nav>
                              

          
<div class="container">
        <div class="row">
          <div class="banner-info">
            
            <div class="banner-text text-center">
              
              
            </div>
            
          </div>
        </div>
      </div>
    <?php
    include ('admsession.php');
    $con=mysqli_connect("localhost","root","","edpp") or die('error');
	
	
	$myquery="SELECT * FROM tbl_doc_reg WHERE doc_name='$login_session'";
	
	$result=mysqli_query($con,$myquery);
        
        $rowvalue=mysqli_fetch_array($result,MYSQLI_ASSOC);
	//while($rowvalue=mysql_fetch_array($fetched))
	//{
		$i=$rowvalue['doc_id'];
		$n=$rowvalue['doc_name'];
		$a=$rowvalue['dep_name'];
		$g=$rowvalue['doc_dob'];
		$s=$rowvalue['doc_quali'];
		$c=$rowvalue['doc_pin'];
                $em=$rowvalue['doc_email'];
		$conn=$rowvalue['username'];
		//$email=$rowvalue['p_email'];
    ?>
   <div class="container">
<div class="fetched">
        <form name="admupdateinfo" method="post" action="admupdateinfo.php">
        <table border="0" width="500" align="center">;
            <tr><td><caption><h3 class="white">Update Information</h3></caption></td></tr>
             <tr><td>Doctor id  </td>
        <td><input name="docid" type="text" value='<?php echo $i; ?>'></td></tr>
        <tr><td>Doctor Name  </td>
            <td><input name="docname" type="text" value='<?php echo $n; ?>'></td></tr>
	<tr><td>Department  </td>
            <td><input name="dept" type="text" value='<?php echo $a; ?>'></td></tr>
	<tr><td>Dateof Birth</td>
            <td><input name="g" type="text" value='<?php echo $g; ?>'></td></tr>
        <tr><td> Qualification</td>
            <td><input name="num" type="text" value='<?php echo $s; ?>'></td></tr>
	<tr><td>Pincode</td>
            <td><input name="s" type="text" value='<?php echo $c; ?>'></td></tr>
	<tr><td>Email</td>
            <td><input name="c" type="text" value='<?php echo $em; ?>'></td></tr>
	<tr><td>Username</td>
            <td><input name="pin" type="text" value='<?php echo $conn; ?>'/></td></tr>
	
        <tr><td><input type="submit" name="sub" value="Submit"></table>
            
	</form>
</div>
   </div>
        <?php
    //include('session.php');
//$con=mysqli_connect("localhost","root","","edpp") or die('error');
//$daten=filter_input(INPUT_POST,'Date1');
  $idn=filter_input(INPUT_POST,'docid');
  $namen=filter_input(INPUT_POST,'docname');
  $deptn=filter_input(INPUT_POST,'dept');
  $dob=filter_input(INPUT_POST,'g');
  $numn =filter_input(INPUT_POST,'num');
  $cityn=filter_input(INPUT_POST,'s');
  $email=filter_input(INPUT_POST,'e');
  $usenamen=filter_input(INPUT_POST,'user');
 // $emailn=filter_input(INPUT_POST,'e');
  //$passwordn=filter_input(INPUT_POST,'password1');
 
  //$sql= "INSERT INTO tble_pati_reg VALUES (NULL, '$daten,'$namen', '$gendern', '$agen',$emailn,$hnon,$streetn,$cityn,$pinn,$contactn,$passwordn);";
//$sql="INSERT INTO 'tble_pati_reg' ("p_id',`date`, `p_name`, `p_gen`, `p_age`, `p_email`, `p_hno`, `p_street`, `p_city`, `p_pin`, `p_contact`, `p_pwd`) VALUES($daten','$namen','$gendern', '$agen','$emailn','$hnon','$streetn','$cityn','$pinn','$contactn','$passwordn')";
  //$sql="INSERT INTO `tbl_pati_reg`(`date`, `p_name`, `p_gen`, `p_age`, `p_email`, `p_hno`, `p_street`, `p_city`, `p_pin`, `p_contact`, `p_pwd`) VALUES ('$daten','$namen','$gendern', '$agen','$emailn','$hnon','$streetn','$cityn','$pinn','$contactn','$passwordn')";
   $sql= "UPDATE `tbl_doc_reg` SET `doc_id`='$idn',`doc_name`='$namen',`dep_name`='$deptn',`doc_dob`='$g',`doc_quali`='$numn',
           `doc_pin`='$s',`doc_email`='$e',`username`='$user'
           WHERE doc_name='$login_session'";   
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