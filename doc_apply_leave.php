<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leave form</title>
<script type="text/javascript">
function myFunction() {
    //var x = document.getElementById("fname");
 //   x.value = x.value.toUpperCase();
 <?php
  $m=document.doc_apply_leave.month.value;
  
include 'session';
 $con=mysqli_connect("localhost","root","","edpp") or die('error');
        $sql="select doc_id from tbl_doc_reg where username='$login_session'";
	$result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $id=$row['doc_id'];
 //echo $_POST['ddate']."<br>";
 //$thisuser=$_POST['ddate'];
 //$dvar=strtotime($thisuser);
 //$mon=date("m",$dvar);
// echo $mon."<br>";

 $sql="select w_date from tbl_cons_weekmonth where doc_id=$did and MONTH(w_date)={$m}";
 $result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count>=1)
{
$q=$row['w_date'];
 echo $q;
    echo "<select name='day'>";
        while($count>0)
        {           
      //   $row3=mysqli_fetch_array($result1,MYSQLI_ASSOC);
        echo "<option value=''>".hai."</option>";
        echo "<option value='".$row['w_date']."'>" .$row['w_date']."</option>";
        //echo $row3['p_id'];
        $c--;
        }
        echo "</select></p>";  
}
?>
 }
</script>
</head>
<body style="background-color:powderblue;">
<h1 align="center">EFFICIENT DOCTOR PATIENT PORTAL</h1>
<form method=POST action="doc_apply_leavec.php"> 
<fieldset style="width: 600px;align-content: left;align-content: right;margin-left: 450px;margin-top: 80px;">
        <legend>Apply leave</legend>
     
<table align="center">
<tbody>
<!--<tr><td>Enter id:</td><td><input type="text" name="did" /></td>-->
<!--<tr><td>Enter the month:</td><td><input name="ddate" type="date" /></td></tr>-->
    
    <tr><td>Enter the month:</td><td><select name="month" onchange="myFunction">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select></td></tr>   
    
<tr><td>Reason:</td><td><textarea rows="5" cols="30" name="reason"></textarea></td></tr>
<tr><td>Your remaining working day are:</td>
<td><select name="month">
<option value="january">january</option>
</select></td></tr>
<tr><td>Enter date:</td><td><input type="text" name="ldate" /></td>
</tbody>
</table>
<p align="center"><input type="submit" value="Apply leave" /></p>
</fieldset>
</form>
</body>
</html>