<?php
session_start();
$con=mysqli_connect("localhost","root","","edpp") or die('error');
$user_check=$_SESSION['doc_name'];
$sql="select doc_name from tbl_doc_reg where doc_name='$user_check'";
$ses_sql=mysqli_query($con,$sql);
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session =$row['doc_name'];
if(!isset($login_session)){
header('Location: login.php'); // Redirecting To Home Page
}
?>