<?php

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="1.css" />


<style type="text/css">
<!--
.style1 {font-family: Arial}
.style2 {font-weight: bold}
.style3 {color: #FFFFFF}
-->
</style>
</head>
<?php
$con = mysql_pconnect("localhost","root","");
mysql_select_db("connect");
if(!empty($_REQUEST['button']))
{
	//print_r($_REQUEST);
$q="select * from loginfac where fuserName='".$_REQUEST['txtname']."' and fpassword='".$_REQUEST['txtpwd']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n!=0)
{
$_SESSION['name']=$_REQUEST['txtname'];
$_SESSION['id']= $row['0'];
header("Location:home1.php");
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
  <div id="header">
    <div align="center">
      <h1><span class="style9 style3">University Management System</span><br />
      </h1>
    </div>
  <div id="caption"></div></div>
</div>
<div align="center" class="style1"><br />
  <br />
     <div id="wrapper">
     <div id="box">
</div>
<h3 class="style3 style1" id="text"></h3>
<span class="style1">
<p><br />
  <br />
</p>
<p><br />
       
  
<form name="myform" method="POST" action="#">
  </span>
</p>
<table>
  <tr><th width="280" class="style1"><?=((!empty($_REQUEST['err']))?($_REQUEST['err']):'')?>
  <div align="center"></div></th></tr>
  <tr>
   <td class="style1"> <div align="right">Faculty Username </div></td>
  <td width="219" class="style1"><input type="text" name="txtname" /></td></tr>
  <tr><td class="style1"><div align="right">Password</div></td>
  <td class="style1"><input type="password" name="txtpwd" />
    <input type="submit" name="button" value="signin" id="search-submit" /></td></tr>
</table>

    <img src="spm/Pil,%20Student%20Portal.jpg" width="230" height="146" />
    <div align="center"><span class="style1">
    <table>
    </span>
    </div>
    <tr><td class="style1">
	  <p>&nbsp;	  </p>
	  <p>&nbsp;      </p></td>
	
	
	<td class="style1"><a href="index.php">Student Login</a></td>
	<h2 class="style4 style1" id="tex"></h2>
	<br /><br /><br />
	 <div class="style1" id="imag">
	</div>
	<div class="style1" id="name">
	<h3 class="style6" align="center"></h3>	</div>
   
<?php } ?>

</body>
</html>
