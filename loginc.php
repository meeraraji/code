<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
$con=mysqli_connect("localhost","root","","edpp") or die('error');
$thisuser= filter_input(INPUT_POST, 'username');
$thispass= filter_input(INPUT_POST, 'password');

$sql =" select type from tbl_login where username ='$thisuser' and password ='$thispass'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==1)
{
    echo $row['type'];
    $_SESSION['login_user']=$thisuser; 
if($row['type']=="admin")
{
	header("location:admhome.php");
            }
  else if($row['type']=="doctor")
  {
	header("location:doctor_home.php");
  }
else if($row['type']=="patient")
{
	header("location:patient.html");
            }
            }
else
{
	echo "invalid user";
}

?>
</body>
</html>