<?php

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {
	color: #FFFFFF;
	font-family: "Website for the future generation";
}
.style3 {color: #999999; }
.style4 {color: #333333}
.style5 {color: #666666; }
.style6 {color: #330000; }
.style9 {font-family: "Lucida Handwriting"}
-->
</style>
</head>
<?php
$con = mysql_pconnect("localhost","root","");
mysql_select_db("connect");
if(!empty($_REQUEST['button']))
{
	//print_r($_REQUEST);
$q="select * from login where userName='".$_REQUEST['txtname']."' and password='".$_REQUEST['txtpwd']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n!=0)
{
$_SESSION['name']=$_REQUEST['txtname'];
$_SESSION['id']= $row['0'];
header("Location:home.php");
}
else
{   
	header("Location:conn.php?err=Invalid Username and Password");
}
}
else{
?>
<body>
<div class="style2 style1" >
  <div id="header"><span class="style9">student portal</span> <br />
 <div id="caption"></div></div>
</div>
<div align="center"><span class="style9">STUDENT PORTAL MANAGEMENT </span><br />
  <br />
</div>
<div id="wrapper">
   <div id="box">
   <h3 class="style3" id="text"></h3><br /><br /><br />
   
  
   <form name="myform" method="POST" action="#">
   <table>
   <tr><th><?=((!empty($_REQUEST['err']))?($_REQUEST['err']):'')?></th></tr>
   <tr>
   <td>
   <h5 class="style3" id="user">username</h5></td>
   <td><input type="text" name="txtname" /></td></tr>
  <tr><td><h5 class="style3" id="use">password</h5></td>
  <td><input type="password" name="txtpwd" /></td></tr>
</table>

    <table>
	<tr><td>
	<input type="submit" name="button" value="signin" id="search-submit" /></td>
	<td>NewAccount?</td>
	<td><a href="signup.php" class="style5" id="sign">signup</a></td></tr></table></form>
	<td><a href="index1.php">login as faculty</a></td>
	<h2 class="style4" id="tex"></h2>
	<br /><br /><br />
	 <div id="imag">
	</div>
	<div id="name">
	<h3 class="style6" align="center"></h3>	</div>
   </div>
</div></div>
<?php } ?>

</body>
</html>
