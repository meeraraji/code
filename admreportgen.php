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
                <a class="navbar-brand" href="#"><h2 class="white">@ADMIN</h2></a>
            </div>
              <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="admhome.php">Home</a></li>
                
                <li class=""><a href="admreportgen.php">Report Generation</a></li>
                
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
              <h3 class="white">REPORT GENERATION</h3>
              
            </div>
          </div>
        </div>
      </div>
  <!--/ banner-->
  <!--service-->
  <form method="GET" action="pdffile.php">
<fieldset style="width:600px;align-content:left;margin-left:350px;margin-top:36px; ">
<legend align="center"></legend>
<table align="center">
<tr>
<td>Dep-Name:</td>
<td> <select name="deptname">
             <option value="select">select...</option>
             <option value="general medicine">general medicine</option>
             <option value="cardiology">cardiology</option>
             <option value="neurology">neurology</option>
              <option value="gynacology">gynacology</option>
             <option value="ent">ENT</option>
             <option value="monthly">oncology</option>
             
         </select>
                 </td>
</tr>
<tr>
<td>Doc-Name:</td>
<td><select name="select doctor">
        <option value="select">select doctor....</option>
         <?php
    $con=mysqli_connect("localhost","root","","edpp") or die ('error');
    $sql = "SELECT doc_name FROM tbl_doc_reg";
$result = mysqli_query($con,$sql);

//echo "<select name='doctorid'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['doc_name'] ."'>" . $row['doc_name'] ."</option>";
}
echo "</select>";
 // while (count>0)
    //{
      //  $row=mysql_fetch_array($result,MYSQLI_ASSOC);
       // echo '<option value='.$row['doc_name'].'>'.$row['doc_name'].'</option>';
       //  $count--;
   // }-->
   
   ?>
   </select>
   
</td>
</tr>
<tr>
<td>Enter the month:</td><td><select name="month">
  <option value="">Select...</option>
  <option value="january">January</option>
  <option value="February">February</option>
  <option value="march">march</option>
  <option value="april">april</option>
  <option value="may">may</option>
  <option value="july">june</option>
  <option value="july">july</option>
  <option value="august">august</option>
  <option value="september">september</option>
  <option value="october">october</option>
  <option value="november">November</option>
  <option value="december">December</option>
</select>
</tr>
<tr>
<td><input type="submit" name="report" value="GENERATE REPORT" onclick="pdffile.php"/></td>
</tr>
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