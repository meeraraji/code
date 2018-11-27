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
$name= filter_input(INPUT_POST, 'docname');
$departname= filter_input(INPUT_POST, 'depname');
$docdob= filter_input(INPUT_POST, 'dob');
$docage= filter_input(INPUT_POST, 'age');
$docquali= filter_input(INPUT_POST, 'quali');
$doccount= filter_input(INPUT_POST, 'cntnum');
$dochouseno= filter_input(INPUT_POST, 'hno');
$docstreet= filter_input(INPUT_POST,'street');
$doccity= filter_input(INPUT_POST, 'city');
$docdist= filter_input(INPUT_POST, 'dist');
$docpin= filter_input(INPUT_POST, 'pin');
$docemail= filter_input(INPUT_POST, 'email');
$docusername= filter_input(INPUT_POST, 'username');
$docpassword= filter_input(INPUT_POST, 'password');
$sql="INSERT INTO `tbl_doc_reg`(`doc_id`, `doc_name`, `dep_name`,  `doc_dob`, `doc_age`, `doc_quali`, `doc_contnum`, `doc_email`, `doc_hnum`,`doc_street`,`doc_city`,`doc_dist`,`doc_pin`,`doc_pass`,`username`) VALUES ('$docid','$name','$departname','$docdob','$docage','$docquali','$doccount','$docemail','$dochouseno','$docstreet','$doccity','$docdist','$docpin','$docpassword','$docusername')";
$result=mysqli_query($con,$sql);
echo $sql;
echo $result;

 if($result)
 {
	            
         	header("location:doctor page.php");
				
 }
else
{
	echo "error";
}

?>

</body>
</html>