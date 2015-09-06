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
.style13 {font-family: Arial}
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
  <div id="header"><br />
 <div id="caption"></div></div>
</div>
<div align="center">
  <h1><span class="style1">University Management System</span><br />
  </h1>
  <h1><img src="spm/Student_Portal_bg.png" width="183" height="138" /><br />
  </h1>
</div>
<div id="wrapper"><div id="box">
  <form name="myform" method="POST" action="#">
     <?=((!empty($_REQUEST['err']))?($_REQUEST['err']):'')?>
<p><fieldset><legend class="style13">Login</legend>
      <span class="style13">User Name</span>:
        <input type="text" name="txtname" />
    </p>
    <p>        <span class="style13">Password</span>:
      <input type="password" name="txtpwd" />
      <input type="submit" name="button" value="signin" id="button" /> 
      </p>
    <p align="center">New Account? <a href="signup.php" class="style5">Signup</a> </p>
</fieldset>
    </form>
	<td class="style13"><a href="index1.php">Login as Faculty</a>!</td>
	<h2 class="style4" id="tex"></h2>
	<br /><br /><br />
	 <div id="imag">
	</div>
	<div id="name">
	<h3 class="style6" align="center"></h3>	</div>
   </div>
</div>
</div>
<?php } ?>

</body>
</html>
