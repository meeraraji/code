<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
    
<?php    
include('session.php');
   $nn=$_SESSION['pp'];
    echo $nn;
 $conid=mysqli_connect("localhost","root","","edpp") or die('error');
        $sqlid="select doc_id from tbl_doc_reg where username='$login_session'";
	$resultid=mysqli_query($con,$sqlid);
        $rowid=mysqli_fetch_array($resultid,MYSQLI_ASSOC);
        $id=$rowid['doc_id'];
              
//
$con=mysqli_connect("localhost","root","","edpp") or die('error');
$ddatef=$_POST['ddate'];
$diseasef=$_POST['disease'];
$presf=$_POST['prescription'];
$sql= "INSERT INTO `tbl_treat_hist`(`p_id`, `tdate`, `disease`, `prescription`, `doc_id`) VALUES ('$nn','$ddatef','$diseasef','$presf','$id')";
$result=mysqli_query($con,$sql);
echo $sql;
echo $result;

 if($result)
 {
	            
         	header("location:doc_add_prescription.php");
				
 }
else
{
	echo "error";
}

?>

</body>
</html>