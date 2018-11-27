<?php 
$hostname="localhost";
$username="root";
$password="";
$databaseName="edpp";
$connect=mysqli_connect($hostname,$username,$password,$databaseName);
 $query="SELECT doc_name FROM tbl_doc_reg";
 $designation="";
$result1=mysqli_query($connect,$query);
?>

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
                <a class="navbar-brand" href="#"><h2 class="white">ADMIN</h2></a>
            </div>
              <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="admhome.php">Home</a></li>
                <li class=""><a href="admupdateremove.php">Add/Update</a></li>
               
                
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
              <h3 class="white">UPDATE/REMOVE DOCTOR</h3>
              
            </div>
          </div>
        </div>
      </div>
  <!--/ banner-->
  <!--service-->
  <form method="POST" action="admupdateinfo.php">
<table align="center">
<tr>
<td>Dep-Name:</td>
        <td><select name="department">
                <option value="select">select...</option>
             <option value="general medicine">general medicine</option>
             <option value="cardiology">cardiology</option>
             <option value="neurology">neurology</option>
              <option value="gynacology">gynacology</option>
             <option value="ent">ENT</option>
             <option value="monthly">oncology</option>
                      
                        
    </select>
</tr>

<tr>
<td>Doc_Name:</td>
<td><select name="doctorid">
        <option value="">select.............</option>
 <?php
                        while($row1=mysqli_fetch_array($result1)):;?>
                          <option><?php echo $row1[0];?></option>
                        
                       <?php endwhile;
                       ?>
    </select>
</tr>
<tr>
    <td><input type="submit" name="submit" value="submit" /></td>
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
