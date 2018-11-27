  
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <title>EDPP</title>
    <h1 align="center">EFFICIENT DOCTOR PATIENT PORTAL</h1>
    </head>
    <body>
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
                <a class="navbar-brand" href="#"><h2 class="white">patient</h2></a>
            </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="pati_home.php">Home</a></li> 
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>                

          
      <div class="container">
        <div class="row">
          <div class="banner-info">
            
            <div class="banner-text text-center">
              <h1 class="white">EFFICIENT DOCTOR PATIENT PORTAL</h1>
              
            </div>
           
          </div>
        </div>
      </div>
  </section>
  <!--/ banner-->
  <!--service-->
        <form name="doc_search.php" method="post" action="doc_search.php">
        <table align="center">
            <tr>
            <caption align="center"><h3>About Doctors</h3></caption>
            </tr>
            <?php
            
            //echo "<tr>";
            //echo "<td>";echo "Enter the name of the doctor";echo "<input type='text' name='doc'>";echo "</td>";echo "</tr>";
                //echo "<td>"; echo "Search by department :";echo "</td>"; echo "<td>";-->
                   //$con=mysqli_connect("localhost","root","","edpp");
                   //mysql_select_db('edpp');
                   //$sql = "SELECT dep_name FROM tbl_dept";
                   //$result1=mysqli_query($con,$sql);
                   //$result = mysql_query($sql);
                   //$row = mysqli_fetch_array($result1);
                    //echo "<select name='dep'>";
                    //while ($row = mysqli_fetch_array($result1))
                    //while($row)
                    //{
                      //echo "<option value='" . $row['dep_name'] ."'>" . $row['dep_name'] ."</option>";
//}
//echo "</select>"; echo "</td>";
            
            //echo "<tr>";echo "<td>";echo "<input type='submit' name='docsearch' value='Search' onsubmit="return search();">";echo "</td>";echo "</tr>";
            echo "<tr>"; echo "<td>";echo "Doctor Name";echo "</td>";echo "<td>";echo "Department Name";echo "</td>";echo "<td>";echo "Qualification";echo "</td>";echo "</tr>";
        //if(isset($_POST['dep']))
           // {
        //$s = $_POST['doc']; 
        ///}
        $con=mysqli_connect("localhost","root","","edpp") or die('error');
       //$n=$_GET['doc'];
	$sql1="select doc_name,dep_name,doc_quali from tbl_doc_reg";
	$result=mysqli_query($con,$sql1);
	$count=mysqli_num_rows($result);
        while($count>0)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo"<tr>";
                echo "<td>".$row['doc_name']."</td>";
		echo"<td>".$row['dep_name']."</td>";
		echo"<td>".$row['doc_quali']."</td>"; echo "</tr>";
                $count--;
               //$pid=$row['p_id'];
        }
          //$con1=mysqli_connect("localhost","root","","edpp") or die('error');

            //   $sql2="select p_name,p_age from tbl_pati_reg where p_id=$pid";
	      // $result1=mysqli_query($con1,$sql2);
               //$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                //echo"<td>".$row1['p_age']."</td>";
                //echo"<td>".$row['prescription']."</td>";
		//echo"</tr>";
                //$name=$row1['p_name'];
		//$count--;
	//}
        ?>
            <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
    </body>
</html>
