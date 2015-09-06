<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="1.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<h1 align="center" class="style1">University Management System </h1>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1"><img src="spm/update.jpg" width="155" height="126"></p>
<p>&nbsp;</p>
<table width="509" height="28" border="0" align="center">
  <tr>
    <td width="118"><h2><a href="details.php">viewdetails</a></h2></td>
    <td width="147"><h2><a href="update.php">updatedetails</a></h2></td>
    <td width="133"><h2><a href="report.php">View Report</a></h2></td>
    <td width="93"><h2><a href="index.php">logout</a> </h2></td>
  </tr>
</table>
<form name="form1" method="post" action="#">
  <p>
    Sno
    <input type="text" name="sno">
</p>
  <p>Semester
    <select name="sem">
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
    </select>
</p>
  <p>Branch
    <select name="branch">
	<option>CSE</option>
	<option>ECE</option>
	<option>EEE</option>
	<option>EIE</option>
	<option>IT</option>
	<option>ME</option>
    </select>
  </p>
  <p>Date of Birth:    
    <input type="text" name="dob">
  </p>
  <p>Father Name
    <input type="text" name="fatname">
  </p>
  <p>    Door No
    <input type="text" name="doorno">
</p>
  <p>
    Street Name
    <input type="text" name="street">
</p>
  <p>
    Area
    <input type="text" name="area">
  </p>
  <p>
    City
    <input type="text" name="city">
  </p>
  <p>Pincode
    <input type="text" name="pincode">
  </p>
  <p>Phone No
    <input type="text" name="pno"> 
  </p>
  <p>
    <input type="submit" name="button" value="Submit">  
  </p>
</form>
</body>

<?php
session_start();
$mysql=mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("connect");
if(!empty($_REQUEST['button']))
{
$q="SELECT sno FROM details WHERE sno='".$_REQUEST['sno']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n!=0)
{   $q1= "UPDATE details SET semester='".$_REQUEST['sem']."', branch='".$_REQUEST['branch']."', date='".$_REQUEST['date']."' ,fatname='".$_REQUEST['fatname']."' ,doorno='".$_REQUEST['doorno']."' ,streetname='".$_REQUEST['street']."' ,area='".$_REQUEST['area']."' ,city='".$_REQUEST['city']."' ,pincode='".$_REQUEST['pincode']."' ,pno='".$_REQUEST['pno']."' WHERE sno='".$_REQUEST['sno']."'";
         mysql_query($q1) or die(mysql_error());

	
	 header("Location:update.php?details");
}
else
{	header("Location:update.php?err= Invalid  password number");
}

}
?>
</html>
