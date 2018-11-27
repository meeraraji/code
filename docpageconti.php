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
            
              <h3 class="white">DOCTOR REGISTRATION</h3>
              
            </div>
          </div>
        </div>
      </div>
  <!--/ banner-->
  <!--service-->
  <form method="POST" action="docpageconti.php">
         <table align="center">
             <tr>
                  <td>Doc_id:</td>
                  <td><input type="text" name="doc_id" value="" autocomplete="off"/></td>
              </tr>
             <tr>
                  <td>Working time from:</td>
                  <td><input type="text" name="time" value="" autocomplete="off"/></td><td>To:<input type="text" name="ttime" value="" autocomplete="off"/></td>
              </tr>
              <tr>
                  <td>Booking Amount:</td>
                  <td><input type="text" name="amt" value="" autocomplete="off"/></td>
              </tr>
              <tr>
                  <td>Working Dates:</td>
                  <td><input type="date" name="wdate" value="" autocomplete="off"/></td>
              </tr>
              <tr>
                  <td>Patient Count:</td>
                  <td><input type="text" name="pcount" value="" autocomplete="off"/></td>
              </tr>
              <tr>
                  <td><input type="submit" name="submit" value="SUBMIT" onclick='alert("data added succesfully")'/></td>
               </tr>
         </table>
  </form>
 <?php
 $con=mysqli_connect("localhost","root","","edpp") or die('error');
$wtime= filter_input(INPUT_POST,'time');
$wttime= filter_input(INPUT_POST, 'ttime');
$amount= filter_input(INPUT_POST, 'amt');
$workingdate= filter_input(INPUT_POST, 'wdate');
$patientcount= filter_input(INPUT_POST, 'pcount');
//$sql="INSERT INTO `tbl_doc_regularweekmonth`( `time_from`, `time_to`,  `book_amt`, `w_date`, `p_count`) VALUES ('$wtime','$wttime','$amount','$workingdate','$patientcount')";
$result=mysqli_query($con,$sql);
echo $sql;
echo $result;
 if($result)
 {
	            
         	header("location:docpageconti.php");
				
 }
else
{
	echo "error";
}
   

?>

   <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
   