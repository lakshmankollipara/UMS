<HTML>
<HEAD>
<TITLE>
LOGIN
</TITLE>
<script type="text/javascript">

function validateForm()
{
var x=document.forms["myForm"]["username"].value
var y=document.forms["myForm"]["password"].value
if ((x==null || x=="")||(y==null || y==""))
  {
  alert("User name and password must be filled out");
  return false;
  }
}
</script>

</HEAD>
<BODY background="ase.jpg">
<form name="myForm" action="#" onsubmit="return validateForm()" method="post" >
<br>
<center><font size=20 color="white"><blink>OBR</blink></font>
</center>
<hr><marquee behaviour="alternate"><font face="comic sans MS"color="white"><h4>OBR Welcomes you</h4></font></marquee>
<hr>

<fieldset >
<legend align="center">
<font color="white"><marquee>LOGIN</marquee></font>
</legend>
<p align="center">
<font color="white">
Username :<input  type="text"
	name="username"
	value=""
	size="25"
	maxlength="50">
<br>
<br>
Password :<input       type="password"
	name="password"
	value=""
	size="25"
	maxlength="25">
<br><br>	
<input       type="submit"
	name="submit"
	value="signin">
<input       type="reset"
	name="reset"
	value="reset"><br>
</p>
</fieldset><hr>
<br><a href="4frgt.php" ><h2><font color="white">Forgot Password</font></h2></a>	Click this if you have forgotten your password or unable to open your user page.<br>
<a href="sup.php" ><h2><font color="white">Sign-up</font></h2></a>If you don't have account click on sign-up.<br>
</font>
</form>
</BODY>
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
if(!empty($_REQUEST['submit']))
{
$q="select * from userinfo where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n!=0)
{
$_SESSION['name']=$_REQUEST['username'];
$_SESSION['id']= $row['0'];
header("Location:onclicksignin.html");
}
else
{
	header("Location:unin.html?err=Invalid Username and Password");
}
}
?>
</HTML>