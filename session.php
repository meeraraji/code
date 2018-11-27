<?php
session_start();
$con=mysqli_connect("localhost","root","","edpp") or die('error');
$user_check=$_SESSION['login_user'];
$sql="select username from tbl_login where username='$user_check'";
$ses_sql=mysqli_query($con,$sql);
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session =$row['username'];
if(!isset($login_session)){
header('Location: login.php'); // Redirecting To Home Page
}
?>
