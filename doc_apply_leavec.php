<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<p>hai</p>
<?php
include 'session';
 $con=mysqli_connect("localhost","root","","edpp") or die('error');
        $sql="select doc_id from tbl_doc_reg where username='$login_session'";
	$result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $id=$row['doc_id'];
 echo $_POST['ddate']."<br>";
 $thisuser=$_POST['ddate'];
 $dvar=strtotime($thisuser);
 $mon=date("m",$dvar);
 echo $mon."<br>";
//$con=mysqli_connect("localhost","root","","edpp") or die('error');
//$did=$_POST['did'];
 $sql="select w_date from tbl_cons_weekmonth where doc_id=$did and MONTH(w_date)={$mon}";
 $result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count==1)
{
$q=$row['w_date'];
 echo $q;
    echo "<select name='day'>";
        while($count>0)
        {           
      //   $row3=mysqli_fetch_array($result1,MYSQLI_ASSOC);
        echo "<option value=''>".hai."</option>";
        echo "<option value='".$row['w_date']."'>" .$row['w_date']."</option>";
        echo $row3['p_id'];
        $c--;
        }
        echo "</select></p>";  
}
?>
</body>
</html>