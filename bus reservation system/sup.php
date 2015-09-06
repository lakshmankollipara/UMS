<HTML>
<HEAD>
<TITLE>SIGN UP</TITLE>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["Name"].value
var a=document.forms["myForm"]["password"].value
var h=document.forms["myForm"]["password1"].value
var b=document.forms["myForm"]["fname"].value
var c=document.forms["myForm"]["lname"].value
var d=document.forms["myForm"]["sec"].value
var g=document.forms["myForm"]["ans"].value
var e=document.forms["myForm"]["sex"].value
var f=document.forms["myForm"]["pemail"].value
if ((x==null || x=="")||(a==null || a=="")||(b==null || b=="")||(c==null || c=="")||(d==null || d=="")||(f==null || f=="")||(g==null || g=="")||(h==null || h==""))
 {
  alert("you did not fill all the fields,so please fill all the fields");
  return false;
  }
else
if(a.length<=6)
{
 alert("password length is less than 6 characters,please check it");
  return false;
}
if(a!=h)
{
alert("passwords entered don't match,please check the passwords");
return false;
}
}

</script>
</head>
<BODY background="bbg.png" >
<form name="myForm" action="#" onsubmit="return validateForm()"
	method="post"
	>
<h3><center>Please fill all the fields provided here</center><h3>
<hr>
<table align="center" border=0>
<tr>
<td>
USERNAME:
</td>
<td><input  type="text"
	name="Name"
	size="25"
	maxlength="50">
</td>
</tr>
<tr>
<td>
PASSWORD: 
</td><td><input  type="password"
	name="password" value=""size="25" maxlength=10><i>(*Minimum 6 characters)</i><br>
</td>
</tr>
<tr>
<td>
RETYPE PASSWORD:
</td>
<td><input type="password" name="password1" value="" size="25" maxlength=10><i>(*Minimum 6 characters)</i><br> 
</td>
</tr>
<tr>
<td>
FIRST NAME:
</td>
<td> <input       type="text"
	name="fname"
	value=""
	size="25"
	maxlength="50">
</td>
</tr>
<tr>
<td>LAST NAME:</td>
<td><input       type="text"
	name="lname"
	value=""
	size="25"
	maxlength="50">
</td>
</tr>
<tr>
<td >
ENTER QUESTION:</td>
<td><input       type="text"
	name="sec"
	value=""
	size="25"><i>(For Security Purpose)</i></td>
</tr>
<tr>
<td >
ENTER ANSWER:</td>
<td><input       type="text"
	name="ans"
	value=""
	size="25"></td>
</tr>
<tr>
<td>GENDER
</td>
<td>
<input       type="radio"
	name="sex"
	value="male">Male
</td>
</tr>
<tr>
<td></td>
<td>
<input       type="radio"
	name="sex"
	value="female">Female
</td>
</tr>
<tr>
<td>
QUALIFICATION</td>
<td>
<input       type="radio"
	name="a">Student</td></tr>
<tr>
<td>
</td>
<td>
<input       type="radio"
	name="a">Professional</td>
</tr>
<tr>
<td>
</td>
<td>
<input       type="radio"
	name="a">Others
</td></tr>
<tr>
<td >
E-MAIL:</td><td><input       type="text"
	name="pemail"
	size="40"
	maxlength="50"><br>
</td>
</tr>
<tr>
</tr>
<tr>
<td>
</td>
<td>
<input       type="submit"
	name="submit"
	value="register">
<input	type="reset" name="reset"
	value="reset">
</td>
</tr>
</table>
</form>
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
if(!empty($_REQUEST['submit']))
{	
	$q="INSERT INTO userdetail VALUES('".$_REQUEST['Name']."', '".$_REQUEST['password']."','".$_REQUEST['fname']."', '".$_REQUEST['lname']."','".$_REQUEST['pemail']."','".$_REQUEST['sec']."','".$_REQUEST['ans']."')";
$r="INSERT INTO userinfo VALUES('".$_REQUEST['Name']."', '".$_REQUEST['password']."','".$_REQUEST['fname']."')";
	
		mysql_query($q) or die(mysql_error());
	mysql_query($r) or die(mysql_error());
header("Location:inin.html");
}
?>
</BODY>
</HTML>
