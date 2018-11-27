<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
 <?php
$con=mysqli_connect("localhost","root","","edpp") or die('error');
$docid= filter_input(INPUT_POST,'doctorid');
$days= filter_input(INPUT_POST,'wdays');
$sql="INSERT INTO `tbl_cons_weekmonth`(`doc_id`, `wdays`) VALUES ('$docid','$days')";
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

</body>
</html>