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
  <script type="text/javascript">
    function validateForm() {
  if(document.booking.id1.value=="")
  {
    alert("You need to select the patientid ");
    return false;
   }
 }
   </script>
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
              <h3 class="white">Booking Details</h3>
              
            </div>
           </div>
        </div>
      </div>
   
  <!--/ banner-->
  <!--service-->

<form action="doc_treatment_hist.php" method="post" name="booking" onsubmit="return validateForm();">
<fieldset style="width: 745px;align-content: left;align-content: right;margin-left: 400px;margin-top: 80px;">
<!--<p align="center"><label>Enter ID:</label><input type="text" name="did" /> <button type="submit" value="submit">submit</button></p><br />
<br />-->



<table border="1" align="center">
<tr>
<th>PATIENT ID</th><th>APPOINTMENT NUMBER</th><th>NAME</th><th>AGE</th>
</tr>
    
<?php 
include('session.php');
  // if (isset($_POST['did'])) { 
  //      $data = $_POST['did']; 
        
   
        
        $con=mysqli_connect("localhost","root","","edpp") or die('error');
        $sql="select doc_id from tbl_doc_reg where username='$login_session'";
	$result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $id=$row['doc_id'];
        
        
        
        
        
       
        $con1=mysqli_connect("localhost","root","","edpp") or die('error');
        $booking=date("Y-m-d");
	$sql1="select * from tbl_pati_book where doc_id='$id' and bdate='$booking'";
	$result1=mysqli_query($con1,$sql1);
	$count=mysqli_num_rows($result1);
        $c=$count;
	while($count>0)
	{
		$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
		echo"<tr>";
		echo"<td>".$row1['p_id']."</td>";
		echo"<td>".$row1['app_id']."</td>";
               $pid=$row1['p_id'];
             $con2=mysqli_connect("localhost","root","","edpp") or die('error');
               
               $sql2="select p_name,p_age from tbl_pati_reg where p_id=$pid";
	       $result2=mysqli_query($con2,$sql2);
               $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
		echo"<td>".$row2['p_name']."</td>";
                echo"<td>".$row2['p_age']."</td>";
             //   echo"<td>".$row1['bdate']."</td>";
		echo"</tr>";
              $count--;
               
	}
	//  }
        echo "</table>";
           
        echo "<p align='center'>search patient";
        echo "<select name='id1'>";
        while($c>0)
        {
           
         $row3=mysqli_fetch_array($result1,MYSQLI_ASSOC);
         echo "<option value=''>".hai."</option>";

        echo "<option value='".$row1['p_id'] ."'>" .$row1['p_id'] ."</option>";
        echo $row3['p_id'];
        $c--;
        }
        echo "</select></p>";    
        
        echo "<p align='center'><input type='submit' value='search' name='btn'></input></p>";
      //  if (isset($_POST['btn']))
       /// {
        //if (!isset($_POST['id1'])) 
        //{
         //   echo "error"; 
      //  }
     //   }
        
            ?>
  <!--  <a href="xxx.php?id<?php //echo $data['id']; ?>&mk=">CLICK</a>-->
   <!--  <select name=id>
   <
         
             echo "<option value='".$row1['p_id'] ."'>" .$row1['p_id'] ."</option>";
             include('session.php');
  // if (isset($_POST['did'])) { 
  //      $data = $_POST['did']; 
        
   
        
        $con=mysqli_connect("localhost","root","","edpp") or die('error');
        $sql="select doc_id from tbl_doc_reg where username='$login_session'";
	$result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $id=$row['doc_id'];
        
        
        
        
        
       
        $con1=mysqli_connect("localhost","root","","edpp") or die('error');
        $booking=date("Y-m-d");
	$sql1="select * from tbl_pati_book where doc_id='$id' and bdate='$booking'";
	$result1=mysqli_query($con1,$sql1);
	$count=mysqli_num_rows($result1);
	while($count>0)
	{
		$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
		echo"<tr>";
		echo"<td>".$row1['p_id']."</td>";
		echo"<td>".$row1['app_id']."</td>";
               $pid=$row1['p_id'];
             
		echo"</tr>";
              $count--;
             echo "<select name=id>";
             echo "<option value='".$row1['p_id'] ."'>" .$row1['p_id'] ."</option>";  
	}
	//  }
  


//echo   "<p align="center"><label>Search patient:</label><input type="text" name="pid" value="patient id"/>"
     //<input type="button" value="submit" id="btn" onClick="window.location = 'http://localhost/hospital/doc_treatment_hist.php'"></input></p><br />-->
  <!--   //echo "<option value='".$row1['p_id'] ."'>" .$row1['p_id'] ."</option>";   
 //    echo "<select name="id">";

   //  echo "<option value="">Select...</option>";
  

 //echo "<option value="M">Male</option>";

 //echo "<option value="F">Female</option>";
        ?>

</select> -->
      
  
        
        
        
        

<br /><br />
<br />
</fieldset>
</form>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body> 
</html>